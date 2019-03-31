@extends('pages')

@section('page-title')
Company Charges - Datakraf Solution Sdn. Bhd.
@endsection

@section('content')
<section class="section-content padding-page-content" style="padding-bottom:100px !important;">
    <div class="container">
        <div class="row">
            <div class="col">
                <header class="section-heading">
                    <h2>Business Details > Company Charges</h2>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="display-4">Datakraf Solution Sdn. Bhd.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <aside class="col-3">
                @include('partials.products.aside-category')
            </aside>
            <main class="col-9">
                <div class="d-flex align-items-center flex-column justify-content-center">

                    <img src="{{asset('images/database.svg')}}" alt="" width="250px" class="rotate m-5">
                    <h5>Sorry, no results found in our database.</h5>

                </div>
            </main>
        </div>

    </div>
</section>
@endsection
