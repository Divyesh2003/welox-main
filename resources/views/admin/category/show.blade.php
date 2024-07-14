@section('title', 'Welox Pharma || Category Show')

@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card p-4">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            @if($category->parent_id !== null)
                            <td>{{ $category->parent->name }}</td>
                            @else
                            <td>Null</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $category->slug }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><a href="{{url($category->image)}}" target="_blank">{{ $category->image }}</a></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $category->description }}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{ $category->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{ $category->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Meta Keywords</th>
                            <td>{{ $category->meta_keywords }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('admin.status') }}</th>
                            <td>{{ $category->status == '1' ? 'Active' : 'Deactive'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="{{ url($category->image)  }}" alt="" width="100%">
            </div>
        </div>
    </div>
</div>
@endsection