<?php

namespace App\DataTables;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function(Product $product) {
                return '<span style="display:flex">
                 <a href="' . route('admin.product.edit', $product->id) . '" class="flex items-center mr-3 text-theme-10" style="color:green;"> <svg class="h-6 w-6" <svg  width="20px"  height="20px"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                 <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" /> 
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg> </a> 
                 <form action="' . route('admin.product.destroy', $product->id) . '" method="POST" class="m-0">
                 ' . csrf_field() . '
                 ' . method_field("DELETE") . '
                 <button type="submit" class="delete flex items-center mr-3 text-theme-35" style="border: none; text-decoration: none; background: white; color:red;"><svg  class="h-6 w-6 " xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
               </form>
                 </span>';
            })
            ->editColumn('name',function (Product $product)
            {
                
                return '<a href="' . url('/product/' . $product->slug) . '" target="_blank">' . $product->name . '</a>';
                
            })
            ->editColumn('status' , function(Product $product){
                if ($product->status == '1') {
                   $response = '<span class="badge text-capitalize badge-light-success badge-pill">Active</span>';  // JKDobariya
                }
                else if ($product->status == '0') {
                    $response = '<span class="badge text-capitalize badge-light-secondary badge-pill">Deactive</span>';
                }
                else {
                    $response = "";
                }
                return $response;
        })
        
        ->editColumn('image', function (Product $product){
           return '<div class="media-aside align-self-center b-avatar badge-light-info rounded-circle">
            <span class="b-avatar-img">
            <img alt="" class="indeximg" src="' . url($product->image) . '" width="60px" style="border-radius:50%">
            </span>
            </div>';
        })
        ->addColumn('check' , function (Product $product){
            return '<input type="checkbox" class="sub_chk" value="" name="chek" data-id="'.$product->id.'">';
        })
        ->rawColumns(['action', 'status', 'image','check','name']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Product $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('product-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            // Column::make('check')->title('<input type="checkbox" id="select-all" class="sub_chk" data-id="$product->id">')->orderable(false),
           
            Column::make('id')->title('ID'),
            Column::make('name')->title('Name'),
            Column::make('image')->title('Image'),
            // Column::make('description')->title('Description'),
            // Column::make('slug')->title('Slug'),
            // Column::make('code')->title('Code'),
            // Column::make('description')->title('Category'),
            Column::make('status')->title('Status'),
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
        return 'Product_' . date('YmdHis');
    }
}
