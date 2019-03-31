@extends('pages')
@section('page-title')
About Us
@endsection
@section('content')
<section class="section-content padding-page-content" style="padding-bottom:100px !important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="text-center">
                    OUR MISSION IS TO HELP THE WORLD LEARN FROM ITS DATA
                </h1>
                <p class="text-center font-title">
                    We've built the only user analytics platform that lets everyone in your organization
                    deeply understand each business entity. Get instant answers and insights so
                    you can take intelligent actions that improve your business experience.
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
<section class="section-content padding-page-content theme-bg-color">
    <div class="container" style="padding-bottom:0 !important">
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
        <div class="mt-5"></div>
        <div class="row">
            <div class="col">
                <h5 class="text-white">Corporate Office</h5>
                <p class="text-white">Suite 7-1, Binjai 8, Lorong Binjai Off Jalan Binjai,<br> KLCC, 50450, Kuala
                    Lumpur, Malaysia.</p>
            </div>
            <div class="col">
                <h5 class="text-white">Operation Office</h5>
                <p class="text-white">
                    C-16-05, Sunway Nexis, Jalan PJU 5/1, Kota Damansara,<br> 47810, Petaling Jaya, Selangor, Malaysia.
                </p>
            </div>
            <div class="col">
                <h5 class="text-white">Northern Region Office</h5>
                <p class="text-white">
                    No.18-A-1, Wisma BJM, Lebuhraya Darul Aman,<br> 05100, Alor Setar, Kedah Darul Aman, Malaysia</p>
            </div>
            <div class="col">
                <h5 class="text-white">East Coast Office</h5>
                <p class="text-white">
                    B1-5A, Bangunan PMINT, Jalan Kuantan Dungun, Bandar Baru Kerteh, 24300, Kerteh, Terengganu,
                    Malaysia.</p>
            </div>
            <div class="col">
                <h5 class="text-white">New Zealand Office</h5>
                <p class="text-white">
                    31, Mary Dreaver Street, New Windsor, <br>Auckland 0600, New Zealand.<br> www.datakraf.co.nz</p>
            </div>
        </div>
    </div>
</section>
<section class="section-content bg-white" style="padding:100px 0">
    <div class="container">
        <div class="row mx-auto my-auto">
            <div class="col-9">
                <p class="display-4" style="font-size:2.0rem !important;">
                    Let's talk about how we can help you to obtain better data.
                </p>
            </div>
            <div class="col-3">
                <button class="btn btn-warning btn-lg" style="width:100%">
                    Contact Us
                </button>
            </div>
        </div>
    </div>
</section>
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
