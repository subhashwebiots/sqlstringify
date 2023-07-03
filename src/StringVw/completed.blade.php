@extends('stv::layouts.master')
@section('title', 'Installation Completed')
@section('content')
    <div class="wizard-step-4 d-block">
        <div class="install-complete">
            <i data-feather="check-circle"></i>
            <h3>{{ __('static.install.install_successfull') }}</h3>
        </div>
        <div class="row goto-selection">
            <div class="col-sm-6">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <div class="selection-box">
                        <i data-feather="airplay"></i>
                        <h5 class="mt-2">{{ __('static.install.go_to_home') }}</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('login') }}" class="text-decoration-none">
                    <div class="selection-box">
                        <i data-feather="settings"></i>
                        <h5 class="mt-2">{{ __('static.install.login_to_administration') }}</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
