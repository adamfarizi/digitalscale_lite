@extends('app')
@section('sidebar')
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        {{-- Icon --}}
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path
                                d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                id="path-1"></path>
                            <path
                                d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                id="path-3"></path>
                            <path
                                d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                id="path-4"></path>
                            <path
                                d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                id="path-5"></path>
                        </defs>
                        <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                    <g id="Mask" transform="translate(0.000000, 8.000000)">
                                        <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                        </mask>
                                        <use fill="#696cff" xlink:href="#path-1"></use>
                                        <g id="Path-3" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-3"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                        </g>
                                        <g id="Path-4" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-4"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                        </g>
                                    </g>
                                    <g id="Triangle"
                                        transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                        <use fill="#696cff" xlink:href="#path-5"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2">Digital Scale</span>
            </a>

            <a href="javascript:void(0);"
                class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>
        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboards">Dashboard</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('/') }}" class="menu-link">
                            <div data-i18n="Analytics">Analytics</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-receipt"></i>
                    <div data-i18n="Process">Process</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('/proses/scan') }}" class="menu-link">
                            <div data-i18n="Scan">Scan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/proses/manual') }}" class="menu-link">
                            <div data-i18n="Manual Input">Manual Input</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="{{ url('/verification') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-select-multiple"></i>
                    <div data-i18n="Verification">Verification</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('/approve') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-task"></i>
                    <div data-i18n="Approve">Approve</div>
                </a>
            </li>
            <li class="menu-item active">
                <a href="{{ url('/recap') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Recap">Recap</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Data Master</span>
            </li>
            <!-- User -->
            <li class="menu-item">
                <a href="{{ url('/user') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Users">Users</div>
                </a>
            </li>
        </ul>
    </aside>
@endsection
@section('navbar')
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 px-0 me-sm-6">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Recap</li>
                    </ol>
                </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('../assets/img/avatars/1.png') }}" alt
                                class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('../assets/img/avatars/1.png') }}" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-medium d-block">{{ Auth::user()->nama }}</span>
                                        <small class="text-muted">{{ Auth::user()->role }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('logout') }}">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col d-flex">
                        <h4 class="card-title">Table Users</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 ml-auto">
                        <div class="input-group mb-3 border rounded-2">
                            <span class="input-group-text border-none text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control border-none" id="searchInput_semua" placeholder="Cari ...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="min-height: 450px;">
                <div class="table-responsive text-nowrap" style="max-height: 470px; overflow-y: auto;">
                    <table class="table">
                        <thead class="sticky-top bg-white z-index-1">
                            <tr>
                                <th>DATE</th>
                                <th class="text-center">NUMBER PLATE</th>
                                <th class="text-center">TRUCK TYPES</th>
                                <th class="text-center">TYPE OF LOAD</th>
                                <th class="text-center">LOADING LOAD</th>
                                <th class="text-center">ENTIRE LOAD</th>
                                <th class="text-center">VERIFICATION</th>
                                <th class="text-center">APPROVE</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if (count($truck) === 0)
                            <tr>
                                <td colspan="8" class="text-center">
                                    <p class="mt-5">No Data</p>
                                </td>
                            </tr>                    
                            @else
                                @foreach ($truck as $key => $truck)
                                    <tr>
                                        <td>
                                            <p class="fw-light mb-0">{{ date('d/M/Y', strtotime($truck->created_at)) }}</p>
                                            <p class="fw-light">{{ date('H:i', strtotime($truck->created_at)) }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="fw-light">{{ $truck->plat_nomor }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="fw-light">{{ $truck->jenis_truck }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="fw-light">{{ $truck->muatan->jenis_muatan }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="fw-light">{{ $truck->muatan->berat_muatan }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="fw-light">{{ $truck->muatan->beban_seluruh }}</p>
                                        </td>
                                        <td class="text-center">
                                            @if ($truck->muatan->verifikasi_1 == 'sudah')
                                                <p>
                                                    <span class="tf-icons bx bx-check-circle text-success"></span>
                                                    <span class="badge rounded-pill bg-success">Verified</span>
                                                </p>
                                            @else
                                                <p>
                                                    <span class="tf-icons bx bx-x-circle text-danger"></span>
                                                    <span class="badge rounded-pill bg-danger">Not Verified</span>
                                                </p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($truck->muatan->verifikasi_2 == 'sudah')
                                                <p>
                                                    <span class="tf-icons bx bx-check-circle text-success"></span>
                                                    <span class="badge rounded-pill bg-success">Approved</span>
                                                </p>
                                            @else
                                                <p>
                                                    <span class="tf-icons bx bx-x-circle text-danger"></span>
                                                    <span class="badge rounded-pill bg-danger">Not Approved</span>
                                                </p>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </div>
@endsection
