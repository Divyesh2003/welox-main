@section('title', 'Welox Pharma || Category Show')

@extends('admin.layouts.app')
@section('title', __('admin.show') . ' ' . __('admin.blogcategory'))
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-8 col-12 mb-4 order-0">
                <div class="card p-4">
                                <div class='card-header pb-0'>
                                    <h4 class='card-title'>Blog Category</h4>
                                </div>
                                <hr class="invoice-spacing" />
                                <div class='card-body pt-0'>
                                    <table class="table">
                                        <tr>
                                            <th>{{ __('admin.id') }}</th>
                                            <td>{{ $blogcategory->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.blogcategory') }}</th>
                                            <td>{{ $blogcategory->parent_id }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.name') }}</th>
                                            <td>{{ $blogcategory->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.slug') }}</th>
                                            <td>{{ $blogcategory->slug }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.description') }}</th>
                                            <td>{!! $blogcategory->description !!}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.metatitle') }}</th>
                                            <td>{{ $blogcategory->meta_title }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.metadescription') }}</th>
                                            <td>{{ $blogcategory->meta_description }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.metakeywords') }}</th>
                                            <td>{{ $blogcategory->meta_keyword }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('admin.status') }}</th>
                                            <td>{{ $blogcategory->status == '1' ? 'Active' : 'Deactive'}}</td>
                                        </tr>
                                    </table>
                                    <div class='mt-3'>
                                        <a href='{{ route('admin.blog.category.index') }}'
                                            class='btn btn-relief-dark btn-sm float-end'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                                                viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                                stroke-width='2' stroke-linecap='round' stroke-linejoin='round'
                                                class='feather feather-chevrons-left'>
                                                <polyline points='11 17 6 12 11 7'></polyline>
                                                <polyline points='18 17 13 12 18 7'></polyline>
                                            </svg>
                                            {{ __('back') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                        <div class='col-md-4 col-12'>
                            <div class="card">
                                <div class="card-body sideimg">
                                    <img src="{{ url('') }}/{{ $blogcategory->image }}" alt="category" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
