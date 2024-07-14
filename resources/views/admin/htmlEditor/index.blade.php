@section('title', 'Welox Pharma || htmlEditor')
@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <h2>Faq Create</h2>
    <form name="blog" id="blog" class="needs-validation"
            action="{{ route('admin.editor.store') }}" method="POST"
        enctype="multipart/form-data" novalidate>
        @csrf()
        @method('POST')
        <div class="intro-y box p-1">
            <!-- START TAG -->
            <div class="input-form mt-3 @error('editor') has-error @enderror">
                <label for="editor" class="form-label">Editor<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <textarea name="editor" id="" cols="30" rows="10" class="form-control">@if(isset($editor)) {{ $editor->value }} @endif</textarea>
                @error('editor')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
             <button type="submit" class="btn btn-primary mt-5">save</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
<!-- jQuery Library -->

@endsection