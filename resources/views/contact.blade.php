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
                      <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-4 d-flex align-items-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 offset-xl-4">
                    <div class="row mb-3">
                        <div class="col-12 d-none d-lg-block ">
                            <h1>&nbsp;</h1>
                            <h1 class="contact-h1"><span class="text-green">Contact</span> <span class="text-blue">Us</span></h1>
                            <p>&nbsp;</p>
                            <p>Need to get in touch with us? Either fill out the 
                                form with your inquiry or e-mail us on <span style="text-decoration: underline;"><span
                                    style="color: #4b32b0; text-decoration: underline;"><a href="mailto:inquiry@weloxpharma.com"
                        rel="noopener" style="color: #4b32b0; text-decoration: underline;">inquiry@weloxpharma.com</a></span></span> </p> 
                        </div>
                        <div class="col-12 d-block d-lg-none">
                        <h1 class="contact-h1">Contact Us</h1>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">
                <div class="form-container-a col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 p-3 offset-lg-2 mt-2 mt-lg-5">
                    <div class="form-parent m-0">
                        <form class="needs-validation" action="{{ route('inquiry.store') }}" method="POST" enctype="multipart/form-data" no-validate>
                    @csrf()
                    @method('POST')
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="name" class="form-label text-light" style="font-weight:700">Name <span style="color: #fb0707">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required/>
                        </div>
                        <div class="col">
                            <label for="company_name" class="form-label text-light" style="font-weight:700">Company Name <span style="color: #fb0707">*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="company_name" required> 
                        </div>
                          </div>
                              <div class="row mb-3">
                                <div class="col">
                                    <label for="phone" class="form-label text-light" style="font-weight:700">Phone Number <span style="color: #fb0707">*</span></label>
                                    <input type="number" class="form-control" name="phone" id="phone" required>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                    <label for="email" class="form-label text-light" style="font-weight:700">Email <span style="color: #fb0707">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                              </div>
                              <div class="mb-3 mt-3">
                                <label for="prefer" class="form-label text-light me-2" style="font-weight:700">Prefer :- <span style="color: #fb0707">*</span></label>
                                <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="whatsapp" id="whatsapp">
                                <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                                   <img src="{{ asset('assets/image/WhatsApp.svg')}}" width="15px" height="15px" alt="">
                                </label>
                                <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="instagram" id="instagram">
                                <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                                   <img src="{{ asset('assets/image/Instagram.svg')}}" width="15px" height="15px" alt="">
                                </label>
                                <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="mail" id="mail">
                                <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                                    <img src="{{ asset('assets/image/mail.svg')}}" width="15px" height="15px" alt="" >
                                </label>
                                <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="call" id="call">
                                <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                                    <img src="{{ asset('assets/image/phone.svg')}}" width="15px" height="15px" alt="">
                                </label>
                                <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="facebook" id="facebook">
                                <label class="form-check-label round-label" for="whatsapp_modal" style="background: #fff; border-radius: 50%;padding: 4px; width: 25px;height: 25px;text-align: center;line-height: 1;margin: 0 9px;">
                                    <img src="{{ asset('assets/image/facebook.svg')}}" width="15px" height="15px" alt="">
                                </label>
                              </div>
                              <div class="mb-3">
                                <label for="message" class="form-label text-light" style="font-weight:700">Message <span style="color: #fb0707">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                              </div>
                            <button class="btn btn-green-plate" type="submit">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 contact-center" id="department-emails">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center"><span style="color: #ffffff; font-size: 34.375px;letter-spacing: -.004em;line-height: 41px;">Reach us by email:</span></h3>
            </div>
            <div class="col-sm-12 mt-2 mt-lg-4">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="card card-dark" style="background: #ffffff">
                            <div class="row m-2 m-lg-5 d-flex justify-content-center">
                                <i class="fa-brands fa-whatsapp" style="font-size: 80px; color:#3e8b5c;"></i>
                            </div>
                            <div class="row ms-4 me-4 mb-2"></div>
                            <div class="row ms-2 ms-lg-4 me-2 me-lg-4  mb-1 text-center">
                                <span class="">
                                    <h4><strong>General Inquiries</strong></h4>
                        <div style="font-size: 18px;">
                            <span style="text-decoration: underline;">
                                <span style="color:#4b32b0;">
                                    <a class="fx-14" href="https://api.whatsapp.com/send?phone=7984303039&amp;text=Hello!" style="color: #4b32b0; text-decoration: underline;">+91 7984303039 </a></span>
                                </span>
                                </div>
                                </span>
                               </div>
                            <div class="row ms-4 me-4 mb-5"><a href="" class="button-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="card card-dark" style="background: #ffffff">
                            <div class="row m-2 m-lg-5 d-flex justify-content-center">
                                <i class="fa-solid fa-envelope" style="font-size: 80px; color:#3e8b5c;"></i>
                            </div>
                            <div class="row ms-4 me-4 mb-2"></div>
                            <div class="row ms-2 ms-lg-4 me-2 me-lg-4  mb-1 text-center">
                                <span class="">
                                    <h4><strong>Support</strong></h4>
                        <div style="font-size: 18px;">
                            <span style="text-decoration: underline;">
                                <span style="color: #4b32b0;">
                                    <a class="fx-14" href="mailto:inquiry@weloxpharma.com" style="color: #4b32b0; text-decoration: underline;">inquiry@weloxpharma.com</a></span>
                                </span>
                                </div>
                                </span>
                               </div>
                            <div class="row ms-4 me-4 mb-5"><a href="" class="button-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="card card-dark" style="background: #ffffff">
                            <div class="row m-2 m-lg-5 d-flex justify-content-center">
                                <i class="fa-solid fa-phone" style="font-size: 80px; color:#3e8b5c;"></i>
                            </div>
                            <div class="row ms-2 ms-lg-4 me-2 me-lg-4 mb-2"></div>
                            <div class="row ms-2 ms-lg-4 me-2 me-lg-4 mb-1 text-center">
                                <span class="">
                                    <h4><strong>Partnerships</strong></h4>
                        <div style="font-size: 18px;">
                            <span style="text-decoration: underline;">
                                <span style="color: #4b32b0;">
                                    <a class="fx-14" href="tel:+917984303039 " style="color: #4b32b0; text-decoration: underline;">+91 7984303039 </a></span>
                                </span>
                                </div>
                                </span>
                               </div>
                            <div class="row ms-4 me-4 mb-5"><a href="" class="button-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-8  my-auto">
                <span class="content-image-text-a text-center text-lg-start"><h3>Our office is located at:</h3>
                    <p style="font-size: 24px; line-height: 1.25;" class="text-center text-lg-start"><span>236, Avadh Viceroy,<br> Near D-Mart,<br> Sarthana Jakatnaka.<br> Surat-395006,<br> Gujarat, India </span><br></p></span>
            </div>
            <div class="col-sm-4">
                <img class="" style="" src="{{ asset('assets/image/medicine-des.png')}}" width="100%">
            </div>
        </div>
    </div>
</section>
@endsection