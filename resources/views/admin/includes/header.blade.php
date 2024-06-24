<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <?php $profile = Auth::guard('admin')->user()->profile; ?>
                        @if(file_exists(USER_IMAGE_PATH.$profile))
                            <img src="{!! USER_IMAGE_ROOT.$profile !!}" class="h-auto rounded-circle">
                        @else
                            <img src="{!!asset('assets/admin/images/logo.svg')!!}" class="h-auto rounded-circle">
                        @endif

                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">

                                        @if(file_exists(USER_IMAGE_PATH.$profile))
                                            <img src="{!! USER_IMAGE_ROOT.$profile !!}" alt="branding logo" class="h-auto rounded-circle">
                                        @else
                                            <img src="{!!asset('assets/admin/images/logo.svg')!!}" alt="branding logo" class="h-auto rounded-circle">
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{!! Auth::guard('admin')->user()->name !!}</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{!! URL(ADMIN_SLUG.'/profile') !!}">
                            <i class="ti ti-user-check me-2 ti-sm"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{!!URL::to(ADMIN_SLUG.'/password/change')!!}">
                            <i class="ti ti-lock"></i>
                            <span class="align-middle">Change Password</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{!! URL(ADMIN_SLUG.'/logout') !!}">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
