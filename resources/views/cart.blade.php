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
                                    <th scope="col" width="50px">Quantity</th>
                                    <th scope="col">Price (MYR)</th>
                                    <th scope="col">Service Charge (MYR)</th>
                                    <th scope="col">CTC Service Charge (MYR)</th>
                                    <th scope="col" class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Business Profile CTC </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Entity/Business Name: </dt>
                                                    <dd>ABC Sdn. Bhd.</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Language: </dt>
                                                    <dd>English</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">15.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">5.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">5.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">CTC Certificate of Change of Name</h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Entity/Business Name: </dt>
                                                    <dd>ABC Sdn. Bhd.</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Language: </dt>
                                                    <dd>English</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">15.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">5.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">5.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">

                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">CTC Financial Historical Comparison</h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Entity/Business Name: </dt>
                                                    <dd>ABC Sdn. Bhd.</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Language: </dt>
                                                    <dd>English</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="1">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">15.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">5.00</var>

                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">5.00</var>

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
                        <div class="form-group">
                            <label for="">Payment Method</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pay By Credit Card</option>
                                <option value="">Online Banking</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Online Banking</label>
                            <select name="" id="" class="form-control">
                                <option value="">Maybank2U</option>
                                <option value="">CIMB Click</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Billing Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Your E-mail Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Customer Ref.</label>
                            <input type="text" class="form-control">
                        </div>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Total Price: </dt>
                        <dd class="text-right">MYR 75.00</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Service Tax: </dt>
                        <dd class="text-right">MYR 0.60</dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>MYR 75.60</strong></dd>
                    </dl>
                    <hr>
                    <button class="btn btn-block btn-warning font-weight-bold">Proceed To Checkout</button>

                </aside> <!-- col.// -->
            </div>

        </div>
    </section>
</div>
@endsection
