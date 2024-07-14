@section('title', 'Welox Pharma || Inquiry Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 pt-5 pb-5">
            <h2>Blog Create</h2>
            <form name="blog" id="blog" class="needs-validation"
            action="{{ route('blog.list.store') }}" method="POST"
        enctype="multipart/form-data" novalidate>
        @csrf()
        @method('POST')
        <div class="intro-y box p-1">
            <div class="input-form @error('category_id') has-error @enderror">
                <label for="category_id" class="form-label">Category <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <select name="category_id" id="category_id" class="form-select"
                    autofocus>
                    <option value="" >Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- START TAG -->
            <div class="input-form mt-3 @error('name') has-error @enderror">
                <label for="name" class="form-label">Name<span
                        class="danger">*</span><span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input type="text" id="name" name="name"
                    value="{{ old('name') }}" class="form-control slug-input"
                    placeholder="offer name" required>
                @error('name')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form mt-3 @error('slug') has-error @enderror">
                <label for="slug" class="form-label">Slug <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input name="slug" id="slug" value="{{ old('slug') }}"
                    class="form-control slug-output" placeholder="enter slug"
                    required pattern="[0-9]{10}">
                @error('slug')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->

            <!-- START TAG -->
            <div class='input-form mb-1 @error('description') has-error @enderror'>
                <label class='form-label'
                    for='description'>Description</label>
                    <input type="hidden" id="descriptions_ce" name="description" value="{{ old('description') }}"/>
                <div id='toolbar-container'></div>
                <div class='editor' id='description' value='{{ old('description') }}'>
                </div>
                @error('description')
                    <div class='pristine-error text-theme-24 mb-2'>
                        {{ $message }}</div>
                @enderror
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form mt-3 @error('image') has-error @enderror">
                <label for="image" class="form-label">Image <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="image" type="file" name="image" class="form-control">
                @error('image')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div
                class="input-form mt-3 @error('meta_title') has-error @enderror">
                <label for="meta_title" class="form-label">Meta Title <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="meta_title" type="text" name="meta_title"
                    value="{{ old('meta_title') }}" class="form-control"
                    placeholder="Enter Meta title">
                @error('meta_title')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div
                class="input-form mt-3 @error('meta_description') has-error @enderror">
                <label for="editor1" class="form-label">Meta
                    Description <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <textarea rows="4" cols="50" id="editor1"
                    name="meta_description" class="form-control"
                    placeholder="Enter meta description"></textarea>
                @error('meta_description')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div
                class="input-form mt-3 @error('meta_keywords') has-error @enderror">
                <label for="meta_keywords" class="form-label">Meta keywords
                    <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="meta_keywords" type="text" name="meta_keywords"
                    value="{{ old('meta_keywords') }}" class="form-control"
                    placeholder="Enter meta keywords">
                @error('meta_keywords')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            
            <!-- START TAG -->
            <div class="input-form @error('status') has-error @enderror">
                <label class="form-label pt-2">Status (Active / Deactive) <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional,
                        prefered to select
                        Active</span></label>

                <div class="form-check form-check-primary form-switch">
                    <input type="checkbox" checked="" value='A' name="status"
                        class="form-check-input" id="customSwitch3">
                </div>
                @error('status')
                <div class="pristine-error text-theme-24 mt-2">
                    {{ $message }}</div>
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
        <div class="col-sm-2"></div>
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
