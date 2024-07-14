<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function(Category $Category) {
                return '<span style="display:flex">
                <a href="' . route('admin.category.show', $Category->id) . '" class="flex items-center mr-3 text-theme-23 " style="padding-right:8px; color:#997a00;"><svg  class="h-4 w-4 " xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg> </a>
                 <a href="' . route('admin.category.edit', $Category->id) . '" class="flex items-center mr-3 text-theme-10" style="color:green;"> <svg class="h-6 w-6" <svg  width="20px"  height="20px"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                 <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" /> 
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg> </a> 
                 <form action="' . route('admin.category.destroy', $Category->id) . '" method="POST" class="m-0">
                 ' . csrf_field() . '
                 ' . method_field("DELETE") . '
                 <button type="submit" class="delete flex items-center mr-3 text-theme-35" style="border: none; text-decoration: none; background: white; color:red;"><svg  class="h-6 w-6 " xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
               </form>
                 </span>';
            })
            ->editColumn('name',function (Category $Category)
            {
                
                return '<a href="' . url('/category/' . $Category->slug) . '" target="_blank">' . $Category->name . '</a>';
                
            })
            ->editColumn('status' , function(Category $Category){
                if ($Category->status == '1') {
                   $response = '<span class="badge text-capitalize badge-light-success badge-pill">Active</span>';  // JKDobariya
                }
                else if ($Category->status == '0') {
                    $response = '<span class="badge text-capitalize badge-light-secondary badge-pill">Deactive</span>';
                }
                else {
                    $response = "";
                }
                return $response;
        })
        
        ->editColumn('image', function (Category $Category){
           return '<div class="media-aside align-self-center b-avatar badge-light-info rounded-circle">
            <span class="b-avatar-img">
            <img alt="" class="indeximg" src="' . url($Category->image) . '" width="60px" style="border-radius:50%">
            </span>
            </div>';
        })
        ->addColumn('check' , function (Category $Category){
            return '<input type="checkbox" class="sub_chk" value="" name="chek" data-id="'.$Category->id.'">';
        })
        ->rawColumns(['action', 'status', 'image','check','name']);
    }


    /**
     * Get the query source of dataTable.
     */
    public function query(Category $model): QueryBuilder
    {
        return $model->newQuery();
    }

        /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('categorydatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                   ->orderBy([0, 'asc'])
                    ->parameters([
                        'stateSave' => true,
                        'select' => true,
                        'stateSaveParams' => 'function(settings, data) {
                        data.selected = this.api().rows({selected:true})[0];
                        }',
                        'stateLoadParams' => 'function(settings, data) {
                       
                        }',
                    ])
                    ->buttons(
                Button::make('create')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Blog')->className('btn btn-dark btn-relief-dark btnindex btn-sm'),
                // Button::make('export')->text('Export')->className('btn btn-dark btn-relief-dark btnindex btn-sm'),
                Button::make('reset')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg> Reset')->className('btn btn-primary btn-relief-primary btnindex btn-sm'),
                Button::make('reload')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg> Reload')->className('btn btn-primary btn-relief-primary btnindex btn-sm'),
                Button::make('print')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print')->className('btn btn-primary btn-relief-primary btnindex btn-sm'),
                Button::make('excel')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg> Excel')->className('btn btn-primary btn-relief-primary btnindex btn-sm'),
                Button::make('csv')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> CSV')->className('btn btn-primary btn-relief-primary btnindex btn-sm'),
                Button::make('pdf')->text('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> PDF')->className('btn btn-primary btn-relief-primary btnindex btn-sm')
                    );
    }

   /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            // Column::make('check')->title('<input type="checkbox" id="select-all" class="sub_chk" data-id="$product->id">')->orderable(false),
           
            Column::make('id')->title('ID'),
            Column::make('name')->title('Name'),
            Column::make('image')->title('Image'),
            // Column::make('slug')->title('Slug'),
            // Column::make('code')->title('Code'),
            // Column::make('description')->title('Category'),
            // Column::make('status')->title('Status'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
           //  Column::make('created_at'),
            // Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Category_' . date('YmdHis');
    }
}
