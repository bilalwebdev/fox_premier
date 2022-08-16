<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i
                        class="mbri-desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="mbri-home"></i><span class="menu-title"
                        data-i18n="Starter kit">Listings</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('admin.manage.model') }}"><i
                                class="la la-list"></i><span>All Listings</span></a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.manage.remodel') }}"><i
                        class="la la-list"></i><span> Remodels</span></a>
                     </li>
                    <li><a class="menu-item" href="{{ route('admin.listing.status') }}">
                        <i class="las la-info-circle"></i><span>Listings Status</span></a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.listing.type') }}">
                        <i class="las la-info-circle"></i><span>Listings Type</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="{{ route('admin.manage.testimonial') }}"><i
                        class="las la-user-check"></i><span class="menu-title"
                        data-i18n="Support">Testimonials</span></a></li>
            <li class="nav-item"><a href="{{ route('admin.media.index') }}"><i
                        class="mbri-image-gallery"></i><span class="menu-title" data-i18n="Site">Media</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('admin.site-settings') }}"><i
                        class="mbri-help"></i><span class="menu-title" data-i18n="Site">Site
                        Settings</span></a>
            </li>
        </ul>
    </div>
</div>
