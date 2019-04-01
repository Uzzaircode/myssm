@extends('pages')
@section('page-title')
MySSM - Login
@endsection
@section('content')
<div class="container padding-page-content">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="text-center">
                <img src="{{asset('images/login.svg')}}" alt="">
            </div>
        </div>
        <div class="col-5">
            <h4 class="text-left display-3">Welcome</h4>
            <p class="lead">Please enter your e-mail address and password to sign in.</p>
            <div class="mt-5"></div>
            <form>
                <div class="form-group">
                    <label class="form-control-label">E-mail Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-control-label">Password</label>
                    <input type="password" class="form-control" i>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Remember me
                    </label>
                </div>
                <div class="mt-3"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning font-weight-bold btn-lg btn-block">Sign In</button>
                    <button type="submit" class="btn theme-bg-color font-weight-bold text-white btn-lg btn-block">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
