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
            <h4 class="text-left display-3">Sign Up</h4>
            <p class="lead">You're just one step away from actionable insights.</p>
            <div class="mt-5"></div>
            <form>
                <div class="form-row">
                    <div class="col mb-3">
                        <label for="validationDefault01">First Name</label>
                        <input type="text" class="form-control" id="validationDefault01" 
                             required>
                    </div>
                    <div class="col mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02"
                             required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <label for="validationDefault01">E-mail Address</label>
                        <input type="text" class="form-control" id="validationDefault01" placeholder=""
                            required>
                    </div>
                    <div class="col mb-3">
                        <label for="validationDefault02">Username</label>
                        <input type="text" class="form-control" id="validationDefault02" placeholder=""
                             required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-3">
                        <label for="validationDefault01">Password</label>
                        <input type="password" class="form-control" id="validationDefault01"
                             value="" required>
                    </div>
                    <div class="col mb-3">
                        <label for="validationDefault02">Password Confirmtation</label>
                        <input type="password" class="form-control" id="validationDefault02"
                            value="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <button class="btn btn-warning btn-block font-weight-bold" type="submit">Sign Up</button>
                            <a class="btn theme-bg-color btn-block font-weight-bold text-white" href="{{route('login')}}">Already registered?</a>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
