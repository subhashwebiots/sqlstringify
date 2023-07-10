@extends(dbString('c3R2OjpzdG1z'))
@section('title', dbString('TGljZW5zZQ=='))
@section(dbString('Y29udGVudA=='))
   @rlStingy('IDxkaXYgY2xhc3M9IndpemFyZC1zdGVwLTMgZC1ibG9jayI+')
        <form action="{{ route('install.license.setup') }}" method=@rlStingy('UE9TVA==')>
            @csrf
            @method(dbString('UE9TVA=='))
           @rlStingy('IDxkaXYgY2xhc3M9InJvdyI+DQogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZGF0YWJhc2UtZmllbGQgY29sLW1kLTEyIj4NCiAgICAgICAgICAgICAgICAgICAgPGg2PkVudmF0byBVc2VybmFtZTwvaDY+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3cgbWItMyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+RW52YXRvIFVzZXJuYW1lPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                            <input type="text" name="envato_username" value="{{ old('envato_username') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('envato_username'))
                                <span class="text-danger">{{ $errors->first('envato_username') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KDQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3cgbWItMyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWwgY2xhc3M9ImNvbC1sZy0zIj5FbnZhdG8gUHVyY2hhc2UgQ29kZTxzcGFuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJjb2wtbGciPg==')
                            <input type="text" name="license" value="{{ old('license') ? old('license') : '' }}"
                                class="form-control" placeholder="" autocomplete="off">
                            @if ($errors->has('license'))
                                <span class="text-danger">{{ $errors->first('license') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZm9ybT4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4=')
            <a href="{{ route('install.license') }}" class="btn btn-primary">@rlStingy('PGkgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LWxlZnQgbWUtMiI+PC9pPg0KICAgICAgICAgICAgICAgIFByZXZpb3VzPC9hPg0KICAgICAgICAgICAgPGEgaHJlZj0iamF2YXNjcmlwdDp2b2lkKDApIiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5IHN1bWl0LWZvcm0iPk5leHQgPGkNCiAgICAgICAgICAgICAgICAgICAgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LXJpZ2h0IG1zLTIiPjwvaT48L2E+DQogICAgICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg==')
@endsection
@section('scripts')
    @rlStingy('PHNjcmlwdD4NCiAgICAgICAgJCgiLnN1bWl0LWZvcm0iKS5jbGljayhmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICQoImZvcm0iKS5zdWJtaXQoKTsNCiAgICAgICAgfSk7DQogICAgPC9zY3JpcHQ+')
@endsection
