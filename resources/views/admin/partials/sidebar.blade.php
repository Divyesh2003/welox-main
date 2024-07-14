<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/admin/dashboard" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img src="{{ asset('assets/image/Weloxy.png')}}" alt="" width="150px">
        </span>
      </a>
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item">
        <a href="{{route('adminDashboard')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Dashboard</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.blog.category.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Blog Category</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.blog.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Blog</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.category.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Category</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.product.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Product</div>
        </a>
      </li>
      {{-- <li class="menu-item">
        <a href="{{ route('admin.inquiry.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Inquiry</div>
        </a>
      </li> --}}
      {{-- @dd(auth()->guard('admin')->user()->is_admin) --}}
      @if(auth()->guard('admin')->user()->is_admin == 1)
    <li class="menu-item">
        <a href="{{ route('admin.inquiry.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Inquiry</div>
        </a>
    </li>
@endif
      <li class="menu-item">
        <a href="{{ route('admin.faq.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Faq</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.bulk.product.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Bulk Product</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.seo.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Seo</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.editor.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Html Editor</div>
        </a>
      </li>
    </ul>
  </aside>
  <!-- / Menu -->