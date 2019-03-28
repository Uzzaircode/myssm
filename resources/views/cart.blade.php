@extends('pages')
@section('page-title')
My Cart
@endsection
@section('content')
<div class="padding-page-content">
    <section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h2>My Cart</h2>
            </header>
            <div class="row">
                <main class="col-sm-9">
                    <div class="card">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="images/items/1.jpg"
                                                    class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">MYR 145</var>
                                            <small class="text-muted">(MYR5 each)</small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">                                        
                                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="images/items/2.jpg"
                                                    class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">MYR 35</var>
                                            <small class="text-muted">(MYR10 each)</small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        
                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="images/items/3.jpg"
                                                    class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">MYR 45</var>
                                            <small class="text-muted">(MYR15 each)</small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">                                       
                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- card.// -->

                </main> <!-- col.// -->
                <aside class="col-sm-3">
                    <dl class="dlist-align">
                        <dt>Total price: </dt>
                        <dd class="text-right">MYR 568</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Discount:</dt>
                        <dd class="text-right">MYR 658</dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>MYR 1,650</strong></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                        <aside class="aside"><img src="images/icons/pay-visa.png"></aside>
                        <div class="text-wrap small text-muted">
                            Pay 84.78 AED ( Save 14.97 AED )
                            By using ADCB Cards
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
                        <div class="text-wrap small text-muted">
                            Pay by MasterCard and Save 40%. <br>
                            Lorem ipsum dolor
                        </div>
                    </figure>

                </aside> <!-- col.// -->
            </div>

        </div>
    </section>
</div>
@endsection
