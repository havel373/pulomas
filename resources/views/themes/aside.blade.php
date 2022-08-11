<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigasi</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Dashboards </span>
                </a>
            </li>
            @if (Auth::user()->role == 'superadmin')
                <li class="side-nav-item">
                    <a href="{{ route('gedung.index') }}" class="side-nav-link">
                        <i class="uil-calender"></i>
                        <span> Kelola Gedung </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('lantai.index') }}" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> Kelola Lantai </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('ruang.index') }}" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> Kelola Ruang </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('marketing.index') }}" class="side-nav-link">
                        <i class="uil-envelope"></i>
                        <span> Kelola User Marketing </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('teknik.index') }}" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span> Kelola User Teknik </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('keuangan.index') }}" class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> Kelola User Keuangan </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('tenant.index') }}" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Kelola Tenant </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('grade.index') }}" class="side-nav-link">
                        <i class="uil-copy-alt"></i>
                        <span> Kelola Grade Tenant </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('additional-service.index') }}" class="side-nav-link">
                        <i class="uil-box"></i>
                        <span> Additional Services </span>
                    </a>
                </li>


                <li class="side-nav-item">
                    <a href="{{ route('rekening.index') }}" class="side-nav-link">
                        <i class="uil-document-layout-center"></i>
                        <span> Kelola Rekening </span>
                    </a>
                </li>

                {{-- <li class="side-nav-item">
                <a href="{{route('overtime.index')}}" class="side-nav-link">
                    <i class="dripicons-hourglass"></i>
                    <span> Overtime </span>
                </a>
            </li> --}}
            @endif


            @if (Auth::user()->role == 'marketing')
                <li class="side-nav-item">
                    <a href="{{ route('data-tenant.index') }}" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Data Tenant </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('data-standmeter.index') }}" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Data Standmeter </span>
                    </a>
                </li>
            @endif

            @if (Auth::user()->role == 'teknik')
                <li class="side-nav-item">
                    <a href="{{ route('standmeter.index') }}" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Kelola Standmeter </span>
                    </a>
                </li>


                <li class="side-nav-item">
                    <a href="{{ route('tarif-listrik.index') }}" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Kelola Tarif Listrik </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('daya-tenant.index') }}" class="side-nav-link">
                        <i class="uil-folder-plus"></i>
                        <span> Kelola Daya Tenant </span>
                    </a>
                </li>
            @endif

            @if (Auth::user()->role == 'tenant')
                <li class="side-nav-item">
                    <a href="{{ route('billing.index') }}" class="side-nav-link">
                        <i class="uil-layer-group"></i>
                        <span> Biling </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('sewa.index') }}" class="side-nav-link">
                        <i class="uil-newspaper"></i>
                        <span> Sewa </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('pembayaran.index') }}" class="side-nav-link">
                        <i class="uil-newspaper"></i>
                        <span> Request Pembayaran </span>
                    </a>
                </li>
            @endif


            {{-- <li class="side-nav-item">
                <a href="#sidebarIcons"  class="side-nav-link">
                    <i class="uil-streering"></i>
                    <span> Lihat Invoice </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('pembayaran.index')}}"  class="side-nav-link">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M7 15h3a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM19 5H5a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3Zm1 12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6h16Zm0-8H4V8a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z"/>
                        </svg>
                    </i>
                    <span> Request Pembayaran </span>
                </a>
            </li> --}}

            <li class="side-nav-item">
                <a href="{{ route('auth.logout') }}" class="side-nav-link">
                    <i class="uil-document-layout-center"></i>
                    <span> Logout </span>
                </a>
            </li>
    </div>
    <!-- Sidebar -left -->

</div>
