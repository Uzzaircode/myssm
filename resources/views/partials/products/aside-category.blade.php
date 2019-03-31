<div class="card card-filter">
    <article class="card-group-item">
        <header class="card-header">
            <h6 class="title">By Category</h6>
        </header>
        <div style="" class="filter-content collapse show" id="collapse22">
            <div class="card-body">
                <ul class="list-unstyled list-lg">
                    <li><a href="{{route('products')}}" class="{{ active('products') }}">Profile </a></li>
                    <li><a href="{{route('historical-financial')}}" class="{{ active('historical-financial') }}">Financial Historical Comparison</a> </li>
                    <li><a href="{{route('document-image')}}" class="{{ active('document-image') }}">Document & Form Images</a> </li>
                    <li><a href="{{route('company-watch')}}" class="{{ active('company-watch') }}">Company Watch</a></li>
                    <li><a href="{{route('company-charges')}}" class="{{ active('company-charges') }}">Company Charges</a></li>
                </ul>
            </div> <!-- card-body.// -->
        </div> <!-- collapse .// -->
    </article> <!-- card-group-item.// -->
</div> <!-- card.// -->
