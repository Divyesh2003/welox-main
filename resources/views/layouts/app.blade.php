{{-- Head --}}
@include('partials.head')
<!-- BEGIN: Body-->
{{-- Top/Header --}}
@include('partials.header')
{{-- Sidebar --}}
<!-- BEGIN: Content -->
@yield('content')
<!-- END: Content -->
{{-- Footer --}}
@include('partials.footer')