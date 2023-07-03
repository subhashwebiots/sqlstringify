@extends('stv::layouts.master')
@section('title', 'License')
@section('content')
    <div class="wizard-step-3 d-block">
        <form action="{{ route('install.license.setup') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="database-field col-md-12">
                    <h6>{{ __('static.install.purchase_code_message') }}</h6>
                    <div class="form-group form-row mb-3">
                        <label class="col-lg-3">{{ __('static.install.purchase_code') }}<span
                                class="required-fill">*</span></label>
                        <div class="col-lg">
                            <input type="text" name="license" value="{{ old('license') ? old('license') : '' }}"
                                class="form-control" placeholder="" autocomplete="off">
                            @if ($errors->has('license'))
                                <span class="text-danger">{{ $errors->first('license') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="next-btn d-flex">
            <a href="{{ route('install.license') }}" class="btn btn-primary"><i class="far fa-hand-point-left me-2"></i>
                {{ __('static.previous') }}</a>
            <a href="javascript:void(0)" class="btn btn-primary sumit-form">{{ __('static.next') }} <i
                    class="far fa-hand-point-right ms-2"></i></a>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".sumit-form").click(function() {
            $("form").submit();
        });
    </script>
@endsection
