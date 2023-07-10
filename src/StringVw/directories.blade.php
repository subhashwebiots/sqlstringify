@extends('stv::layouts.master')
@section('title', 'Directories')
@section('content')
    <div class="wizard-step-2 d-block">
        <h6>{{ __('static.install.directories_fields_message') }}</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('static.install.directories') }}</th>
                        <th>{{ __('static.status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($directories as $directory => $isCheck)
                        <tr>
                            <td>{{ $directory }}</td>
                            <td class="icon-success">
                                <i class="fas fa-{{ $isCheck ? 'check' : 'times' }}"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="next-btn d-flex">
            <a href="{{ route('install.requirements') }}" class="btn btn-primary prev1"><i
                    class="far fa-hand-point-left me-2"></i> {{ __('static.status') }}</a>
            @if ($configured)
                <a href="{{ route('install.license') }}" class="btn btn-primary">{{ __('static.next') }} <i
                        class="far fa-hand-point-right ms-2"></i></a>
            @else
                <a href="javascript:void(0)" class="btn btn-primary disabled">{{ __('static.next') }}<i
                        class="far fa-hand-point-right ms-2"></i></a>
            @endif
        </div>
    </div>
@endsection
