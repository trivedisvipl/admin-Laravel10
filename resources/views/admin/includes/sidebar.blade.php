<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{!!asset('assets/admin/images/logo.svg')!!}" alt="branding logo">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">S-Pure</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {!! (Request::is(ADMIN_SLUG.'/dashboard') ? 'active' : '') !!}">
            <a href="{!!URL::to(ADMIN_SLUG.'/dashboard')!!}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

    </ul>
</aside>
