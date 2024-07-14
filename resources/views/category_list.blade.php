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
                      <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i>  Home</a></li>
                      <li class="breadcrumb-item" aria-current="page"><a href="/product/list">Category</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $categories->name }}</li>
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
                                  <li class="border-bottom  @if($cate->name == $categories->name) active @endif" style="padding: 10px 20px;">
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
                                                <li class="border-bottom  @if($cate->name == $categories->name) active @endif" style="padding: 10px 20px;">
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
        <div class="parent_category">
            <div class="d-none d-lg-block">
                            <div class="row">
                                @foreach ($parent_category as $parent)
                                 <div class="col ">
                                     <div class="card p-2" style="box-shadow: 0 0 9px #ccc;background-color:#7ab741;height: 100px;">
                                         <a href="{{ route('category.parent.list',$parent->slug) }}" tabindex="0" style="color: #fff;">
                                             <div class="image d-flex justify-content-center mt-2">
                                                 <img src="{{ url($parent->image) }}" alt="{{ $parent->name }}" height="35px">
                                                </div>
                                            <div class="p-1 text-center" style="font-size: 15px;">
                                        <span class="fornato">{{ $parent->name }}</span> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
             <div class="row d-block d-lg-none category_response">
                 <div class="owl-carousel owl-theme d-block d-lg-none" id="category"> 
                     @foreach ($parent_category as $category)
                         <div class="item">
                             <div class="card d-flex flex-column align-items-center justify-content-center p-1" style="width: -webkit-fill-available;height: 100px;">
                                 <a href="{{ route('category.parent.list', $category->slug) }}" class="justify-content-center">
                                     <img src="{{ url($category->image) }}" class="category_index_image" alt="Capsule" style="width: 80px; height: 80px;margin: 0 auto;">
                                     <div class="mt-2 text-light">
                                         <h6 class="text-center m-0">{{ $category->name }}</h6>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     @endforeach
                 </div>
              </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @php
                                    $fullText = $categories->name;
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
                            {{-- <h1 class="my-2 fx-20">{{ $categories->name }}</h1> --}}
                                <div class="row">
                                    @foreach($products as $key => $value)
                                    <div class="col-6 col-sm-2 col-md-4 col-lg-3 col-xl-3 mt-2 mt-lg-2 p-2">
                                    <a href="{{ route('product.single',$value->slug)}}" style="color:#000;">
                                        <div class="card product_card">
                                            <img class="img-responsive" src="{{ url($value->image) }}" alt="" width="100%" style="border-radius:4px;">
                                            <div class="card-body p-2">
                                                <p class="card-title">{{ $value->name }}</p>
                                                <p class="card-title">Type:- {{ $value->category->name }}</p>
                                              </div>
                                        </div>
                                    </a>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection