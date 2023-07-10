@extends(dbString('c3R2OjpzdG1z'))
@section('title', dbString('RGlyZWN0b3JpZXM='))
@section(dbString('Y29udGVudA=='))
    @rlStingy('PGRpdiBjbGFzcz0id2l6YXJkLXN0ZXAtMiBkLWJsb2NrIj4NCiAgICAgICAgPGg2PlBsZWFzZSBlbnRlciB5b3VyIGFkbWluaXN0cmF0aW9uIGRldGFpbHMgYmVsb3cuPC9oNj4NCiAgICAgICAgPGRpdiBjbGFzcz0idGFibGUtcmVzcG9uc2l2ZSI+DQogICAgICAgICAgICA8dGFibGUgY2xhc3M9InRhYmxlIj4NCiAgICAgICAgICAgICAgICA8dGhlYWQ+DQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5QbGVhc2UgbWFrZSBzdXJlIHRoZSBQSFAgZXh0ZW5zaW9ucyBsaXN0ZWQgYmVsb3cgYXJlIGluc3RhbGxlZDwvdGg+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGg+c3RhdHVzPC90aD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICA8L3RoZWFkPg0KICAgICAgICAgICAgICAgIDx0Ym9keT4=')
                    @foreach ($directories as $directory => $isCheck)
                        @rlStingy('PHRyPg==')
                            <td>{{ $directory }}</td>
                            @rlStingy('PHRkIGNsYXNzPSJpY29uLXN1Y2Nlc3MiPg==')
                                <i class="fas fa-{{ $isCheck ? 'check' : 'times' }}"></i>
                            @rlStingy('PC90ZD4=')
                        @rlStingy('PHRyPg==')
                    @endforeach
               @rlStingy('IDwvdGJvZHk+DQogICAgICAgICAgICA8L3RhYmxlPg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4=')
            <a href="{{ route('install.requirements') }}" class="btn btn-primary prev1"><i
                    class="far fa-hand-point-left me-2"></i> status</a>
            @if ($configured)
                <a href="{{ route('install.license') }}" class="btn btn-primary">Next <i
                        class="far fa-hand-point-right ms-2"></i></a>
            @else
                <a href="javascript:void(0)" class="btn btn-primary disabled">{{ __('static.next') }}<i
                        class="far fa-hand-point-right ms-2"></i></a>
            @endif
        @rlStingy('PC9kaXY+DQogICAgPC9kaXY+')
@endsection
