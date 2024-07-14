@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')@extends('layouts.app')
@section('content')
<section class="py-3 breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <nav aria-label=" breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="/"><i class="fa-solid fa-house"></i>  Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Drug Policy</li>
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
                            <h1 class="contact-h1"><span class="text-green">Drug</span> <span class="text-blue">Policy</span></h1>

                            <p>&nbsp;</p>
                            <p>Information About Drugs/Medicine.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/drug-pharma.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Drug</span> <span class="text-blue">Policy</span></h1>
        </div>
    </div>
  </section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">  
                <p>www.weloxpharma.com is committed to providing accurate, reliable, and informative content related to pharmaceutical products and services. This drug policy outlines the guidelines and principles governing the information, products, and services offered on our website.</p>                 
                <div class="p-3 border mt-3">
                    <h2>Information Accuracy</h2>
                   <p> Reliable Sources: The pharmaceutical information provided on our website is sourced from reputable, verified sources, including scientific literature, regulatory bodies, and licensed healthcare professionals.</p>
                  <p>  Accuracy and Completeness: We strive to ensure that all drug-related information provided on our website is accurate, up-to-date, and complete. However, users are encouraged to verify information with healthcare professionals or official sources.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Product Information</h2>
                    <p>Product Descriptions: Our website may contain information about pharmaceutical products, including descriptions, indications, dosages, and side effects. This information is for educational purposes only and should not substitute professional medical advice.</p>
                    <p>Availability: We aim to accurately represent the availability of pharmaceutical products on our website. However, availability may vary based on location, regulatory approvals, and stock levels.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>User Responsibilities</h2>
                    <p>Consultation with Healthcare Professionals: Users are advised to consult licensed healthcare professionals for personalized advice regarding pharmaceutical products, treatments, or medical conditions mentioned on our website.</p>
                    <p>Treatment Decisions: Any decisions related to starting, modifying, or discontinuing drug therapies should be made in consultation with qualified healthcare providers.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Regulatory Compliance</h2>
                    <p>Legal Compliance: www.weloxpharma.com adheres to all applicable laws, regulations, and industry standards related to the promotion, advertisement, and sale of pharmaceutical products.</p>

                    <p>Disclaimers: Our website includes disclaimers to clarify that the information provided is not intended as medical advice and that users should consult healthcare professionals before making any medical decisions.                    </p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Transparency and Ethics</h2>
                   <p>Disclosure: We disclose any potential conflicts of interest or financial relationships with pharmaceutical companies or stakeholders that may influence the content presented on our website.</p> 

                   <p>Ethical Standards: We maintain high ethical standards in providing pharmaceutical information and avoid any promotion of unapproved or off-label uses of drugs.</p> 
                    
                </div>
                <div class="p-3 border mt-3">
                    <h2>User Safety and Privacy</h2>
                    <p>Safety Information: We provide safety information, including potential side effects and warnings associated with pharmaceutical products, to promote informed decision-making.</p>
                    <p>Privacy Protection: www.weloxpharma.com respects user privacy and complies with all applicable data protection laws and regulations. Users’ personal information is handled according to our Privacy Policy.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection