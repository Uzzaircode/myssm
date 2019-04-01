@extends('pages')

@section('page-title')
Company Watch - Datakraf Solution Sdn. Bhd.
@endsection
@section('page-css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<section class="section-content padding-page-content" style="padding-bottom:100px !important;">
    <div class="container">
        <div class="row">
            <div class="col">
                <header class="section-heading">
                    <h2>Business Details > Company Watch</h2>
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
                <!-- watch button -->
                <div class="row">
                    <div class="col">
                        <div class="card text-white theme-bg-color">
                            <div class="card-body">
                                <h4 class="lead">
                                    Watch Datakraf Solution Sdn. Bhd. ? By watching this company you will be notified of
                                    this
                                    company changes.
                                </h4>
                                <div class="text-right">
                                    <button class="btn btn-warning font-weight-bold btn-lg">
                                        <i class="fas fa-eye"></i> Watch (MYR 15.30)
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5"></div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    List Of Companies You Watched
                                </h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Document Type</th>
                                            <th>Document Description</th>
                                            <th>Document Date</th>
                                            <th>Total of Pages</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
</section>
@endsection
@section('page-js')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable({
            "ajax": "{{asset('data/data.txt')}}"
        });
    });

</script>
@endsection
