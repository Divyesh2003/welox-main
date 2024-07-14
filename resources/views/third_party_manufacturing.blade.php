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
                      <li class="breadcrumb-item active" aria-current="page">Third Party and Manufacturing</li>
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
                            <h1 class="contact-h1"><span class="text-green">3rd</span> <span class="text-blue">Party Manufacturing</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>Third party manufacturing is a process in which a company outsources the manufacturing of its products to a third party manufacturer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/contract-manufacturing.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">3rd</span> <span class="text-blue">Party Manufacturing</span></h1>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/thirsd-party-manufacturing.jpg')}}"  class="shadow-effect-pharma" alt="" width="100%">
            </div>
            <div class="col-sm-6 ">
              <p>Wellona Pharma offers WHO-GMP compliant Pharma Medicines through Third Party Manufacturing in India for International customers. Large scale production capacity and well qualified staff are a perfect combination for sufficing all your Third Party Manufacturing requirements. We maintain high quality standards at all stages of production starting from material procurement, process optimization, formulation, testing and export.</p>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h6>Process for 3rd Party Manufacturing:</h6>
                <ul style="list-style-type: disc">
                  <li>Formulation approval from Drug department</li>
                    <li>Procurement of Raw materials</li>
                    <li>Actual Formulation Production</li>
                    <li>Export</li>
                </ul>
              <p>With our commitment towards working collaboratively with customers, we provide Quality Branded medicines and Generics worldwide. It has been one of our most valuable and esteemed service to our clients around the world.</p>
            </div>
        </div>
    </div>
</section>
@endsection