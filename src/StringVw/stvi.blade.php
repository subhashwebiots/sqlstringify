@extends('stv::stmv')
@section('title', 'Verify')
@section('content')
    <div>
        <form action="{{ route('install.verify') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="database-field col-md-12">
                    <h6>Please verify license & enter your administration details below.</h6>

                    <div class="form-group form-row">
                        <label>Envato Username<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="envato_username" value="{{ old('envato_username') }}" class="form-control"
                                autocomplete="off">
                            @if ($errors->has('envato_username'))
                                <span class="text-danger">{{ $errors->first('envato_username') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label>Purchase Code<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="license" value="{{ old('license') }}" class="form-control"
                                autocomplete="off">
                            @if ($errors->has('license'))
                                <span class="text-danger">{{ $errors->first('license') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group form-row">

                        <div>

                            <div class="form-group form-row">
                                <label>First Name <span class="required-fill">*</span></label>
                                <div>
                                    <input type="text" name="admin[first_name]" value="{{ old('admin.first_name') }}"
                                        class="form-control" autocomplete="off">
                                    @if ($errors->has('admin.first_name'))
                                        <span class="text-danger">{{ $errors->first('admin.first_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Last Name<span class="required-fill">*</span></label>
                                <div>
                                    <input type="text" name="admin[last_name]" value="{{ old('admin.last_name') }}"
                                        class="form-control" autocomplete="off">
                                    @if ($errors->has('admin.last_name'))
                                        <span class="text-danger">{{ $errors->first('admin.last_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Email <span class="required-fill">*</span></label>
                                <div>
                                    <input type="email" name="admin[email]" value="{{ old('admin.email') }}" class="form-control"
                                        autocomplete="off">
                                    @if ($errors->has('admin.email'))
                                        <span class="text-danger">{{ $errors->first('admin.email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Password  <span class="required-fill">*</span></label>
                                <div>
                                    <input type="password" name="admin[password]" class="form-control" autocomplete="off">
                                    @if ($errors->has('admin.password'))
                                        <span class="text-danger">{{ $errors->first('admin.password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Confirm Password <span class="required-fill">*</span></label>
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
                    <a href="javascript:void(0)" class="btn btn-primary sumit-form">Submit <i
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

