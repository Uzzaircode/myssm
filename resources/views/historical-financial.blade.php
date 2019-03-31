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
                    <h2>Business Details > Financial Historical Comparison</h2>
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
                <div class="container">
                    <div class="row-sm">
                        <div class="col-5">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="title">Financial History Comparison</h6>
                                </div>
                                @php
                                $currently_selected = 2010;
                                $earliest_year = 2010;
                                $latest_year = date('Y');
                                @endphp
                                <div class="card-body">
                                    <form class="">
                                        <div class="form-group">
                                            <label for="">Year</label>
                                            <select name="" id="" class="form-control">
                                                @foreach(range($earliest_year, $latest_year) as $i)
                                                <option value="">{{$i}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">With Year</label>
                                            <select name="" id="" class="form-control">
                                                @foreach(range($earliest_year, $latest_year) as $i)
                                                <option value="">{{$i}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Get CTC copy for MYR 5.00
                                            </label>
                                        </div>
                                        <div class="mt-3"></div>
                                        <div class="form-group">
                                            <button class="btn btn-warning font-weight-bold">
                                                Add to cart
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-7">
                            <div class="text-center p-4">
                                <img src="{{asset('images/financial-comparison.svg')}}" alt="" class="img-fluid">
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
</section>
@endsection
