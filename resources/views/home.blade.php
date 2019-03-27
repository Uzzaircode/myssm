@extends('master')

@section('content')
<section id="intro" class="section-intro header-background d-flex flex-column" style="height:100vh">
    <div class="container my-auto">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <header class="intro-wrap text-white">
                    <h2 class="display-3">Not just data. Truth.</h2>
                    <p class="lead">MySSM helps you get the data you need. By making use of our application and
                        extensive network of partners we can deliver any business data that you need.</p>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg"
                            aria-label="Text input with dropdown button"
                            placeholder="Search for Company, Business or Audit Firm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">All
                                Entities</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Company</a>
                                <a class="dropdown-item" href="#">Business</a>
                                <a class="dropdown-item" href="#">Audit Firm</a>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3"><i class="fas fa-play-circle"></i> See How It Works</p>

                </header> <!-- intro-wrap .// -->
            </div> <!-- col.// -->
            <div class="col-sm-6 text-right">
                <img src="{{asset('images/building.svg')}}" class="img-fluid my-5 float" width="500">
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION FEATURES ========================= -->
<section id="features" class="section-features padding-y-lg">
    <div class="container">
        <header class="section-heading text-left">
            <h1 class="display-4">It's Easier With MySSM</h1>
            <p class="display-4" style="font-size:2.0rem;">With our ecosystems of data and integrations - <br>you have a
                single platform to obtain valid business data.</p>
        </header><!-- sect-heading -->
    </div>
    <div class="pt-5"></div>
    <div class="pt-5"></div>
    
    <div class="container">
        <div class="row">
            <aside class="col">
                <figure class="itembox text-center">
                    <img src="{{asset('images/register.svg')}}" alt="" class="float" height="250px">
                    <figcaption class="text-wrap mt-5">
                        <h4 class="title">1. Register Your Account</h4>
                        <p>Sign up your account with us.</p>
                    </figcaption>
                </figure> <!-- iconbox // -->
            </aside> <!-- col.// -->
            <aside class="col">
                <figure class="itembox text-center">
                    <img src="{{asset('images/search.svg')}}" alt="" class="float" height="250px">
                    <figcaption class="text-wrap mt-5">
                        <h4 class="title">2. Search The Company</h4>
                        <p>Search through our database for the company data.</p>
                    </figcaption>
                </figure> <!-- iconbox // -->
            </aside> <!-- col.// -->
            <aside class="col">
                <figure class="itembox text-center">
                    <img src="{{asset('images/payment.svg')}}" alt="" class="float" height="250px">
                    <figcaption class="text-wrap mt-5">
                        <h4 class="title">3. Make Payment</h4>
                        <p>One last stop before obtaining the data.</p>
                    </figcaption>
                </figure> <!-- iconbox // -->
            </aside> <!-- col.// -->
            <aside class="col">
                <figure class="itembox text-center">
                    <img src="{{asset('images/download.svg')}}" alt="" class="float" height="250px">
                    <figcaption class="text-wrap mt-5">
                        <h4 class="title">4. Download The Documents</h4>
                        <p>One last stop before obtaining the data.</p>
                    </figcaption>
                </figure> <!-- iconbox // -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div>
</section>
<section id="features" class="section-features padding-y-lg">
    <div class="container">
        <header class="section-heading text-left">
            <h1 class="display-4">We Offer Wide Range Of Services</h1>
            <p class="display-4" style="font-size:2.0rem;">
                Your one stop solution for business datasets.
            </p>
        </header><!-- sect-heading -->
    </div>
    <div class="pt-5"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-unstyled services-list">
                    <li>
                        <h4>
                            Particular Of Company Secretary
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Audit Firm Profile
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Company Profile
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Business Profile
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Certificates Of Incorporation/Registration
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Business Certificates
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Document Images
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Certificate Of Change Of Names
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Certificates Of Conversion
                        </h4>
                    </li>                    
                    <li>
                        <h4>
                            Particular Of Registered Address
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Particular Of Directors/Officers
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Financial Comparison
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Particular Of Shareholders
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Particular Of Share Capital
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
