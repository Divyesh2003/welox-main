@section('title', 'Welox Pharma || Bulk Product')

@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h1>Bulk Product Upload</h1>
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-sm-12">
                    <form name="blog" id="blog" class="needs-validation" action="{{ route('admin.bulk.product.store') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf()
                    @method('POST')
                    <div class="intro-y box p-1">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Bulk Product Excel/Csv</label>
                            <input class="form-control" type="file" id="bulk_excel" name="bulk_excel">
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="bulk_image" name="bulk_image">
                          </div>
                          <button type='submit'  class="btn btn-outline-primary">Upload </button>
                    </div>
                    </form>
                        </div>
                   </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection