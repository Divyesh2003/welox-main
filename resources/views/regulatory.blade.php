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
                      <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i> Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Regulatory</li>
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
                            <h1 class="contact-h1"><span class="text-green">Regulatory</span> <span class="text-blue">Service</span></h1>
                            <p>&nbsp;</p>
                            <p>A service provided by a regulatory agency, which may include, but not be limited to, examination.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/regulatory-services.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Regulatory</span> <span class="text-blue">Service</span></h1>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/standard-quality-control-concept-m.jpg')}}"  class="shadow-effect-pharma" alt="" width="100%">
            </div>
            <div class="col-sm-6">
               <p>Entry to the vast realm of pharmaceutical products in international markets requires a detailed understanding of complicated regulatory requirements. At Wellona Pharma, our Drug Regulatory Affairs (DRA) consultants assist companies to plan and manage their pharmaceutical and medical product development programs and regulatory requirements. We ease the process of getting swift approval for your products by defining country specific regulatory strategies right at the nascent stage of product development and eliminating potential roadblocks en-route to a successful product launch.</p>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
    <div class="container">
        <div class="row">
            <h3 class="mb-2">Our Regulatory Services include:</h3>
            <div class="col-sm-4">
                <h5>Our Regulatory Services include:</h5>
                <ul>
                    <li>DMF (CTD format) Preparation, Review and Submission</li>
                    <li>Dossier Writing and Review</li>
                    <li>Dossier Registration</li>
                    <li>COA, COPP</li>
                    <li>Notarization</li>
                    <li>COA, COPP</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>Post-Approval Changes:</h5>
                <ul>
                    <li>Product re-registration and</li>
                    <li>Renewal of site according to schedule</li>
                    <li>Post-approval lifecycle maintenance</li>
                    <li>Report compilation and publishing</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>Pre-Registration Service:</h5>
                <ul>
                    <li>Drug Product DMF</li>
                    <li>Development & Preparation of documents</li>
                    <li>Content creation and document services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection