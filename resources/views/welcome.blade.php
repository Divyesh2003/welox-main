@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')
@section('canonical', "https://weloxpharma.com/")
@extends('layouts.app')
@section('content')
<style>
    #category .image img{
            width: 35px !important;
    }
    .w-container .btn-green-plate:hover{
        background: #ffffff;
    color: #019700;
    border: 1px solid #019700;
    }
</style>
    <main>
        <section class="px-25">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mainslider owl-carousel owl-theme">
                            <div class="item" data-merge="1">
                                <div class="slide position-relative">
                                    <div class="image">
                                        <img class="img-1" src="{{ asset('assets/image/main-slide-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text d-block d-lg-none">
                                        {{-- <p class="text-light">We work to take care of your health and body</p> --}}
                                        <h1>True Healthcare For,<br>
                                            Your Family</h1>
                                        {{-- <p>We're here to provide top-notch healthcare solutions for you and your family</p> --}}
                                        <a href="" class="btn btn-green-plate">Inquiry</a>
                                    </div>
                                    <div class="text d-none d-lg-block">
                                        <p class="text-light">We work to take care of your health and body</p>
                                        <h1>True Healthcare For,<br>
                                            Your Family</h1>
                                        <p>We're here to provide top-notch healthcare solutions for you and your family</p>
                                        <a href="" class="btn btn-green-plate">Inquiry</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-merge="1">
                                <div class="d-flex justify-content-end">
                                    <div class="image">
                                        <img class="img-1" src="{{ asset('assets/image/main-slide-2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text-right text-end d-block d-lg-none">
                                        {{-- <p class="text-light">We work to take care of your health and body</p> --}}
                                        <h1>True Healthcare For,<br>
                                            Your Family</h1>
                                        {{-- <p>We're here to provide top-notch healthcare solutions<br> for you and your family
                                        </p> --}}
                                        <a href="" class="btn btn-green-plate">Explore</a>
                                    </div>
                                    <div class="text-right text-end d-none d-lg-block">
                                        <p class="text-light">We work to take care of your health and body</p>
                                        <h1>True Healthcare For,<br>
                                            Your Family</h1>
                                        <p>We're here to provide top-notch healthcare solutions<br> for you and your family
                                        </p>
                                        <a href="" class="btn btn-green-plate">Explore</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-merge="1">
                                <div>
                                    <div class="image">
                                        <img class="img-1" src="{{ asset('assets/image/main-slide-3.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text d-block d-lg-none">
                                        {{-- <p class="text-light">We work to take care of your health and body</p> --}}
                                        <h1>True Healthcare For,<br>
                                            Your Family</h1>
                                        {{-- <p>We're here to provide top-notch healthcare solutions for you and your family</p> --}}
                                        <a href="" class="btn btn-green-plate">Consultant</a>
                                    </div>
                                    <div class="text d-none d-lg-block">
                                        <p class="text-light">We work to take care of your health and body</p>
                                        <h1>True Healthcare For,<br>
                                            Your Family</h1>
                                        <p>We're here to provide top-notch healthcare solutions for you and your family</p>
                                        <a href="" class="btn btn-green-plate">Consultant</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-25 ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="text-center fx-38"><span class="text-green">Featured</span> <span class="text-blue">Categories</span></h4>
                        <p class="text-center m-0">SEE OUR BEST CATEGORY</p>
                        <span class="d-flex justify-content-center"><img class="text-center"
                                src="{{ asset('assets/image/small-logo.png') }}" alt="" width="25px"></span>
                    </div>
                    <div class="col-sm-12 mt-25 category_response">
                        <div class="owl-carousel owl-theme d-block d-lg-none" id="category">
                            @foreach ($parent_category->chunk(2) as $chunk) <!-- Chunk the categories -->
                                <div class="item">
                                    @foreach ($chunk->chunk(2) as $row) <!-- Create rows -->
                                        <div class="row"> <!-- This row will contain 2 categories -->
                                            @foreach ($row as $category)
                                                <div class="col mt-2">
                                                    <div class="card d-flex flex-column align-items-center justify-content-center p-1" style="width: -webkit-fill-available;height:100px;">
                                                        <a href="{{ route('category.parent.list', $category->slug) }}" style="color: #fff;">
                                                            <div class="image d-flex justify-content-center mt-2">
                                                                <img src="{{ url($category->image) }}" alt="Tablet" height="35px" width="35px">                                                               </div>
                                                            <div class="p-1 text-center" style="font-size: 15px;line-height: 1;">
                                                               <span class="fornato"> {{ $category->name }}</span> 
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="row category_index d-none d-lg-block">
                            {{-- @foreach ($parent_category as $category)
                            <div class="card p-2 mt-3" style="box-shadow: 0 0 9px #ccc;background-color:#7ab741;height: 100px;">
                                <a href="{{ route('category.parent.list', $category->slug) }}" tabindex="0" style="color: #fff;">
                                    <div class="image d-flex justify-content-center mt-2">
                                        <img src="{{ url($category->image) }}" alt="Tablet" height="35px">
                                       </div>
                                    <div class="p-1 text-center" style="font-size: 15px;line-height: 1;">
                                       <span class="fornato"> {{ $category->name }}</span> 
                                    </div>
                                </a>
                            </div>
                            @endforeach  --}}
                         <style>
                            #category-responsive  img{
                                         width: auto !important;
                                }
                         </style>
                            <div class="owl-carousel owl-theme" id="category-responsive">
                                @foreach ($parent_category as $category) <!-- Chunk the categories -->
                                    <div class="item">
                                        <div class="card p-2 mt-3" style="box-shadow: 0 0 9px #ccc;background-color:#7ab741;height: 100px;">
                                            <a href="{{ route('category.parent.list', $category->slug) }}" tabindex="0" style="color: #fff;">
                                                <div class="image d-flex justify-content-center mt-2">
                                                    <img src="{{ url($category->image) }}" alt="Tablet" height="35px">
                                                   </div>
                                                <div class="p-1 text-center" style="font-size: 15px;line-height: 1;">
                                                   <span class="fornato"> {{ $category->name }}</span> 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-25 bg-light-green">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12">
                        <h4 class="text-center fx-38"><span class="text-green">Pharmaceutical</span><span class="text-blue"> Exporter & Manufacturer in India</span></h4>
                        <p class="text-center m-0">WHO WE ARE?</p>
                        <span class="d-flex justify-content-center"><img class="text-center"
                                src="{{ asset('assets/image/small-logo.png') }}" alt="" width="25px"></span>
                    </div>
                    <div class="col-sm-6 mt-25 order-1 order-lg-0">
                        <div class="">
                            <p>Welox International has a global perspective, and to cater to the demand of the international
                                market, we established a Special Export office called Welox Medi Source. Our plan of
                                expansion incorporates providing quality services to the clients, creating a seamless
                                channel for maintaining the continuous supply of pharmaceutical products in the
                                international market. We have also focused on establishing a strong presence in Afghanistan,
                                and so we have set
                                up Afghan Vascular Care Ltd, our international office in Kabul.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('contact') }}" class="btn btn-green-plate">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-25 d-flex justify-content-center order-0 order-lg-0">
                        <img class="text-center d-none d-lg-block" src="{{ asset('assets/image/world.png') }}" alt="" width="45%">
                        <img class="text-center d-block d-lg-none " src="{{ asset('assets/image/world.png') }}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="px-25">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="text-center fx-38"><span class="text-green">Explore</span> <span class="text-blue">Products</span> </h4>
                        <p class="text-center m-0">Transforming the future of medicine. Discover more now!</p>
                        <span class="d-flex justify-content-center"><img class="text-center"
                                src="{{ asset('assets/image/small-logo.png') }}" alt="" width="25px"></span>
                    </div>
                </div>
                <div id="customers-testimonials" class="owl-carousel owl-theme mt-3 d-none d-lg-block">
                    <!--TESTIMONIAL 1 -->
                    @foreach ($products as $product)
                        {{-- @dd($product->image) --}}
                        <a href="{{ route('product.single', $product->slug) }}">
                            <div class="item">
                                <div class="shadow-effect">
                                    <img class="img-responsive" src="{{ url($product->image) }}" alt=""
                                        width="100%">
                                    <div class="item-details d-none d-lg-block">
                                        <h5>{{ Str::of($product->name)->limit(20) }}</h5>
                                        <p style="font-size: 18px !important;">{!! Str::of($product->description)->limit(35) !!}</p>
                                        <div>
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <!--END OF TESTIMONIAL 1 -->
                </div>
                <div id="product-responsive" class="owl-carousel owl-theme mt-3 d-block d-lg-none">
                        <!-- Iterate over chunks of products -->
                        @foreach ($products->chunk(2) as $chunk) <!-- Adjust the number 2 based on how many items you want per row -->
                            <div class="item">
                                <!-- Each chunk is a row -->
                                @foreach ($chunk as $product)
                                    <a href="{{ route('product.single', $product->slug) }}" >
                                        <div class="shadow-effect mt-3">
                                            <img class="img-responsive" src="{{ url($product->image) }}" alt="" width="100%">
                                            <div class="item-details d-none d-lg-block">
                                                <h5>{{ Str::of($product->name)->limit(20) }}</h5>
                                                <p style="font-size: 18px !important;">{!! Str::of($product->description)->limit(35) !!}</p>
                                                <div>
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
            </div>
        </section>
        <section class="expert-resources">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="text-center fx-38"><span class="text-green">We</span><span class="text-blue">  have expert resources</span></h4>
                        <p class="text-center m-0">supporting the
                            following activities</p>
                        <span class="d-flex justify-content-center"><img class="text-center"
                                src="{{ asset('assets/image/small-logo.png') }}" alt="" width="25px"></span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <div class="slider">
                            <div class="splide">
                                <div class="splide__track" id="splide-track">
                                  <ul class="splide__list list">
                                    <li class="splide__slide">
                                        <div class="p-2 d-flex justify-content-center">
                                            <div>
                                                <div class="outer-circle">
                                                    <div class="expert_round inner-circle ">
                                                        <img class="mb-3" src="{{ asset('assets/image/category.png')}}" width="90px" height="90px" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="body-paragraph large text-center"> <strong>Category Management</strong></p>
                                    </li>
                                    <li class="splide__slide ">
                                        <div class="p-2 d-flex justify-content-center">
                                            <div class="outer-circle">
                                                <div class="expert_round inner-circle">
                                                    <img class="mb-3" src="{{ asset('assets/image/agreement.png')}}" width="90px" height="90px" alt="" />
                                                </div>
                                            </div>
                                            {{-- <img class="mb-3" src="{{ asset('assets/image/agreement.png')}}" width="180px" height="180px" alt="" /> --}}
                                        </div>
                                        <p class="body-paragraph large text-center"><strong>High Value Capital <br> Procurement</strong></p>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="p-2 d-flex justify-content-center">
                                            <div class="outer-circle">
                                                <div class="expert_round inner-circle">
                                                    <img class="mb-3" src="{{ asset('assets/image/blogger.png')}}" width="90px" height="90px" alt="" />
                                                </div>
                                            </div>
                                            {{-- <img class="mb-3" src="{{ asset('assets/image/blogger.png')}}" width="180px" height="180px" alt="" /> --}}
                                        </div>
                                        <p class="body-paragraph large text-center"><strong>Contract Management <br>& Administration</strong></p>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="p-2 d-flex justify-content-center">
                                            <div class="outer-circle">
                                                <div class="expert_round inner-circle">
                                                    <img class="mb-3" src="{{ asset('assets/image/tracking.png')}}" width="90px" height="90px" alt="" />
                                                </div>
                                            </div>
                                            {{-- <img class="mb-3" src="{{ asset('assets/image/tracking.png')}}" width="180px" height="180px" alt="" /> --}}
                                        </div>
                                        <p class="body-paragraph large text-center"><strong>Material Expediting <br>& Tracking</strong></p>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="'p-2 d-flex justify-content-center">
                                            <div class="outer-circle">
                                                <div class="expert_round inner-circle">
                                                    <img class="mb-3" src="{{ asset('assets/image/evaluation.png')}}" width="90px" height="90px" alt="" />
                                                </div>
                                            </div>
                                            {{-- <img class="mb-3" src="{{ asset('assets/image/evaluation.png')}}" width="180px" height="180px" alt="" /> --}}
                                        </div>
                                        <p class="body-paragraph large text-center"><strong>Document Controls</strong></p>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="p-2 d-flex justify-content-center">
                                            <div class="outer-circle">
                                                <div class="expert_round inner-circle">
                                                    <img class="mb-3" src="{{ asset('assets/image/process.png')}}" width="90px" height="90px" alt="" />
                                                </div>
                                            </div>
                                            {{-- <img class="mb-3" src="{{ asset('assets/image/process.png')}}" width="180px" height="180px" alt="" /> --}}
                                        </div>
                                        <p class="body-paragraph large text-center"><strong>Project Controls</strong></p>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="p-2 d-flex justify-content-center">
                                            <div class="outer-circle">
                                                <div class="expert_round inner-circle">
                                                    <img class="mb-3" src="{{ asset('assets/image/3281142.png')}}" width="90px" height="90px" alt="" />
                                                </div>
                                            </div>
                                            {{-- <img class="mb-3" src="{{ asset('assets/image/3281142.png')}}" width="180px" height="180px" alt="" /> --}}
                                        </div>
                                        <p class="body-paragraph large text-center"><strong>Strategic Sourcing</strong></p>
                                    </li>
                                  </ul>
                                </div> 
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div data-poster-url="https://assets-global.website-files.com/641ca92f7002943b9cd6d960/64246421dde6c442a99f1dd0_Procurement Services Hero Section - Nexus-poster-00001.jpg"
                        data-video-urls="https://assets-global.website-files.com/641ca92f7002943b9cd6d960/64246421dde6c442a99f1dd0_Procurement Services Hero Section - Nexus-transcode.mp4,https://assets-global.website-files.com/641ca92f7002943b9cd6d960/64246421dde6c442a99f1dd0_Procurement Services Hero Section - Nexus-transcode.webm"
                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                        data-w-id="be94d826-f27e-2577-0c4f-bc53e77c2a42"
                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                        class="hero-video w-background-video w-background-video-atom"><video
                            id="be94d826-f27e-2577-0c4f-bc53e77c2a42-video" autoplay="" loop=""
                            style="background-image:url(&quot;https://assets-global.website-files.com/641ca92f7002943b9cd6d960/64246421dde6c442a99f1dd0_Procurement Services Hero Section - Nexus-poster-00001.jpg&quot;)"
                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source
                                src="https://assets-global.website-files.com/641ca92f7002943b9cd6d960/64246421dde6c442a99f1dd0_Procurement Services Hero Section - Nexus-transcode.mp4"
                                data-wf-ignore="true">
                            <source
                                src="https://assets-global.website-files.com/641ca92f7002943b9cd6d960/64246421dde6c442a99f1dd0_Procurement Services Hero Section - Nexus-transcode.webm"
                                data-wf-ignore="true">
                        </video>
                        <div class="hero-container w-container">
                            <p class="hero-subheading" style="font-size: 20px;">WHO-GMP & FDA Approved</p>
                            <h1 class="hero-heading"><span class="text-green">API's</span><span class="text-blue"> & INTERMEDIATES</span><br></h1>
                            <p class="hero-subheading">Manufacturing & Exporting</p>
                            <div class="d-flex justify-content-center mt-3">
                                <a href="https://api.weloxpharma.com" class="btn btn-green-plate">Explore Welox API's</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-25 bg-light-green">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12 col-lg-4">
                        <h4 class="fx-38 text-center text-lg-start"> <span class="text-green">OUR</span> <span class="text-blue">MAIN SERVICES</span></h4>
                        <p class="fx-18">On the other hand we denounce with righteous indignation and dislike men who are
                            so beguiled and demoralized by the charms of pleasure of themoment so blinded by desire.</p>
                        <div class="rs-btn btn-left">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="row ">
                            <div class="col-sm-6 col-md-4 col-lg-4 mt-3 mt-lg-0">
                                <div class="card_p card__one text-center">
                                    <figure class="card__img" style="margin-bottom:30px">
                                        <img src="{{ asset('assets/image/partnership-handshake.png') }}" width="100px"
                                            alt="" data-aos="zoom-in" data-aos-duration="3000"
                                            class="aos-init aos-animate">
                                    </figure>
                                    <div class="card__desc">
                                        <h5 class="title mb-3">Contract Manufacturing</h5>
                                        <p class="mb-0">Contract manufacturing of only the top quality pharmaceutical
                                            products, that too at the best competitive prices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 mt-3 mt-lg-0">
                                <div class="card_p card__one text-center">
                                    <figure class="card__img" style="margin-bottom:30px">
                                        <img src="{{ asset('assets/image/factory.png') }}" width="100px"
                                            alt="" data-aos="zoom-in" data-aos-duration="3000"
                                            class="aos-init aos-animate">
                                    </figure>
                                    <div class="card__desc">
                                        <h5 class="title mb-3">3rd Party Manufacturing</h5>
                                        <p class="mb-0">Specialised in 3rd Party manufacturing of a wide range of
                                            pharmaceutical products.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 mt-3 mt-lg-0">
                                <div class="card_p card__one text-center">
                                    <figure class="card__img" style="margin-bottom:30px">
                                        <img src="{{ asset('assets/image/flask.png') }}" width="100px" alt=""
                                            data-aos="zoom-in" data-aos-duration="3000" class="aos-init aos-animate">
                                    </figure>
                                    <div class="card__desc">
                                        <h5 class="title mb-3">Generic Medicines Manufacturing</h5>
                                        <p class="mb-0">We manufacture variety of generic medicines at the best pricing
                                            without compromising on the standards.</p>
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
                    <div class="col-sm-12">
                        <h4 class="text-center fx-38"> <span class="text-green">OUR</span><span class="text-blue"> Latest News</span></h4>
                        <p class="text-center m-0">Resent post Here</p>
                        <span class="d-flex justify-content-center"><img class="text-center"
                                src="{{ asset('assets/image/small-logo.png') }}" alt="" width="25px"></span>
                    </div>
                    <div class="col-sm-12">
                        {{-- @dd($blogs) --}}
                        <div class="mt-25 blogs owl-carousel owl-theme">
                            @foreach ($blogs as $blog)
                                <div class="item p-2">
                                    <article class="content-right-margin-20 light-bg-2 animated ms-3">
                                        <a href="{{ route('blog.single',$blog->slug) }}"
                                            class="pointer-large animsition-link hover-box d-block" style="color: #000;">
                                            <div class="overlay-anim-box2 overlay-dark-bg-2 animated overlay-anim2"
                                                data-animation="overlay-anim2">
                                                <img class="hover-img" src="{{ url($blog->image)}}">
                                            </div>
                                            <h3 class="" style="padding:0 20px;margin:30px 0 0 0;">
                                                <span class="" style="font-size:27px;"
                                                    data-animation="overlay-anim2">{{ $blog->name }}</span><br>
                                            </h3>
                                        </a>
                                        <div class="" style="padding:0 20px 20px;margin:30px 0 0 0;">
                                            <ul class="p-0 d-flex">
                                                <li style="margin-left: 20px;margin-right:10px;"><i class="fas fa-thumbtack text-color-3"></i></li>
                                                <li class="" style="margin-left: 20px;margin-right:10px;color:#000;">
                                                     Wellox Pharma
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-25 bg-post" >
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12">
                        <h3 class="text-center fx-38"> <span class="text-green">Request</span> <span class="text-blue"> A Call Back</span></h3>
                        <p class="text-center m-0"></p>
                        <span class="d-flex justify-content-center"><img class="text-center"
                                src="{{ asset('assets/image/small-logo.png') }}" alt="" width="25px"></span>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6 d-none d-lg-block">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8 position-relative">
                                <div class="get-business text-center">
                                    <div class="">
                                        <div class="content mt-5"><span class="text-uppercase">Get Business</span> Quote
                                            In Less <small class="f-w-700 text-uppercase">than 30 Minutes !</small></div>
                                        <div class="get-btn mt-5 mb-5">
                                            <button type="button" class="btn btn-green-bord w-100"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Request A Call Back
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-parent">
                            <form class="needs-validation" action="{{ route('inquiry.store') }}" name="inquiry"
                                id="inquiry" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @method('POST')
                                {{-- <form> --}}
                                <div class="row">
                                    <div class="mb-2 col-12 col-sm-6 col-md-6">
                                        <label for="name" class="form-label text-light"
                                            style="font-weight:700">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            aria-describedby="name" required />
                                    </div>
                                    <div class="mb-2 col-12 col-sm-6 col-md-6">
                                        <label for="company_name" class="form-label text-light"
                                            style="font-weight:700">Company Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name"
                                            aria-describedby="company_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12 col-sm-6 col-md-6">
                                        <label for="phone" class="form-label text-light" style="font-weight:700">Phone
                                            Number</label>
                                        <input type="number" class="form-control" name="phone" id="phone">
                                    </div>
                                    <div class="mb-2 col-12 col-sm-6 col-md-6">
                                        <label for="email" class="form-label text-light"
                                            style="font-weight:700">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="mb-2 col-12 col-sm-12 col-md-12">
                                    <label for="prefer" class="form-label text-light me-2"
                                        style="font-weight:700">Prefer :- </label>
                                    <input class="form-check-input w-25" type="checkbox" name="prefer[]"
                                        value="whatsapp" id="whatsapp">
                                    <label class="form-check-label round-label" for="whatsapp"
                                        style="background: #fff; border-radius: 50%;padding: 4px;">
                                        <img class="image_check" src="{{ asset('assets/image/WhatsApp.svg') }}"
                                            width="25px" height="25px" alt="">
                                    </label>
                                    <input class="form-check-input w-25" type="checkbox" name="prefer[]"
                                        value="instagram" id="instagram">
                                    <label class="form-check-label round-label" for="instagram"
                                        style="background: #fff; border-radius: 50%;padding: 4px;">
                                        <img class="image_check" src="{{ asset('assets/image/Instagram.svg') }}"
                                            width="25px" height="25px" alt="">
                                    </label>
                                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="mail"
                                        id="mail">
                                    <label class="form-check-label round-label" for="mail"
                                        style="background: #fff; border-radius: 50%;padding: 4px;">
                                        <img class="image_check" src="{{ asset('assets/image/mail.svg') }}"
                                            width="25px" height="25px" alt="">
                                    </label>
                                    <input class="form-check-input w-25" type="checkbox" name="prefer[]" value="call"
                                        id="call">
                                    <label class="form-check-label round-label" for="call"
                                        style="background: #fff; border-radius: 50%;padding: 4px;">
                                        <img class="image_check" src="{{ asset('assets/image/phone.svg') }}"
                                            width="25px" height="25px" alt="">
                                    </label>
                                    <input class="form-check-input w-25" type="checkbox" name="prefer[]"
                                        value="facebook" id="facebook">
                                    <label class="form-check-label round-label" for="facebook"
                                        style="background: #fff; border-radius: 50%;padding: 4px;">
                                        <img class="image_check" src="{{ asset('assets/image/facebook.svg') }}"
                                            width="25px" height="25px" alt="">
                                    </label>
                                </div>
                                <div class="mb-2 col-12 col-sm-12 col-md-12">
                                    <label for="message" class="form-label text-light"
                                        style="font-weight:700">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <strong>ReCaptcha:</strong>
                                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback="recaptchaCallback"></div>
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                            @endif
                                        </div>  
                                    </div>
                                </div>
                    
                                <button class="btn btn-green-plate" id="submitBtn" type="submit" form='inquiry' disabled>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        #customers-testimonials h2{
                font-size: 18px;
        }
    </style>
@endsection
