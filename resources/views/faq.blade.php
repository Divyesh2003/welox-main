@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')
@extends('layouts.app')
@section('content')
<section class="py-3 breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 ">
          <nav aria-label=" breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i>  Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Faq</li>
              </ol>
            </nav>
      </div>
  </div>
  </div>
  </section>
<section class="px-25 bg-light-green d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 d-flex align-items-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 offset-xl-4">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h1 class="d-none d-lg-block">&nbsp;</h1> 
                            <h1 class="contact-h1 "><span class="text-green">Frequently</span> <span class="text-blue">Asked Questions</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>Part of being successful is about asking questions and listening to the answers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/faq.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
  <div class="container-fluid">
      <div class="row">
          <h1 class="contact-h1"><span class="text-green">Frequently</span> <span class="text-blue">Asked Questions</span></h1>
      </div>
  </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion" id="accordionExample">
                  @foreach($faqs as $faq)
                  <div class="accordion-item mt-1 mt-lg-1">
                    <h2 class="accordion-header" id="headingOne_{{$faq->id}}">
                      <button class="accordion-button border-faq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$faq->title}}
                      </button>
                    </h2>
                    <div id="collapseOne_{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body border-faq">
                        {{$faq->description}}
                      </div>
                    </div>
                  </div>
                  @endforeach
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection