@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')
@extends('layouts.app')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <nav aria-label=" breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i>  Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Client Satisfaction</li>
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
                            <h1 class="contact-h1 "><span class="text-green">Client</span> <span class="text-blue">Satisfied</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p> a measurement that determines how happy customers are with a company's products, services, and capabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/standard-quality-control-collage.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1">Client Satisfied</h1>
        </div>
    </div>
  </section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/collage-customer-experience-concept.jpg')}}" alt="" class="shadow-effect-pharma" width="100%">
            </div>
            <div class="col-sm-6 d-flex align-items-center">
                <p>Creation of a client focus pharma organization, we endeavour hard to offer excellent collection of pharmaceutical products. All our endeavours are directed towards satisfying our client's requirements by offering them standard as well as customized products as per their specific needs. In this regard, we have maintained a cordial relationship with our clients, and take their valued feedback from time to time. Furthermore, our prompt response to our client's queries has also enabled us to win their trust. Owning to our painstaking efforts towards providing distinguished products within the given time frame, we have been able to sustain our existing clients, and attract new ones.</p>
            </div>
        </div>
    </div>
</section>
@endsection