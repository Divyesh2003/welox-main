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
                <li class="breadcrumb-item active" aria-current="page">History</li>
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
                          <h1 class="contact-h1"><span class="text-green">Our</span> <span class="text-blue">History</span></h1>
                          <p class="d-none d-lg-block">&nbsp;</p>
                          <p>The mass production of wants and needs, particularly on a large scale</p>
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
          <h1 class="contact-h1 "><span class="text-green">Our</span> <span class="text-blue">History</span></h1>
      </div>
  </div>
</section>
<section class="timeline px-25 d-none d-sm-block">
    <ul>
      <li>
        <div>
          <time>August 1968</time> Foundation of Welox Internatioal Store by honorable Mr. Rohan Radadiya
        </div>
      </li>
      <li>
        <div>
          <time>October 1968</time> Registration of Welox International as Partnership firm
        </div>
      </li>
      <li>
        <div>
          <time>November 1971</time>Collaboration with MNCs such as Pfizer, Novartis, Wyeth and Abbott
        </div>
      </li>
      <li>
        <div>
          <time>April 1978</time> Registration under Ministry of Commerce & Industry, India
        </div>
      </li>
      <li>
        <div>
          <time>February 1981</time> First Commercial Export to Moscow, Russia
        </div>
      </li>
      <li>
        <div>
          <time>June 1984</time> Registration of Welox International as Partnership firm
        </div>
      </li>
      <li>
        <div>
          <time>January 1989</time> Achievement of as large as 50 shipments Export within a Financial year
        </div>
      </li>
      <li>
        <div>
          <time>December 2004</time> Rohan becomes an active member of Pharma export Council of India
        </div>
      </li>
      <li>
        <div>
          <time>November 2006</time>Welox International current director honorable Mr. Purvesh Khumbhani joins Welox International
        </div>
      </li>
      <li>
        <div>
          <time>September 2009</time>ISO-9001:2008 Certification for its unique quality management
        </div>
      </li>
      <li>
        <div>
          <time>March 2016</time>Establishment of Special Export office called as Welox International Hub 
        </div>
      </li>
      <li>
        <div>
          <time>July 2018</time> Establishment of the first fully operational international office in India.
        </div>
      </li>
    </ul>
  </section>
  <section class="timeline-responsive px-25 d-block d-sm-none">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="timeline-event">
            <time>August 1968</time> Foundation of Welox Internatioal Store by honorable Mr. Rohan Radadiya
          </div>
          
            <div class="timeline-event">
              <time>October 1968</time> Registration of Welox International as Partnership firm
            </div>
         
            <div class="timeline-event">
              <time>November 1971</time>Collaboration with MNCs such as Pfizer, Novartis, Wyeth and Abbott
            </div>
         
            <div class="timeline-event">
              <time>April 1978</time> Registration under Ministry of Commerce & Industry, India
            </div>
          
            <div class="timeline-event">
              <time>February 1981</time> First Commercial Export to Moscow, Russia
            </div>
        
            <div class="timeline-event">
              <time>June 1984</time> Registration of Welox International as Partnership firm
            </div>
         
            <div class="timeline-event">
              <time>January 1989</time> Achievement of as large as 50 shipments Export within a Financial year
            </div>
        
            <div class="timeline-event">
              <time>December 2004</time> Rohan becomes an active member of Pharma export Council of India
            </div>
       
            <div class="timeline-event">
              <time>November 2006</time>Welox International current director honorable Mr. Purvesh Khumbhani joins Welox International
            </div>
         
            <div class="timeline-event">
              <time>September 2009</time>ISO-9001:2008 Certification for its unique quality management
            </div>
          
            <div class="timeline-event">
              <time>March 2016</time>Establishment of Special Export office called as Welox International Hub 
            </div>
          
        </div>
      </div>
    </div>
  </section>
  <section class="px-25 bg-light-green">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <h2 class="fx-38"><span class="text-green">COMPANY</span> <span class="text-blue">PRINCIPLES & VALUES</span></h2>
            <div class="row mt-4">
              <div class="col-sm-6">
                  <div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Discipline</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Perseverance</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Teamwork</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Trust and Collaboration</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Honesty</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Transparency and Accountability</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Professionalism</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Efficiency, Mindfulness and Innovation</div>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Integrity</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Commitment</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Loyalty</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Ideas over Hierarchy</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Mutual Respect</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Inclusion and Diversity</div>
                    <div class="text-start p-2"><i class="fa-solid fa-arrow-right me-1"></i> Customer-oriented</div>
                  </div>
              </div>
            </div>
            
        </div>
        <div class="col-sm-6">
          <img src="{{ asset('assets/image/shopping-cart.jpg')}}" alt="" width="100%">
        </div>
      </div>
    </div>
  </section>
@endsection