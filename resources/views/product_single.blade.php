@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')
@extends('layouts.app')
@section('content')
<section class="py-3 breadcrumbs">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          <nav aria-label=" breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="/category/{{$product->category->slug}}">{{ $product->category->name }}</a></li>
                <li class="breadcrumb-item"><a href="/category/list/{{$product->subCategory->slug }}"> {{ $product->subCategory->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </nav>
        </div>
    </div>
  </div>
  </section>
    <section class="px-25">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="category border d-none d-lg-block" style="background">
                        <h3 class="t-blue fonarto text-center py-3 m-0" style="background-color: #7ab741;color:#fff;">Category</h3>
                        <ul class="p-0 m-0" style="font-size: 14px; ">
                          <li class="py-2 border-bottom " style="padding: 10px 20px;">
                            <a href="{{ route('product.list')}}" style="color:#000;">All</a>
                          </li>
                                      @foreach ($all_child_category as $cate)
                                      @if($cate->parent_id != "null")
                                      <li class="border-bottom" style="padding: 10px 20px;">
                                        <a href="{{ route('category.list',$cate->slug) }}" class="" style="color: #000;">
                                            {{ $cate->name }}
                                        </a>
                                      </li>
                                      @endif
                                      @endforeach
                            </ul>
                      </div>
                      <div class="category border d-block d-lg-none mb-3" style="background">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Category
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0">
                                    <ul class="p-0 m-0" style="font-size: 14px; ">
                                        <li class="py-2 border-bottom" style="padding: 10px 20px;">
                                          <a href="{{ route('product.list')}}" style="color:#000;">All</a>
                                        </li>
                                                    @foreach ($all_child_category as $cate)
                                                    @if($cate->parent_id != "null")
                                                    <li class="border-bottom" style="padding: 10px 20px;">
                                                      <a href="{{ route('category.list',$cate->slug) }}" class="" style="color: #000;">
                                                          {{ $cate->name }}
                                                      </a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                          </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="">
                                <div id="sync1" class="owl-carousel owl-theme">
                                    <div class="item border p-2">
                                        <img src="{{ url($product->image) }}" alt="" width="100%">
                                    </div>
                                    
                                    @foreach (json_decode($product->gallery) as $gallery)
                                        <div class="item border p-2">
                                            <img src="{{ url($gallery) }}" alt="" width="100%">
                                        </div>
                                    @endforeach
                                </div>
                                <div id="sync2" class="owl-carousel owl-theme mt-3">
                                    <div class="item border p-2 me-3">
                                        <img src="{{ url($product->image) }}" alt="" width="100%">
                                    </div>
                                    @foreach (json_decode($product->gallery) as $gallery)
                                        <div class="item border p-2 me-3">
                                            <img src="{{ url($gallery) }}" alt="" width="100%">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            {{-- <h1 style="font-size: 25px;margin-bottom:0;" id="firstWord">{{ $product->name }}</h1> --}}
                            @php
                              $fullText = $product->name;
                              $firstSpace = strpos($fullText, ' ');
                              if ($firstSpace !== false) {
                                  $firstWord = substr($fullText, 0, $firstSpace);
                                  $remainingText = substr($fullText, $firstSpace + 1);
                              } else {
                                  $firstWord = $fullText;
                                  $remainingText = '';
                              }
                          @endphp
                          <h1 class="my-2 fx-20">
                              <span class="text-green">{{ $firstWord }}</span>
                              @if($remainingText)
                                  <span class="text-blue">{{ $remainingText }}</span>
                              @endif
                          </h1>
                          {{-- @dd($product) --}}
                            <ul class="p-list">
                                <li><strong>Product Name : </strong> {{ $product->name }}</li>
                                <li><strong>Category : </strong> {{ $product->subCategory->name }}</li>
                                <li><strong>Trade Name : </strong> {{ $product->trade_name }}</li>
                                <li><strong>Packing : </strong> {{ $product->packing }}</li>
                                <li><strong>Pack Insert/Leaflet : </strong> {{ $product->pack_insert_leaflet }}</li>
                                <li><strong>Formulation : </strong> {{ $product->category->name }}</li>
                                <li><strong>Therapeutic use : </strong> {{ $product->therapeutic_use }}</li>
                                <li><strong>Production Capacity : </strong>{{ $product->production_capacity }} </li>
                            </ul>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-green mt-3" data-bs-toggle="modal" data-bs-target="#product_modal" style="font-size:16px;">Inquire {{ $product->name }} </button>
                                    <a href="https://api.whatsapp.com/send?phone=9428552312&amp;text={{$product->name}} inquiry" class="whatsapp mt-3 ms-2" target="_blank" style="width:50px;
                                        height: 50px;display: block;background: #7ab741;text-align: center;line-height: 50px;border-radius: 50%;color: #fff;font-size: 30px;">
                                        <i class="fa-brands fa-whatsapp"></i>
                                      </a>
                                </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4>Description:- </h4>
                       <p> {!! $product->description !!} </p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- //modal --}}
<div class="modal fade" id="product_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header b-green">
          <h5 class="modal-title" id="exampleModalLabel">Request A Call Back</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-parent m-0">
            <form class="needs-validation" action="{{ route('inquiry.store') }}" method="POST" enctype="multipart/form-data" no-validate>
        @csrf()
        @method('POST')
          <div class="row">
            <div class="mb-3 col">
              <label for="title" class="form-label text-light" style="font-weight:700">Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $product->name}}" required readonly/>
          </div>
          </div>
        <div class="row">
            <div class="mb-3 col">
                <label for="name" class="form-label text-light" style="font-weight:700">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required/>
            </div>
            <div class="col">
                <label for="company_name" class="form-label text-light" style="font-weight:700">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="company_name" required> 
            </div>
              </div>
                  <div class="row mb-3">
                    <div class="col">
                        <label for="phone" class="form-label text-light" style="font-weight:700">Phone Number</label>
                        <input type="number" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label text-light" style="font-weight:700">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="prefer" class="form-label text-light me-2" style="font-weight:700">Prefer :- </label>
                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="whatsapp" id="whatsapp">
                    <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                       <img src="{{ asset('assets/image/WhatsApp.svg')}}" width="15px" height="15px" alt="">
                    </label>
                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="instagram" id="instagram">
                    <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                       <img src="{{ asset('assets/image/Instagram.svg')}}" width="15px" height="15px" alt="">
                    </label>
                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="mail" id="mail">
                    <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                        <img src="{{ asset('assets/image/mail.svg')}}" width="15px" height="15px" alt="" >
                    </label>
                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="call" id="call">
                    <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                        <img src="{{ asset('assets/image/phone.svg')}}" width="15px" height="15px" alt="">
                    </label>
                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="facebook" id="facebook">
                    <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                        <img src="{{ asset('assets/image/facebook.svg')}}" width="15px" height="15px" alt="">
                    </label>
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label text-light" style="font-weight:700">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>ReCaptcha:</strong>
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback="recaptchaCallback"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>  
                    </div>
                </div>
                <button class="btn btn-green-plate" type="submit">Submit</button>
              </form>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection