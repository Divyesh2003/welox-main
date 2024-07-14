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
                      <li class="breadcrumb-item active" aria-current="page">Refund</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
  </section>
<section class="px-25 bg-light-green">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 d-flex align-items-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 offset-xl-4">
                    <div class="row mb-3">
                        <div class="col-12">
                            </p>
                            <h1>&nbsp;</h1>
                            <h1 class="contact-h1"><span class="text-green">Refund</span> <span class="text-blue">and Returns Policy</span></h1>
                            <p>&nbsp;</p>
                            <p>Our aim is to make your shopping experience as easy and stress-free as possible. Please read our Return Policy thoroughly to check whether your order is eligible for a refund or not.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/refund.jpg')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="text-green">Refund</span> <span class="text-blue">and Returns Policy</span></h1>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <p>www.weloxpharma.com is dedicated to customer satisfaction and endeavors to ensure that customers are satisfied with the products purchased from our website. This refund policy outlines the guidelines and procedures regarding refunds for pharmaceutical products purchased through our platform.</p>
            <div class="p-3 border mt-3">
                <h2>Eligibility for Refunds</h2>
              <p>  Damaged or Defective Products: Customers are eligible for a refund if the pharmaceutical product received is damaged, defective, or does not meet the expected quality standards. Customers must notify us within [number] days of receiving the product to be eligible for a refund.</p>
               <p> Incorrect Orders: If there is an error in the order, such as receiving the wrong product or an incorrect quantity, customers should notify us promptly for resolution. Refunds may be issued or replacement products sent, depending on the situation.</p>  
            </div>
            <div class="p-3 border mt-3">
                <h2>Refund Process</h2>
               <p>Notification: Customers must notify www.weloxpharma.com customer support via info@weloxpharma.com to initiate the refund process. Please provide order details, including the order number and details of the issue.</p> 
               <p>Return Authorization: In cases of damaged, defective, or incorrect products, www.weloxpharma.com may require the return of the product for inspection or verification purposes. Customers will be provided with return authorization instructions and, if applicable, a prepaid return label.</p> 
               <p>Refund Evaluation: Upon receiving the returned product, our team will inspect it to verify the issue. If the product meets the criteria for a refund as per this policy, a refund will be initiated.</p> 
               <p>Refund Method: Refunds will be processed using the original payment method used for the purchase. The time taken for the refund to reflect in the customer's account may vary based on the payment provider.</p>  
            </div>
            <div class="p-3 border mt-3">
                <h2>Non-Refundable Items</h2>
               <p>Opened or Used Products: For health and safety reasons, opened or used pharmaceutical products cannot be refunded unless they are damaged, defective, or do not meet quality standards upon arrival.</p> 
              <p> Shipping Charges: Shipping and handling charges are non-refundable unless the return is due to an error by www.weloxpharma.com or if the product is found to be damaged, defective, or incorrect.</p> 
            </div>
            <div class="p-3 border mt-3">
                <h2>Cancellations and Modifications</h2>
               <p>Order Changes: Customers can modify or cancel orders within 2 hours of placing the order by contacting customer support. Once an order has been processed or shipped, modifications or cancellations may not be possible.</p> 
               <p>Prescription Medications: Orders for prescription medications may have different cancellation or modification policies due to regulatory requirements. Please contact customer support for guidance.</p>  
            </div>
        </div>
        </div>
    </div>
</section>
@endsection