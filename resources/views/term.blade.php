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
                      <li class="breadcrumb-item active" aria-current="page">Terms And Condition</li>
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
                            <h1 class="contact-h1"><span class="texxt-green">Terms</span> <span class="text-blue">& Conditions</span></h1>
                            <p>&nbsp;</p>
                            <p>Your access to and use of the service is conditioned on your acceptance of and compliance with these terms. These terms apply to all visitors, users, and others who access or use the service.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-container-a col-10 col-md-10 col-lg-8 col-xl-6 p-3 offset-1 offset-lg-2 mt-5">
                    <img src="{{ asset('assets/image/terms.png')}}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="px-25 bg-light-green d-block d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <h1 class="contact-h1"><span class="texxt-green">Terms</span> <span class="text-blue">& Conditions</span></h1>
        </div>
    </div>
</section>
<section class="px-25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                    <p>These Terms and Conditions govern your use of www.weloxpharma.com including all pages within this website. By accessing this website, you agree to these Terms and Conditions in full. If you do not agree with these Terms and Conditions, do not use this website.</p>

                <div class="p-3 border mt-3">
                    <h2>Use of Content</h2>
                    <p>Medical Information: The content provided on this website is for informational purposes only and should not be considered medical advice. Consult a healthcare professional for personalized medical guidance.
                    </p>
                    <p>
                        Accuracy: We strive to provide accurate and up-to-date information. However, we do not warrant the completeness, accuracy, or reliability of any content on this site.
                    </p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Privacy</h2>
                    <p>Data Collection: We collect and process personal information in accordance with our Privacy Policy. By using this website, you consent to the collection and use of your data as described therein.</p>
                    <p>Cookies: This website may use cookies to improve user experience. By using the website, you agree to the use of cookies in accordance with our Privacy Policy.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>User Conduct</h2>
                    <p>Prohibited Actions: You agree not to use this website for any unlawful purpose or to engage in any conduct that may impair the functionality or security of the website.</p>
                    <p>User Responsibility: You are responsible for maintaining the confidentiality of any login information associated with this website.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Intellectual Property</h2>
                    <p>Copyright: All content, trademarks, and intellectual property on this website are the property of www.weloxpharma.com unless otherwise stated.</p>
                    <p>Use of Materials: You may not reproduce, distribute, or republish any material from this website without prior written permission.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Disclaimer of Liability</h2>
                   <p> No Warranties: This website is provided "as is" without any representations or warranties, express or implied. We do not guarantee the availability, accuracy, or completeness of the website or its content.</p>
                    <p>Limitation of Liability: www.weloxpharma.com shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of your access to or use of this website.</p>
                </div>
                <div class="p-3 border mt-3">
                    <h2>Governing Law</h2>
                   <p> Jurisdiction: These Terms and Conditions are governed by and construed in accordance with the laws of Gujarat. Any disputes relating to these Terms and Conditions shall be subject to the exclusive jurisdiction of the courts of Surat.
                    Changes to Terms and Conditions</p>
                   <p>www.weloxpharma.com reserves the right to modify or replace these Terms and Conditions at any time. Your continued use of the website after any changes indicates your acceptance of the revised Terms and Conditions.                    </p> 
                </div>
                <div class="p-3 border mt-3">
                    <h2>Contact Information</h2>
                      <p> If you have any questions or concerns regarding these Terms and Conditions, please contact us at info@weloxpharma.com.</p> 
                      <p>Please ensure to have legal counsel review and customize these terms to comply with the specific regulations and requirements applicable to your pharmaceutical website.</p>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection