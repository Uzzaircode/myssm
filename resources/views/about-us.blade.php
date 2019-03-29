@extends('pages')
@section('page-title')
About Us
@endsection
@section('content')
<div class="padding-page-content">
    <section class="section-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center">
                        OUR MISSION IS TO HELP THE WORLD LEARN FROM ITS DATA
                    </h1>
                    <p class="text-center font-title">
                        We've built the only user analytics platform that lets everyone in your organization
                        deeply understand each user. Get instant answers and automatic insights so
                        you can take intelligent actions that improve your customer experience.
                    </p>
                </div>
            </div>
            <div class="mt-5"></div>
            <div class="row justify-content-center">
                <div class="col-7">
                    <div class="container globe-list">
                        <div class="row justify-content-start ">
                            <div class="col-6">
                                <h5 id="elem0" class="float">1 Billion Data Points Every Year</h5>
                            </div>
                            <div class="col-6">
                                <h5 id="elem1" class="float">99.9% Uptime</h5>
                            </div>
                        </div>
                        <div class="mt-3"></div>
                        <div class="row justify-content-center">
                            <div class="col-3">
                            </div>
                            <div id="elem3" class="col-9">
                                <h5 class="float">Nearly 7 Million Customers Countrywide</h5>
                            </div>

                        </div>
                        <div class="mt-3"></div>
                        <div class="row justify-content-end">
                            <div class="col-5">
                                <h5 id="elem2" class="float">SOC2 Compliant Datacenters</h5>
                            </div>

                            <div class="col-7">
                                <h5 id="elem6" class="float">50,000 Events Scanned Per Query</h5>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('images/globe.svg')}}" alt="" class="" style="">
                </div>
            </div>
        </div>
    </section>
    <div class="mt-5"></div>
    <section class="section-content theme-bg-color">
        <div class="container padding-page-content">
            <div class="row">
                <div class="col-5">
                    <p class="display-4 text-white">We have offices <br> all over the globe</p>
                </div>
            </div>
            <div class="mt-5"></div>
            <div class="row">
                <div class="col-4">
                    <h4 class="text-white text-capitalize">our office addresses</h4>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
@section('page-css')
<style>
    .globe-list h5:before {
        background-image: url('../images/services/list-icon.svg');
        background-size: 20px 20px;
        display: inline-flex;
        width: 20px;
        height: 20px;
        content: "";
        margin-right: 5px;
    }

</style>
@endsection
