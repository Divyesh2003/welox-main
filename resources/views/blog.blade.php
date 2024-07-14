@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')
@extends('layouts.app')
@section('content')
<?php
$a = $_SERVER['REQUEST_URI'];
$b =  explode("/",$a);
$c = end($b);
?>
<section class="py-3 breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label=" breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i> Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 d-flex align-items-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 offset-xl-4">
                    <div class="row mb-3">
                        <div class="col-12">
                            </p>
                            <h1>&nbsp;</h1>
                            <h1 class="contact-h1"><span class="text-green">Our</span> <span class="text-blue">Artical</span> </h1>
                            <p>&nbsp;</p>
                            <p>The study of the effects of drugs on the body and how drugs interact with each other.Pharmaceutical Sciences: The study of the formulation, dispensing, and effects of medicines.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/color-pills.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Our</span> <span class="text-blue">Artical</span></h1>
        </div>
    </div>
</section>
    <section class="px-25">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog_category">
                        <ul>
                            {{-- @dd($blog_category) --}}
                            @foreach ($blog_category as $category)
                                @if ($c == $category->slug)
                                <li><a href="/blog/category/{{$category->slug}}" id="{{$category->slug}}" class="btn btn-click category_active">{{$category->name}}</a></li>  
                                @else
                                <li><a href="/blog/category/{{$category->slug}}" id="{{$category->slug}}" class="btn btn-click">{{$category->name}}</a></li>  
                            {{-- <li><button class="btn btn-click" value="{{$category->id}}" >{{$category->name}}</button></li> --}}
                            @endif   
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        @foreach ($blog as $blog_list)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-2 mt-lg-0">
                            <a href="{{ route('blog.single', $blog_list->slug) }}">
                                <div class="blog_card">
                                    <img src="{{ url($blog_list->image) }}" alt="" style="" width="100%">
                                    <div class="blog_des bg-black" style="padding:15px;">
                                  <h2 class="px-16" style="font-weight:bold">{{ $blog_list->name }}</h2>  
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="paginate py-100">
                        {!! $blog->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection