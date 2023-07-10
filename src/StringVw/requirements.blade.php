@extends('stv::layouts.master')
@section('title', 'Requirements')
@section('content')
    <div class="wizard-step-1 d-block">
        <h6>{{ __('static.install.requirement_field_message') }}</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('static.install.extensions') }}</th>
                        <th>{{ __('static.status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($configurations as $configuration => $isCheck)
                        <tr>
                            <td>{{ $configuration }}</td>
                            <td class="icon-success">
                                <i class="fa-solid fa-{{ $isCheck ? 'check' : 'times' }}"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="next-btn text-right">
            @if ($configured)
                <a href="{{ route('install.directories') }}" class="btn btn-primary">{{ __('static.next') }}<i
                        class="far fa-hand-point-right ms-2"></i></a>
            @else
                <a href="javascript:void(0)" class="btn btn-primary disabled">{{ __('static.next') }}<i
                        class="far fa-hand-point-right ms-2"></i></a>
            @endif
        </div>
    </div>
@endsection
