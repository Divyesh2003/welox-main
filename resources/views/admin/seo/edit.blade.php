@section('title', 'Welox Pharma || SEO Edit')

@extends('admin.layouts.app')
@section('title', __('admin.edit') . ' ' . __('admin.category'))
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card p-4">
                                <div class='card-header pb-0'>
                                    <h4 class='card-title'>Redirect Edit</h4>
                                </div>
                                <hr class="invoice-spacing" />
                                <div class='card-body pt-0'>
                                    <form name='category' id='category' class='validate-form1 needs-validation'
                                        action='{{ route('admin.category.update', $category->id) }}' method='POST'
                                        enctype='multipart/form-data' novalidate>
                                        @csrf()
                                        @method('PUT')
                                        <div class="input-form mb-1  @error('parent_id') has-error @enderror">
                                            <label for="parent_id" class="form-label">Parent Category<span
                                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                            <select class="category form-select" name="parent_id[]" id="parent_id" multiple="multiple">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $cates)
                                                    <option value="{{ $cates->id }}"
                                                      @if($category->parent_id) @foreach(json_decode($category->parent_id) as $category_op) @if($category_op == $cates->id) selected @endif @endforeach @endif>{{ $cates->name }}</option>
                                                        <option value=""></option>
                                                @endforeach
                                            </select>
                                            @error('parent_id')
                                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('name') has-error @enderror'>
                                            <label class='form-label' for='name'>Name <span
                                                    class='danger'>*</span>
                                            </label>
                                            <input type='text' id='name' name='name'
                                                class='form-control' value='{{ $category->name }}'
                                                placeholder='{{ __('admin.hello') }}'
                                                autofocus required> @error('name')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">{{ __('admin.please fill out this field.') }}
                                            </div>
                                        </div>
                                        <div class='input-form mb-1 @error('slug') has-error @enderror'>
                                            <label class='form-label' for='slug'>Slug <span
                                                    class='danger'>*</span>
                                            </label>
                                            <input type='text' id='slug' name='slug'
                                                class='form-control ' value='{{ $category->slug }}'
                                                placeholder='{{ __('admin.hello') }}'pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*'
                                                required> @error('slug')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">
                                                {{ __('admin.please fill out this field.[a-z0-9-]') }}</div>
                                        </div>
                                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>
                                              </div>
                                            @error('description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('image') has-error @enderror'>
                                            <label class='form-label' for='image'>Image</label>
                                            <input type='file' id='image' name='image' class='form-control' >
                                            @error('image')
                                                <div class='pristine-error text-theme-24 '>{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('meta_title') has-error @enderror'>
                                            <label class='form-label' for='meta_title'>Meta Title
                                            </label>
                                            <input type='text' id='meta_title' name='meta_title'
                                                class='form-control' value='{{ $category->meta_title }}'
                                                placeholder='{{ __('admin.title') }}' />
                                            @error('meta_title')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1  @error('meta_description') has-error @enderror'>
                                            <label class='d-block form-label'
                                                for='meta_description'>Meta Descriptioin</label>
                                            <textarea id='meta_description' name='meta_description' class='form-control'
                                                placeholder='{{ __('admin.description') }}' rows='3'> {{ $category->meta_description }}
                                                </textarea>
                                            @error('meta_description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('meta_keywords') has-error @enderror'>
                                            <label class='form-label' for='meta_keywords'>Meta Keywords</label>
                                            <input type='text' id='meta_keywords' name='meta_keywords'
                                                class='form-control' value='{{ $category->meta_keywords }}'
                                                placeholder='{{ __('admin.keywords') }}' />
                                            @error('meta_keywords')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('status') has-error @enderror'>
                                            <label class='form-label'
                                                for='fp-default'>Status</label>
                                            <div class='form-check form-switch form-check-primary'>
                                                <input type="checkbox" name="status" value="1"
                                                    class="form-check-input" id="customSwitch2"
                                                    @if (old('status') == '1' || $category->status == '1') checked @endif>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <button type="submit" id="submit" name="submit"
                                                class="btn btn-primary waves-effect waves-float waves-light">Save</button>
                                            <button type="reset" id="reset" name="reset"
                                                class="btn btn-primary waves-effect waves-float waves-light">Reset</button>
                                            {{-- <a href="{{ route('admin.cms.blog.list.index') }}"
                                                class="btn btn-primary waves-effect waves-float waves-light float-end">Back</a> --}}
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                        <div class='col-md-4 col-12'>
                            <div class="card">
                                <div class="card-body sideimg" style="background: #d1d1d1">
                                    <img src="{{ url('') }}/{{ $category->image }}" width="100"/>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
@endsection
