@section('title', 'Welox Pharma || Faq Create')
@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <h2>Faq Create</h2>
            <form name="blog" id="blog" class="needs-validation"
            action="{{ route('admin.faq.store') }}" method="POST"
        enctype="multipart/form-data" novalidate>
        @csrf()
        @method('POST')
        <div class="intro-y box p-1">
            <!-- START TAG -->
            <div class="input-form mt-3 @error('title') has-error @enderror">
                <label for="title" class="form-label">Title<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input name="title" id="title" value="{{ old('title') }}"
                    class="form-control slug-output" placeholder="enter slug"
                    required pattern="[0-9]{10}">
                @error('title')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
              <!-- START TAG -->
              <div class="input-form mt-3 @error('description') has-error @enderror">
                <label for="description" class="form-label">Description<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input name="description" id="description" value="{{ old('description') }}"
                    class="form-control slug-output" placeholder="enter slug"
                    required pattern="[0-9]{10}">
                @error('description')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="mt-5">
                <button type="submit" id="submit" name="submit"
                    class="btn btn-primary waves-effect waves-float waves-light">Save</button>
                <button type="reset" id="reset" name="reset"
                    class="btn btn-primary waves-effect waves-float waves-light">Reset</button>
                {{-- <a href="{{ route('admin.cms.blog.list.index') }}"
                    class="btn btn-primary waves-effect waves-float waves-light float-end">Back</a> --}}
            </div>
            <!-- END TAG -->
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
$(document).on('blur', '#description', function() {
    var myEditor = document.querySelector('#description')
var html = myEditor.children[0].innerHTML
console.log(html)
$("#descriptions_ce").val(html);
});
});
</script>
@endsection
