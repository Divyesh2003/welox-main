@section('title', 'Welox Pharma || Category Create')
@extends('admin.layouts.app')
@section('title', __('admin.create') . ' ' . __('admin.blogcategory'))
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <h4 class='card-title'>Blog Category</h4>
                    <div class='card-body pt-0'>
                                    <form name='blogcategory' id='blogcategory' class='validate-form1 needs-validation'
                                        action='{{ route('admin.blog.category.store') }}' method='POST'
                                        enctype='multipart/form-data' novalidate>
                                        @csrf()
                                        @method('POST')
                                        <div class="input-form mb-1  @error('parent_id') has-error @enderror">
                                            <label for="parent_id" class="form-label">Blog Category<span
                                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                            <select name="parent_id" id="parent_id" class="select2 form-select form-control" autofocus>
                                                <option value="" selected>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if (old('parent_id') == $category->id) selected @endif>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('parent_id')
                                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('name') has-error @enderror'>
                                            <label class='form-label' for='name'>Name <span
                                                    class='danger'>*</span></label>
                                            <input type='text' id='name' name='name'
                                                class='form-control' value='{{ old('name') }}'
                                                placeholder='{{ __('admin.hello') }}' required /> @error('name')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">{{ __('admin.please fill out this field.') }}
                                            </div>
                                        </div>

                                        <div class='input-form mb-1 @error('slug') has-error @enderror'>
                                            <label class='form-label' for='slug'>Slug<span
                                                    class='danger'>*</span></label>
                                            <input type='text' id='slug' name='slug'
                                                class='form-control ' value='{{ old('slug') }}'
                                                placeholder='{{ __('admin.hello') }}'
                                                pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*' required /> @error('slug')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                            {{-- <div class="invalid-feedback">
                                                {{ __('admin.please fill out this field.[a-z0-9-]') }}</div>
                                        </div> --}}
                                    </div>
                                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                                            <label class='form-label'
                                                for='description'>Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            @error('description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class='input-form mb-1 @error('image') has-error @enderror'>
                                            <label class='form-label' for='image'>Image</label>
                                            <input type='file' id='image' name='image' class='form-control'>
                                            @error('image')
                                                <div class='pristine-error text-theme-24 '>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class='input-form mb-1 @error('meta_title') has-error @enderror'>
                                            <label class='form-label' for='meta_title'>Meta Title
                                            </label>
                                            <input type='text' id='meta_title' name='meta_title' class='form-control'
                                                value='{{ old('metatitle') }}'
                                                placeholder='' required/> @error('meta_title')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class='input-form mb-1  @error('meta_description') has-error @enderror'>
                                            <label class='d-block form-label'
                                                for='meta_description'>Meta Description</label>
                                            <textarea id='meta_description' name='meta_description' class='form-control'
                                                placeholder='' rows='3' required></textarea>
                                            @error('meta_description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class='input-form mb-1 @error('meta_keywords') has-error @enderror'>
                                            <label class='form-label'
                                                for='meta_keywords'>Meta Keyword</label>
                                            <input type='text' id='meta_keywords' name='meta_keywords'
                                                class='form-control' value='{{ old('meta_keywords') }}'
                                                placeholder='' />
                                            @error('meta_keywords')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class='input-form mb-1 @error('status') has-error @enderror'>
                                            <label class='form-label'
                                                for='fp-default'>Status (Active/Deactive)</label>
                                            <div class='form-check form-switch form-check-primary'>
                                                <input type='checkbox' id='status' value='1' name='status'
                                                    class='form-check-input' checked>
                                            </div>
                                        </div>
                                <div class='mt-3'>
                                        <button type=' submit ' form='blogcategory'
                                        class="btn btn-outline-primary">Save </button>
                                            {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                                        <button type='reset' form='blogcategory'
                                            class='btn btn-outline-secondary'>Reset</button>

                                        <a href='{{ route('admin.blog.category.index') }}'
                                            class='btn btn-outline-dark'>
                                          Back</a>
                                    </div>
                                    </form>
                                </div>
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection