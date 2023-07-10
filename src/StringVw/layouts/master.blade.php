<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ __('static.chatloop') }}</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('install/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('install/css/vendors/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('install/css/vendors/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('install/css/app.css') }}">

    @yield('style')
</head>

<body>
    <div class="page-wrapper">
        <div class="wizard-bg">
            <div class="container">
                <div class="wizard-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="wizard-step-container">
                                <ul class="step-container">
                                    <li
                                        class="step-container step-1 @if (Route::is('install.requirements')) active @else disabled @endif">
                                        <div class="media">
                                            <div class="step-icon">
                                                <i class="fas fa-check"></i>
                                                <span>1</span>
                                            </div>
                                            <div class="media-body">
                                                <h5>{{ __('static.install.requirements') }}</h5>
                                                <h6>{{ __('static.install.php_extensions') }}</h6>
                                            </div>
                                            <div class="icon-center">
                                                <i data-feather="chevrons-right"></i>
                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="step-container step-2 @if (Route::is('install.directories')) active  @elseif(Route::is('install.license') || Route::is('install.database') || Route::is('install.completed')) disabled @endif">
                                        <div class="media">
                                            <div class="step-icon">
                                                <i class="fas fa-check"></i>
                                                <span>2</span>
                                            </div>
                                            <div class="media-body">
                                                <h5>{{ __('static.install.directories') }}</h5>
                                                <h6>{{ __('static.install.permissions') }}</h6>
                                            </div>
                                            <div class="icon-center">
                                                <i data-feather="chevrons-right"></i>
                                            </div>

                                        </div>
                                    </li>
                                    <li
                                        class="step-container step-3 @if (Route::is('install.license')) active  @elseif(Route::is('install.database') || Route::is('install.completed')) disabled @endif">
                                        <div class="media">
                                            <div class="step-icon">
                                                <i class="fas fa-check"></i>
                                                <span>3</span>
                                            </div>
                                            <div class="media-body">
                                                <h5>{{ __('static.install.license') }}</h5>
                                                <h6>{{ __('static.install.purchase_code') }}</h6>
                                            </div>
                                            <div class="icon-center">
                                                <i data-feather="chevrons-right"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="step-container step-4 @if (Route::is('install.database')) active  @elseif(Route::is('install.completed')) disabled @endif">
                                        <div class="media">
                                            <div class="step-icon">
                                                <i class="fas fa-check"></i>
                                                <span>4</span>
                                            </div>
                                            <div class="media-body">
                                                <h5>{{ __('static.install.configuration') }}</h5>
                                                <h6>{{ __('static.install.connection_details') }}</h6>
                                            </div>
                                            <div class="icon-center">
                                                <i data-feather="chevrons-right"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="step-container step-5 @if (Route::is('install.completed')) active @else '' @endif">
                                        <div class="media">
                                            <div class="step-icon">
                                                <i class="fas fa-check"></i>
                                                <span>5</span>
                                            </div>
                                            <div class="media-body">
                                                <h5>{{ __('static.install.complete') }}</h5>
                                                <h6>{{ __('static.install.installation_complete') }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="wizard-form-details">
                                    @include('stv::partials.session')
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('install/js/popper.min.js') }}"></script>
    <script src="{{ asset('install/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('install/js/feather-icon/feather.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
