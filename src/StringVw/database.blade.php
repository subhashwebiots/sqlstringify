@extends('stv::layouts.master')
@section('title', 'Database')
@section('content')
    <div class="wizard-step-3 d-block">
        <form action="{{ route('install.database.config') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">

                <div class="database-field col-md-6">
                    <h6>{{ __('static.install.db_configure_message') }}</h6>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.host') }} <span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="database[DB_HOST]"
                                value="{{ old('database.DB_HOST') ? old('database.DB_HOST') : '127.0.0.1' }}"
                                class="form-control" placeholder="127.0.0.1" autocomplete="off">
                            @if ($errors->has('database.DB_HOST'))
                                <span class="text-danger">{{ $errors->first('database.DB_HOST') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.port') }}<span class="required-fill">*</span></label>
                        <div>
                            <input type="number" name="database[DB_PORT]"
                                value="{{ old('database.DB_PORT') ? old('database.DB_PORT') : '3306' }}"
                                class="form-control" placeholder="3306" autocomplete="off">
                            @if ($errors->has('database.DB_PORT'))
                                <span class="text-danger">{{ $errors->first('database.DB_PORT') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.db_username') }}<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="database[DB_USERNAME]" value="{{ old('database.DB_USERNAME') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('database.DB_USERNAME'))
                                <span class="text-danger">{{ $errors->first('database.DB_USERNAME') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.db_password') }} <span class="required-fill">*</span></label>
                        <div>
                            <input type="password" name="database[DB_PASSWORD]" class="form-control" autocomplete="off">
                            @if ($errors->has('database.DB_PASSWORD'))
                                <span class="text-danger">{{ $errors->first('database.DB_PASSWORD') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.db_name') }}<span class="required-fill">*</span></label>
                        <div>
                                <input type="text" name="database[DB_DATABASE]" value="{{ old('database.DB_DATABASE') }}"
                                class="form-control"  autocomplete="off">
                            @if ($errors->has('database.DB_DATABASE'))
                                <span class="text-danger">{{ $errors->first('database.DB_DATABASE') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="database-field col-md-6">
                    <h6>{{ __('static.install.administration_details_message') }}</h6>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.first_name') }} <span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="admin[first_name]" value="{{ old('admin.first_name') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('admin.first_name'))
                                <span class="text-danger">{{ $errors->first('admin.first_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.install.last_name') }}<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="admin[last_name]" value="{{ old('admin.last_name') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('admin.last_name'))
                                <span class="text-danger">{{ $errors->first('admin.last_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.email') }}<span class="required-fill">*</span></label>
                        <div>
                            <input type="email" name="admin[email]" value="{{ old('admin.email') }}" class="form-control"
                                autocomplete="off">
                            @if ($errors->has('admin.email'))
                                <span class="text-danger">{{ $errors->first('admin.email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.password') }} <span class="required-fill">*</span></label>
                        <div>
                            <input type="password" name="admin[password]" class="form-control" autocomplete="off">
                            @if ($errors->has('admin.password'))
                                <span class="text-danger">{{ $errors->first('admin.password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>{{ __('static.confirm_password') }} <span class="required-fill">*</span></label>
                        <div>
                            <input type="password" name="admin[password_confirmation]" class="form-control"
                                autocomplete="off">
                            @if ($errors->has('admin.password_confirmation'))
                                <span class="text-danger">{{ $errors->first('admin.password_confirmation') }}</span>
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
