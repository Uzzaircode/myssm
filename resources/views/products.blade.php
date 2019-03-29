@extends('pages')
@section('page-title')
    Business Details - Datakraf Solution Sdn. Bhd.
@endsection
@section('content')
<section class="section-content padding-page-content" style="padding-bottom:100px !important;">
    <div class="container">
        <div class="row">
            <div class="col">
                <header class="section-heading">
                    <h2>Business Details</h2>
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
            </aside> <!-- col.// -->
            <main class="col-9">
                @include('partials.products.product-grid')
            </main>
        </div>

    </div>
</section>
@endsection
