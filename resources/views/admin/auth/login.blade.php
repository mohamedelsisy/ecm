@extends('layaout.admin-login')

@section('content')

    <div class="container">
        <form method="post" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
                <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                @error('email')
                    {{ $message }}
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">الرقم السري</label>
                <input type="password"  name="password" class="form-control" id="exampleInputPassword1">

                @error('password')
                    {{ $message }}
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
        </form>



    </div>

@endsection
