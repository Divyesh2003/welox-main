@section('title', 'Welox Pharma || Inquiry Create')
@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card p-4">
                    {{-- @dd($inquiry) --}}
                    <table>
                        <tr>
                            <th>ID :- </th>
                            <th>{{ $inquiry->id }}</th>
                        </tr>
                        <tr>
                            <th>Name :- </th>
                            <th>{{ $inquiry->name }}</th>
                        </tr>
                        @if($inquiry->product_name)
                        <tr>
                            <th>Product Name :- </th>
                            <th>{{ $inquiry->product_name }}</th>
                        </tr>
                        @endif
                        <tr>
                            <th>Email :- </th>
                            <th>{{ $inquiry->email }}</th>
                        </tr>
                        <tr>
                            <th>Phone :- </th>
                            <th>{{ $inquiry->phone }}</th>
                        </tr>
                        <tr>
                            <th>Prefer :- </th>
                            <th>{{ $inquiry->prefer }}</th>
                        </tr>
                        <tr>
                            <th>Message :- </th>
                            <th>{{ $inquiry->message }}</th>
                        </tr>
                        <tr class="mt-5">
                            <th>

                                <a class='btn btn-primary waves-effect waves-float waves-light' href="{{ route('admin.inquiry.index')}}">Back</a>
                            </th>
                        </tr>
                    </table>
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection