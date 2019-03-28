@extends('pages')
@section('content')
<div class="padding-page-content">
    <section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h2>My Profile</h2>
            </header>
            <div class="row justify-content-md-center">
                <main class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://api.adorable.io/avatars/150/abott@adorable.png" alt=""
                                    class="rounded-circle text-center"
                                    style="border:3px solid #fff; box-shadow: 0 2px 4px 2px rgba(0,0,0,0.3),inset 0 5px 5px rgba(0,0,0,0.5)">
                                <p class="display-4 mt-3" style="font-size:1.6rem">Muhammad Uzzair Baharudin</p>
                            </div>
                            <hr>
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">My Purchase</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">Downloadables</a>
                                </li>
                            </ul>
                            <hr>
                            <div class="mt-4"></div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <form>
                                        <div class="form-row">
                                            <div class="col mb-3">
                                                <label for="validationDefault01">First Name</label>
                                                <input type="text" class="form-control" id="validationDefault01"
                                                    placeholder="First name" value="Mark" required>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="validationDefault02">Last name</label>
                                                <input type="text" class="form-control" id="validationDefault02"
                                                    placeholder="Last name" value="Otto" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col mb-3">
                                                <label for="validationDefault01">E-mail Address</label>
                                                <input type="text" class="form-control" id="validationDefault01"
                                                    placeholder="" value="uzzairwork@gmail.com" required>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="validationDefault02">Username</label>
                                                <input type="text" class="form-control" id="validationDefault02"
                                                    placeholder="" value="UzzairBaharudin" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col mb-3">
                                                <label for="validationDefault01">Password</label>
                                                <input type="password" class="form-control" id="validationDefault01"
                                                     placeholder="Leave this blank if you dont want to change" value="" required>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="validationDefault02">Password Confirmtation</label>
                                                <input type="password" class="form-control" id="validationDefault02"
                                                    placeholder="Leave this blank if you dont want to change" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="text-right">
                                                        <button class="btn btn-primary text-right" type="submit">Update
                                                            Profile</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Purchase
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Downloadables
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
