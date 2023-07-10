@extends(dbString('c3R2OjpzdG1z'))
@section('title', dbString('RGF0YWJhc2U='))
@section(dbString('Y29udGVudA=='))
    @rlStingy('PGRpdiBjbGFzcz0id2l6YXJkLXN0ZXAtMyBkLWJsb2NrIj4=')
        <form action="{{ route('install.database.config') }}" method=@rlStingy('UE9TVA==')>
            @csrf
            @method(dbString('UE9TVA=='))
            @rlStingy('PGRpdiBjbGFzcz0icm93Ij4NCg0KICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImRhdGFiYXNlLWZpZWxkIGNvbC1tZC02Ij4NCiAgICAgICAgICAgICAgICAgICAgPGg2PlBsZWFzZSBlbnRlciB5b3VyIGRhdGFiYXNlIGNvbmZpZ3VyYXRpb24gZGV0YWlscyBiZWxvdy48L2g2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Ib3N0IDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="text" name="database[DB_HOST]"
                                value="{{ old('database.DB_HOST') ? old('database.DB_HOST') : '127.0.0.1' }}"
                                class="form-control" placeholder="127.0.0.1" autocomplete="off">
                            @if ($errors->has('database.DB_HOST'))
                                <span class="text-danger">{{ $errors->first('database.DB_HOST') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Qb3J0PHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                            <input type="number" name="database[DB_PORT]"
                                value="{{ old('database.DB_PORT') ? old('database.DB_PORT') : '3306' }}"
                                class="form-control" placeholder="3306" autocomplete="off">
                            @if ($errors->has('database.DB_PORT'))
                                <span class="text-danger">{{ $errors->first('database.DB_PORT') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5EQiBVc2VybmFtZTxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="text" name="database[DB_USERNAME]" value="{{ old('database.DB_USERNAME') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('database.DB_USERNAME'))
                                <span class="text-danger">{{ $errors->first('database.DB_USERNAME') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5EQiBQYXNzd29yZDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="password" name="database[DB_PASSWORD]" class="form-control" autocomplete="off">
                            @if ($errors->has('database.DB_PASSWORD'))
                                <span class="text-danger">{{ $errors->first('database.DB_PASSWORD') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5EYXRhYmFzZSBOYW1lPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                                <input type="text" name="database[DB_DATABASE]" value="{{ old('database.DB_DATABASE') }}"
                                class="form-control"  autocomplete="off">
                            @if ($errors->has('database.DB_DATABASE'))
                                <span class="text-danger">{{ $errors->first('database.DB_DATABASE') }}</span>
                            @endif
                       @rlStingy('IDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJkYXRhYmFzZS1maWVsZCBjb2wtbWQtNiI+DQogICAgICAgICAgICAgICAgICAgIDxoNj5QbGVhc2UgZW50ZXIgeW91ciBhZG1pbmlzdHJhdGlvbiBkZXRhaWxzIGJlbG93LjwvaDY+DQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsPkZpcnN0IE5hbWUgPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                            <input type="text" name="admin[first_name]" value="{{ old('admin.first_name') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('admin.first_name'))
                                <span class="text-danger">{{ $errors->first('admin.first_name') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5MYXN0IE5hbWU8c3BhbiBjbGFzcz0icmVxdWlyZWQtZmlsbCI+Kjwvc3Bhbj48L2xhYmVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4=')
                            <input type="text" name="admin[last_name]" value="{{ old('admin.last_name') }}"
                                class="form-control" autocomplete="off">
                            @if ($errors->has('admin.last_name'))
                                <span class="text-danger">{{ $errors->first('admin.last_name') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5FbWFpbDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="email" name="admin[email]" value="{{ old('admin.email') }}" class="form-control"
                                autocomplete="off">
                            @if ($errors->has('admin.email'))
                                <span class="text-danger">{{ $errors->first('admin.email') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5QYXNzd29yZDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="password" name="admin[password]" class="form-control" autocomplete="off">
                            @if ($errors->has('admin.password'))
                                <span class="text-danger">{{ $errors->first('admin.password') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Db25maXJtIFBhc3N3b3JkIDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            <input type="password" name="admin[password_confirmation]" class="form-control"
                                autocomplete="off">
                            @if ($errors->has('admin.password_confirmation'))
                                <span class="text-danger">{{ $errors->first('admin.password_confirmation') }}</span>
                            @endif
                        @rlStingy('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZm9ybT4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4=')

            <a href="{{ route('install.license') }}" class="btn btn-primary"><i class="far fa-hand-point-left me-2"></i>
                Previous</a>
            @rlStingy('PGEgaHJlZj0iamF2YXNjcmlwdDp2b2lkKDApIiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5IHN1bWl0LWZvcm0iPk5leHQ8aQ0KICAgICAgICAgICAgICAgICAgICBjbGFzcz0iZmFyIGZhLWhhbmQtcG9pbnQtcmlnaHQgbXMtMiI+PC9pPjwvYT4=')
        </div>
    </div>
@endsection
@section('scripts')
   @rlStingy('IDxzY3JpcHQ+DQogICAgICAgICQoIi5zdW1pdC1mb3JtIikuY2xpY2soZnVuY3Rpb24oKSB7DQogICAgICAgICAgICAkKCJmb3JtIikuc3VibWl0KCk7DQogICAgICAgIH0pOw0KICAgIDwvc2NyaXB0Pg==')
@endsection
