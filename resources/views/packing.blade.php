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
                        <li class="breadcrumb-item"><i class="fa-solid fa-house"></i> <a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Packing</li>
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
                            <h1 class="contact-h1 "><span class="text-green">Packaging</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>Packaging can be described as a coordinated system of preparing goods for transport,
                                warehousing, logistics, sale, and end use.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/box8.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Packaging</span></h1>
        </div>
    </div>
</section>

<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="{{ asset('assets/image/Project-Scope-Management-Cover.avif')}}" class="shadow-effect-pharma"
                    alt="" width="100%">
            </div>
            <div class="col-12 col-sm-6 mt-3 mt-lg-0">
                <p> Packaging is a critical element in any pharmaceutical product. The packaging of products has to take
                    into account multiple variables from transit to weather & time. At Wellona pharma, our approach to
                    quality covers every aspect of packaging ensuring that our products maintain their safety,
                    reliability, stability & integrity long after they have left our production line. Our use of
                    packaging materials and application of processes conform to all relevant international standards,
                    with regard to a host of critical parameters, such as</p>
                <ul style="list-style-type: disc">
                    <li>Medical grade, non-toxic materials</li>
                    <li>Compliance with all regulatory norms.</li>
                    <li>Excellent oxygen and moisture barrier properties</li>
                    <li>Consistency in High Quality</li>
                    <li>Printed shipper available on request</li>
                </ul>
                <p>Our in-house design team ensures that every pack that we create bears the hallmarks of contemporary,
                    classy styling. We take care of the twin aspects of aesthetics & clarity that are vital to pharma
                    packaging. We also pay significant attention to storage requirements with separate reserved areas
                    for various packaging materials such as aluminum and PVC foils and ensure that they are stored
                    always at optimum temperatures.</p>
            </div>
        </div>
    </div>
</section>
@endsection
