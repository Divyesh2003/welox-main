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
                      <li class="breadcrumb-item active" aria-current="page">Manufacturing</li>
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
                            <h1 class="contact-h1 "><span class="text-green">Manufacturing</span> <span class="text-blue">Info</span></h1>
                            <p class="d-none d-lg-block">&nbsp;</p>
                            <p>The process of dealing with or controlling things or people.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                    <img src="{{ asset('assets/image/management.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Manufacturing</span> <span class="text-blue">Info</span></h1>
        </div>
    </div>
  </section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="{{ asset('assets/image/Project-Scope-Management-Cover.avif')}}"  class="shadow-effect-pharma" alt="" width="100%">

            </div>
            <div class=" col-12 col-sm-6 mt-3 mt-lg-0">
               <p> Our significant achievements in the last few years have helped the organization to expand into the global market. Our growth and success is credited to the cooperation and teamwork of all our employees who have always been our tremendous strength.</p>

                <p>At Wellona, we follow an open and transparent culture where people are encouraged to present and implement their opinions and ideas. Our duty is to find the right talent, give them the right opportunity and always support them".</p>

                <p>One of our core values - ‘We are a team. Everyone matters.’ - has been the mantra that has taken Wellona Pharma to such heights. Hence, we have cultivated a work culture that permits our employees to learn, innovate and experiment with new ideas.</p>

                <p>The constant support and encouragement from our valued customers is vital to us and we promise to deliver quality products that will help them to live a happier, healthier and more active life.</p>

                <p>We are passionate about our goals and optimistic about our future as we explore more opportunities of expansion and growth at different stages of development.</p>
            </div>
        </div>
    </div>
</section>
@endsection
