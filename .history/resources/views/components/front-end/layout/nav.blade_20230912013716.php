<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/"><span><img src="img/core-img/logo.svg" alt="logo" /></span> Crown Agent</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>



        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto p-2">



                <x-front-end.layout.nav-item
                    nav="home"
                    title="Home"
                />

                <x-front-end.layout.nav-item
                    nav="about"
                    title="About Us"
                />

                {{-- <x-front-end.layout.nav-item
                    nav="services"
                    title="Our Services"
                /> --}}

                <x-front-end.layout.nav-item
                    nav="faq"
                    title="F.A.Q"
                />

                {{-- <x-front-end.layout.nav-item
                    nav="contact"
                    title="Contact Us"
                /> --}}

                {{-- <x-front-end.layout.nav-item
                    nav="credit-card"
                    title="Credit Card"
                /> --}}



                <x-front-end.layout.nav-item
                    nav="career"
                    title="Career"
                />

                {{-- initialize a component like the one above with nav=personal-overdraft and title=Personal Overdraft --}}
                <x-front-end.layout.nav-item
                    nav="personal-overdraft"
                    title="Personal Loan"
                />

                <x-front-end.layout.nav-item
                    nav="protect-yourself"
                    title="Protect Yourself"
                />




                {{-- <x-front-end.layout.nav-item>
                </x-front-end.layout.nav-item> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link" href="about-us.html">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Home</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index-demo-1.html">Home style 1</a>
                        <a class="dropdown-item" href="index-demo-2.html">Home style 2</a>
                        <a class="dropdown-item" href="index-demo-3.html">Home style 3</a>
                        <a class="dropdown-item" href="index-demo-4.html">Home style 4</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pricing.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact</a>
                </li> --}}
                <a href="{{ route('login') }}" class="btn login-btn mr-im">Log in</a>
                <a href="{{ route('register') }}" class="btn login-btn login-last">Signup
                </a>
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->
