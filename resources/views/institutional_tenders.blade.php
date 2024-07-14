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
                      <li class="breadcrumb-item active" aria-current="page">Institutional Treders</li>
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
                            <h1 class="contact-h1 "><span class="text-green">Institutional</span> <span class="text-blue">Tenders</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>Basically, a tender is an offer or invitation to bid for a project or to accept a formal offer such as a takeover bid.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/institutetenders.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1 "><span class="text-green">Institutional</span> <span class="text-blue">Tenders</span></h1>

        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/people-taking-part-business-event.jpg')}}"  class="shadow-effect-pharma" alt="" width="100%">
            </div>
            <div class="col-sm-6 ">
             <p>As per WHO, efficient medicines supply systems are necessity for a strong health care system of any country. Sustainable financing, adequate human resources, comprehensive information systems, and coordination between healthcare partners and institutions are key components to ensure uninterrupted availability and accessibility of essential medicines in the country. Still, it is hard to find long term supply arrangements in many countries, especially in African and Oceanic continents.</p>
            <p>Wellona Pharma is collaborating with various Institutions like Government Offices and Community Hospitals to supply essential medicines and improving the healthcare Index. Apart from Long-term supply tenders, we also cater to demand for emergency tenders in which we can fast-track the dispatch process to meet the timeline set for the tender.</p>
            </div>
        </div>
    </div>
</section>
@endsection