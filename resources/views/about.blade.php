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
                      <li class="breadcrumb-item active" aria-current="page">About</li>
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
                            <h1 class="contact-h1 "><span class="text-green">About</span> <span class="text-blue"> Welox</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>With more than 10 years of prominence in the industry of medical supply chain, WELOX INTERNATIONAL is acknowledged as the leading distributor for Ajanta ED Products in India.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/about.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">About</span> <span class="text-blue">Welox Pharma</span></h1>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex">
            <div class="col-12 col-sm-6 d-flex align-items-center order-1 order-sm-0">
                    <p>
                        our company has been prospering with constant development in business over the preceding years, 
                        which has helped us in accomplishing worldwide prominence in the pharma industry.
                         We are distributors and suppliers of an assorted variety of pharmaceutical drugs, 
                         life-saving medicines and treatment supplies on a vast scale in the categories like oncology,
                          HIV, Nephrology, and diverse critical care divisions. We are accredited with authentic pharma brands
                           and companies like Cipla, Glenmark, Mylan, Natco, Novartis and many more. We are serving supply 
                           on the Pan India scale. Apart from being a national supplier, WELOX INTERNATIONAL is also an
                            international exporter of pharmaceutical supplies. Our international trading permit of import/export is 
                            licensed under the registration code 0312057351. We have thousands of international clients overseas as 
                            well as domestic consumers, making us one big global family!
                    </p>
            </div>
            <div class="col-12 col-sm-6 order-0 order-sm-1">
                <div class="img-pic1 about-img">
                <img src="{{ asset('assets/image/first-step.jpg')}}" alt="" width="100%">
                </div>
            </div>
            <div class="col-sm-6 mt-3 order-2 order-sm-2">
                <div class="img-pic1 about-img">
                <img src="{{ asset('assets/image/finemedicine2.jpg')}}" alt="" width="100%">
                </div>
            </div>
            <div class="col-sm-6 mt-3 d-flex align-items-center order-3 order-sm-3">
                <p>
                    The trustworthiness of our company is driven by sincere compliance for ultimate consumer satisfaction. 
                    WELOX INTERNATIONAL aims to establish a healthy community worldwide through the devoted supply of essential medicines and restorative drugs. 
                    Our endeavour is to serve global consumers with a clear objective to provide premium services and build a strong relationship with our clients and partners.
                </p>
        </div>
        <div class="col-sm-6 d-flex align-items-center order-5 order-sm-4">
            <p>
                our company has been prospering with constant development in business over the preceding years, 
                which has helped us in accomplishing worldwide prominence in the pharma industry.
                 We are distributors and suppliers of an assorted variety of pharmaceutical drugs, 
                 life-saving medicines and treatment supplies on a vast scale in the categories like oncology,
                  HIV, Nephrology, and diverse critical care divisions. We are accredited with authentic pharma brands
                   and companies like Cipla, Glenmark, Mylan, Natco, Novartis and many more. We are serving supply 
                   on the Pan India scale. Apart from being a national supplier, WELOX INTERNATIONAL is also an
                    international exporter of pharmaceutical supplies. Our international trading permit of import/export is 
                    licensed under the registration code 0312057351. We have thousands of international clients overseas as 
                    well as domestic consumers, making us one big global family!
            </p>
    </div>
    <div class="col-sm-6 order-4 order-sm-5">
        <div class="img-pic1 about-img">
        <img src="{{ asset('assets/image/warehouse-pharmacy.jpg')}}" alt="" width="100%">
        </div>
    </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-3 mt-2 mt-sm-0">
                <div>
        <h2 class="text-center">53</h2>
       <h3 class="text-center">Years Experience</h3>
                </div>
            </div>
            <div class="col-6 col-sm-3 mt-2 mt-sm-0">
                <div>
                <h2 class="text-center" >17</h2>
                <h3 class="text-center">Countries</h3>
                </div>
            </div>
            <div class="col-6 col-sm-3 mt-2 mt-sm-0">
                <div class="">
                <h2 class="text-center" >19</h2>
                <h3 class="text-center">Compnies</h3>
                </div>
            </div>
            <div class="col-6 col-sm-3 mt-2 mt-sm-0">
                <div class="">
                <h2 class="text-center" >735+</h2>
                <h3 class="text-center">Products</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                    <img src="{{ asset('assets/image/mission-image.png')}}" alt="" width="100%">
            </div>
            <div class="col-sm-6 ps-3 ps-lg-5">
                    <h2 class="text-center text-sm-start mt-3 mt-sm-0 fx-38"><span class="text-green">Our</span> <span class="text-blue">Mission</span></h2>
                    <p>
                        To uphold our social responsibilities of delivering highest standard healthcare services to all segments of society without compromising on our core values of integrity, good ethics and commitment.
                    To become a globally acclaimed pharmaceutical company through development and introduction of wide portfolio of Pharmaceutical.
                    </p>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6 pe-3 pe-sm-2 pe-md-5">
                <h2 class="text-center text-sm-start mt-3 mt-sm-0 fx-38"><span class="text-green">Our</span> <span class="text-blue">Vision</span></h2>
                <p>
                    To become a global healthcare organization and to be recognized as domestic and internationally integrated healthcare and pharmaceutical company through Innovation, Quality and Competence.
                    To become the leading pharmaceutical player in the industry by assuring high quality standards and cost effective products at all times. We want to mark our presence in the society by creating a portfolio of medicines available at a reasonable cost within the reach of all patients.
                </p>
            </div>
            <div class="col-sm-6">
                   <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="mt-2 mt-sm-3 mt-md-5">
                            <span >
                                <img src="{{ asset('assets/image/vision-man.jpg')}}" class="shadow-effect-pharma" alt="" width="100%">
                            </span>
                            <span class="d-none d-sm-block">
                                <img src="{{ asset('assets/image/paper-analysis.jpg')}}" class="mt-4 shadow-effect-pharma" alt="" width="100%">
                            </span>
                        </div>
                    </div>
                    <div class=" col-12 col-sm-6 d-none d-sm-block">
                        <div class="mb-2 mb-sm-3 mb-md-5">
                            <img src="{{ asset('assets/image/pills-man.jpg')}}" class="shadow-effect-pharma" alt="" width="100%">
                        </div>
                    </div>
                   </div>
            </div>
        </div>
    </div>
</section>
@endsection