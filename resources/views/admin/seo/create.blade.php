@section('title', 'Welox Pharma || SEO Create')

@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <h2>Redirect Create</h2>
                    <form name="blog" id="blog" class="needs-validation" action="{{ route('admin.seo.store') }}"
                        method="POST" enctype="multipart/form-data" novalidate>
                        @csrf()
                        @method('POST')
                        <div class="intro-y box p-1">
                            <!-- START TAG -->
                            <div class="input-form mt-3 @error('direct') has-error @enderror">
                                <label for="slug" class="form-label">Direct <span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input name="direct" id="direct" value="{{ old('direct') }}" class="form-control"
                                    placeholder="enter direct url" required>
                                @error('direct')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="input-form mt-3 @error('redirect') has-error @enderror">
                                <label for="slug" class="form-label">Direct <span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input name="redirect" id="redirect" value="{{ old('redirect') }}" class="form-control"
                                    placeholder="enter redirect url" required>
                                @error('redirect')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                             <!-- START TAG -->
                             <div class="mt-5">
                                <button type="submit" id="submit" name="submit"
                                    class="btn btn-primary waves-effect waves-float waves-light">Save</button>
                                <button type="reset" id="reset" name="reset"
                                    class="btn btn-primary waves-effect waves-float waves-light">Reset</button>
                            </div>
                            <!-- END TAG -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
    $('.category').select2();
});
</script>
@endpush