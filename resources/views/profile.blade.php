@extends('pages')
@section('page-title')
My Account
@endsection
@section('content')
<div class="padding-page-content">
    <section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h2>My Account</h2>
            </header>
            <div class="row justify-content-md-center">
                <main class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('images/avatars/avatar.jpg')}}" alt=""
                                    class="rounded-circle text-center"
                                    style="border:3px solid #fff; box-shadow: 0 2px 4px 2px rgba(0,0,0,0.3),inset 0 5px 5px rgba(0,0,0,0.5);width:150px;background-size: cover;">
                                <p class="display-4 mt-3" style="font-size:1.6rem">Muhammad Uzzair Baharudin</p>
                            </div>
                            <hr>
                            @include('partials.profiles.nav')
                            <hr>
                            <div class="mt-4"></div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <p class="text-muted">This section contains your profile information. You
                                        can update
                                        your profile here.</p>
                                    @include('partials.profiles.form')
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include('partials.purchases.index')
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
    </section>
</div>
@endsection
