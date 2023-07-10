@extends(dbString('c3R2OjpzdG12'))
@section('title', dbString('VmVyaWZ5'))
@section(dbString('Y29udGVudA=='))
    <div>
        <form action="{{ route('install.unblock') }}" method=@rlStingy('UE9TVA==')>
            @csrf
            @method(dbString('UE9TVA=='))
           @rlStingy('IDxkaXYgY2xhc3M9InJvdyI+DQogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZGF0YWJhc2UtZmllbGQgY29sLW1kLTEyIj4NCiAgICAgICAgICAgICAgICAgICAgPGg2PllvdXIgQ3VycmVudCBsaWNlbnNlIGlzIEJsb2NrZWQuIFBsZWFzZSBlbnRlciBuZXcgbGljZW5zZSBkZXRhaWxzIGJlbG93IGZvciBhY3RpdmUgbGljZW5zZS48L2g2Pg0KDQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsPkVudmF0byBVc2VybmFtZTxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="text" name="envato_username" value="{{ old('envato_username') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('envato_username'))
                                <span class="text-danger">{{ $errors->first('envato_username') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KDQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsPkxpY2Vuc2UgQ29kZTxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="text" name="license" value="{{ old('license') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('license'))
                                <span class="text-danger">{{ $errors->first('license') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZm9ybT4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4NCiAgICAgICAgICAgIDxhIGhyZWY9ImphdmFzY3JpcHQ6dm9pZCgwKSIgY2xhc3M9ImJ0biBidG4tcHJpbWFyeSBzdW1pdC1mb3JtIj5BY3RpdmUgPGkNCiAgICAgICAgICAgICAgICAgICAgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LXJpZ2h0IG1zLTIiPjwvaT48L2E+DQogICAgICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg==')
@endsection
@section('scripts')
    @rlStingy('PHNjcmlwdD4NCiAgICAgICAgJCgiLnN1bWl0LWZvcm0iKS5jbGljayhmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICQoImZvcm0iKS5zdWJtaXQoKTsNCiAgICAgICAgfSk7DQogICAgPC9zY3JpcHQ+')
@endsection
