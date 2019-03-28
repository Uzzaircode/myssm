<header class="section-header header-background">
    <nav class="navbar navbar-landing navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand mr-auto" href="{{route('home')}}">
                <img class="logo" src="{{asset('images/myssm-logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-white" href="#intro">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-white" href="#features">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-white" href="#content">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll text-white" href="{{route('profile')}}">My Account</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('cart')}}" id="cart" class="nav-link">
                            My Cart <span class="badge">3</span>
                        </a>                       
                    </li>
                </ul>
            </div>
        </div> <!-- container //  -->           
    </nav>
    <div class="">
            <div class="shopping-cart">
                <div class="shopping-cart-header">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
                    <div class="shopping-cart-total">
                        <span class="lighter-text">Total:</span>
                        <span class="main-color-text">$2,229.97</span>
                    </div>
                </div>
                <!--end shopping-cart-header -->

                <ul class="shopping-cart-items">
                    <li class="clearfix">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg"
                            alt="item1" />
                        <span class="item-name">Sony DSC-RX100M III</span>
                        <span class="item-price">$849.99</span>
                        <span class="item-quantity">Quantity: 01</span>
                    </li>

                    <li class="clearfix">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg"
                            alt="item1" />
                        <span class="item-name">KS Automatic Mechanic...</span>
                        <span class="item-price">$1,249.99</span>
                        <span class="item-quantity">Quantity: 01</span>
                    </li>

                    <li class="clearfix">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg"
                            alt="item1" />
                        <span class="item-name">Kindle, 6" Glare-Free To...</span>
                        <span class="item-price">$129.99</span>
                        <span class="item-quantity">Quantity: 01</span>
                    </li>
                </ul>

                <a href="#" class="button">Checkout</a>
                <a href="#" class="button" id="close-cart">Close</a>
            </div>
        </div>

</header> <!-- section-header.// -->
