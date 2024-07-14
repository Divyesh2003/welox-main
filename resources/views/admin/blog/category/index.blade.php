@section('title', 'Welox Pharma || Category List')

@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-primary mt-2 mb-2" href="{{ route('admin.blog.category.create')}}">Create</a>                            </div>
                        </div>
                        {{ $dataTable->table(['class' => 'table table-report sm:mt-2 '], true) }}
                        </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    {{$dataTable->scripts()}}
@endpush