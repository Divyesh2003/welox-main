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
                      <li class="breadcrumb-item active" aria-current="page">Generic Medicine</li>
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
                            <h1 class="contact-h1"><span class="text-green">Generic</span> <span class="text-blue">Medicines</span></h1>
                            <p>&nbsp;</p>
                            <p> generic drug is a medication created to be the same as an already marketed brand-name drug in dosage form, safety.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/researchdevlopment.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Generic</span> <span class="text-blue">Medicines</span></h1>
        </div>
    </div>
  </section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/bulbresearch.jpg')}}"  class="shadow-effect-pharma" alt="" width="100%">
            </div>
            <div class="col-sm-6 ">
              <h5>World class manufacturing facilities:</h5>
              <p>Our manufacturing facility meet stringent GMP norms, laid down in the "Revised Schedule M" by the Drug Controller (General) India, Ministry of Health, and Government of India. With an unwavering commitment to quality, Wellona pharma’s Quality Policy covers the entire gamut of our operations, from using the best raw materials to strict control at every stage of manufacturing and packaging.</p>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h6>Highlights of manufacturing facility:</h6>
                <ul style="list-style-type: disc">
                  <li>No wood or asbestos component.</li>
                  <li>Each zone has separate AHUs (Air Handling Units), dehumidification unit and dust extraction systems.</li>
                  <li>Segregation of every critical processing activity in each zone, to avoid cross-contamination.</li>
                  <li>Respective zones, areas and even uniforms marked with specific colors to ensure total segregation..</li>
                  <li>Air environment conditioned in each area with respect to temperature, humidity, filtration, particle counts, etc.</li>
                  <li>Duo Pass Reverse Osmosis (RO) water system/ de-mineralization plant.</li>
                  <li>Zero-discharge Effluent Treatment Plant.</li>
                  <li>Air-conditioned stores for raw material, packing material and finished good.</li>
                  <li>Isolated and dedicated production facilities for β-Lactum and Cephalosporin dosage forms.</li>
                  <li>The complex also houses its own R &D facility for in house product development.</li>
                  <li>Dispensing of materials under an SS reverse laminar flow.</li>
                  <li>Individual compression and coating cabins with separate air handling units to avoid cross contamination.</li>
                  <li>Alternative power generation system for uninterrupted production.</li>
                  <li>A unidirectional flow of men and materials to promote optimum productivity.</li>
                  <li>Accessibility of all utilities and maintenance areas from outside, for additional ease of operation.</li>
                  <li>Ample segregated storage for raw materials and packaging materials, with a quarantine facility.</li>
                  <li>Separate air handling units for every production departments, in addition to air conditioning with 3 micron filtration to ensure absolute product purity.</li>
                  <li>We house huge capacities for manufacturing round the clock (* Spare capacity available for all sections).</li>
                </ul>
              <p>We work to the most complex of customer requirements & provide some of the most competitive rates in the industry. We also offer our products on a third party basis and provide private labelling arrangements for export. We manufacture a broad range of branded pharmaceutical formulations in diverse forms. We look forward to collaborating with importers, distributors and agents in order to expand our market base.</p>

            </div>
        </div>
    </div>
</section>
@endsection