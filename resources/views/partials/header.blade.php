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

</header> <!-- section-header.// -->
