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
                      <li class="breadcrumb-item active" aria-current="page">QA and QC</li>
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
                            <h1 class="contact-h1"><span class="text-green">Quality Control</span> <span class="text-blue">and Quality Assurance</span></h1>
                            <p>&nbsp;</p>
                            <p>While quality assurance relates to how a process is performed or how a product is made, quality control is more the inspection aspect of quality management.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/qulity-controll.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Quality Control</span> <span class="text-blue">and Quality Assurance</span></h1>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/Project-Scope-Management-Cover.avif')}}"  class="shadow-effect-pharma" alt="" width="100%">
            </div>
            <div class="col-sm-6">
               <p>Wellona Pharma, as the most reputed Manufacturer and Exporter of Pharmaceutical Products, always maintain high quality standard to meet customers’ expectations worldwide. Implementation of quality policy is done through Quality Management System (QMS) based on firm adherence to current Good Manufacturing Practices (GMP & cGMP) in conformance with national and international regulatory standards like WHO, FDA etc. All our manufacturing activities are carried out under Automated & Controlled environment with constant monitoring of products.</p>
               <p>We provide Quality Assurance (QA) through immaculate environmental monitoring, calibration and validation programs, right from the stage of procurement of raw material to delivery of finished product. A Standard Operating Procedure (SOP) is in place which forms the guideline for the procedures to be followed for each activity that is performed in the plants and laboratories. QA department coordinates with designing, development and manufacturing teams and maintains QMS across the organization.</p>
               <p>We have set-up Quality Control (QC) Laboratories with separate areas for Raw materials, Instrument, Microbiology, Sterility and Package testing. Our laboratories are well equipped with sophisticated instruments like Dissolution testers, UV-Visible spectrophotometers, HPLC, GLC, FTIR, Atomic Absorption and other testing instruments as per GLP and ISO 9001 guidelines. Our success is associated with our strong QC department and accuracy and consistency of the analytical results.</p>
            </div>
        </div>
    </div>
</section>
@endsection