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
                      <li class="breadcrumb-item active" aria-current="page">Quality Policy</li>
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
                            <h1 class="contact-h1"><span class="text-green">Quality</span> <span class="text-blue">Policy</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>A Quality Policy is a requirement of any formalized quality management system (QMS)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/qulitypolicy.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Quality</span> <span class="text-blue">Policy</span></h1>
        </div>
    </div>
  </section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex align-items-center">
                <p>We, at Wellona pharma are committed to market quality Pharmaceutical products and healthcare Supplies that correspond to Customer requirement and expectations. The quality shall be such that we represent a considerable reason for choosing our company as pharma manufacturer, Exporter and supplier. The entire company and individuals are committed to work for continuous improvement in product quality for achieving maximum customer satisfaction.</p>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/quality-assurance-clipboard-icon.jpg')}}" class="shadow-effect-pharma" alt="" width="100%">
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul style="list-style-type: disc !important;">
                <li>We manufacture and market Pharmaceutical products, which will satisfy continuing needs of our customers.</li>
                <li>This will be achieved by application of sound Quality Management System and adopting current Good Manufacturing Practices and complying all regulatory requirements.</li>
                <li>While doing so we shall keep in mind safety of our employees, all work processes as well as our natural environment.</li>
                <li>The company shall manufacture products of high quality, which shall be safe for human consumption and shall have consistent properties of dosage form.</li>
                <li>We consider our human resources as one of the biggest asset. Our qualified and trained staff is provided constant training to upgrade their knowledge and stay conversant with state of art technology.</li>
                <li>We value motivation amongst our personnel as an important factor to make them more competent and quality conscious.</li>
                <li>The quality assurance of its products is the obligation of the company and all the departments of the company share it by keeping vigil while purchasing, maintaining, manufacturing, testing, distribution and marketing of its products.</li>
                <li>The company shall make available all the requisite measures and resources to achieve the above goals.</li>
            </ul>
        </div>
</div>
</section>
@endsection