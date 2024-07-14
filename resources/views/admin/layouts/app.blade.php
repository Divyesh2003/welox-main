{{-- Head --}}
@include('admin.partials.head')
<!-- BEGIN: Body-->
{{-- Mobile Menu --}}
{{-- @include('admin.partials.mobile') --}}
{{-- Top/Header --}}
@include('admin.partials.header')
{{-- Sidebar --}}
@include('admin.partials.sidebar')
<!-- BEGIN: Content -->
@yield('content')
<!-- END: Content -->
{{-- Footer --}}
@include('admin.partials.footer')
{{-- <script src="{{ mix('js/app.js') }}"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}
{{-- @stack('scripts') --}}
</body>
<!-- END: Body-->
</html>