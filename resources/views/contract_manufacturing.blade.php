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
                <li class="breadcrumb-item active" aria-current="page">Contract Manufaccturing</li>
              </ol>
            </nav>
      </div>
  </div>
  </div>
</section>
<section class="px-25 bg-light-green  d-none d-lg-block">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-sm-6 d-flex align-items-center">
              <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 offset-xl-4">
                  <div class="row mb-3">
                      <div class="col-12">
                          <h1 class="d-none d-lg-block">&nbsp;</h1> 
                          <h1 class="contact-h1"><span class="text-green">Contract</span> <span class="text-blue">Manufacturing</span></h1>
                          <p class="d-none d-lg-block">&nbsp;</p>
                          <p>Contract manufacturing is when one company enters into an agreement with another to produce components or products over a specific timeframe.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6">
              <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-1 mt-lg-5">
                  <img src="{{ asset('assets/image/contract-manufacturing.jpg')}}" alt="" width="100%">
              </div>
          </div>
      </div>
  </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
  <div class="container-fluid">
      <div class="row">
          <h1 class="contact-h1"><span class="text-green">Contract</span> <span class="text-blue">Manufacturing</span></h1>
      </div>
  </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/two-men-shaking-hands_53876-63180.jpg')}}"  class="shadow-effect-pharma" alt="" width="100%">
            </div>
            <div class="col-sm-6 ">
              <p>Wellona Pharma, a Pharmaceutical Contract Manufacturing Company provides WHO GMP quality for all its Formulations.Wellona Pharma has been a reliable and trusted partner of the Healthcare Industries with a history of proven Quality Products and Services. We currently manufacture products on contract basis at our facility for various leading pharmaceutical companies both for the Domestic as well as Export markets. Backed by a team of highly qualified and experienced professionals, we are capable of customizing the full range of Pharma Formulations as per the customer needs.</p>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h6>Some of the salient features of our Contract Manufacturing Service are:</h6>
                <ul style="list-style-type: disc">
                  <li>State-of-the art facilities adhering to WHO-GMP specifications.</li>
                  <li>Fully computerized system for manufacturing</li>
                  <li>Capabilities to produce dosage forms in sterile and general, covering all therapeutic segments including small and large volume parenterals(SVP and LVP)</li>
                  <li>Dedicated production facilities for Beta-Lactum, Cephalosporin products.</li>
                  <li>Qualified and experienced technical team in each area of Pharma Contract Manufacturing like Quality Control, Quality Assurance and Product Development</li>               
                </ul>
              <p>Being a focused Contract Manufacturing Company, our customers find us to be the preferred source for their manufacturing requirements and won a clientele that is satisfied with our service quality.</p>

            </div>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h6>Production Capacity:</h6>
                <div class="row">
                    <div class="col-sm-6">
                        <table class="table table table-dark">
                            <thead>
                              <tr>
                                <th scope="col">Productions Unit</th>
                                <th scope="col">Yearly Production Capacity
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Tablets	</th>
                                <td>240 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Hard Gelatin Capsules</th>
                                <td>20 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Soft Gelatin Capsules</th>
                                <td>10 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Liquid Syrup</th>
                                <td>6.0 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Dry Syrups</th>
                                <td>6.0 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">External Preparations/ Ointments/ Creams</th>
                                <td>6.0 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Eye/ Ear Drops	</th>
                                <td>12 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Powders</th>
                                <td>3.0 Million</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table table table-dark">
                            <thead>
                              <tr>
                                <th scope="col">Injectable Production Unit</th>
                                <th scope="col">Yearly Production Capacity</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Liquid Vials</th>
                                <td>25 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Ampoules</th>
                                <td>60 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Powder For Injections</th>
                                <td>60 Million</td>
                              </tr>
                              <tr>
                                <th scope="row">Lyophilized products</th>
                                <td>1.0 Million</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
@endsection