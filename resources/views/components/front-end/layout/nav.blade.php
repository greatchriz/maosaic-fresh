<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/"><span><img src="img/core-img/logo.svg" alt="logo" /></span> Crown
            Agent</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto p-2">

                {{-- home --}}
                {{-- about --}}
                {{-- faq --}}
                {{-- career --}}
                {{-- personal-overdraft --}}
                {{-- protect-yourself --}}
                {{-- usa-transfer --}}


                {{-- home --}}
                <li class="nav-item m-1">
                    <x-front-end.layout.nav-item nav="home" title="Home" type="normal" :active="Request::path() == 'home'" />
                </li>

                {{-- about --}}
                <li class="nav-item m-1">
                    <x-front-end.layout.nav-item nav="about" title="About Us" type="normal" :active="Request::path() == 'about'" />
                </li>

                {{-- faq --}}
                <li class="nav-item m-1">
                    <x-front-end.layout.nav-item nav="faq" title="F.A.Q." type="normal" :active="Request::path() == 'faq'" />
                </li>

                {{-- career --}}
                <li class="nav-item m-1">
                    <x-front-end.layout.nav-item nav="career" title="Careers" type="normal" :active="Request::path() == 'career'" />
                </li>

                {{-- personal-overdraft --}}
                <li class="nav-item m-1">
                    <x-front-end.layout.nav-item nav="personal-overdraft" title="Personal Overdraft" type="normal" :active="Request::path() == 'personal-overdraft'" />
                </li>

                {{-- protect-yourself --}}
                <li class="nav-item m-1">
                    <x-front-end.layout.nav-item nav="protect-yourself" title="Protect Yourself" type="normal" :active="Request::path() == 'protect-yourself'" />
                </li>



                @auth
                    <x-front-end.layout.nav-item nav="dashboard" title="Dashboard" type="speclial" />
                @else
                    <x-front-end.layout.nav-item nav="login" title="Log In" type="speclial" />

                    <x-front-end.layout.nav-item nav="register" title="Sign Up" type="speclial" />
                @endauth
                {{-- nav-link  --}}

                {{-- <a href="{{ route('login') }}" class="btn login-btn mr-im">Log in</a>
                <a href="{{ route('register') }}" class="btn login-btn login-last">Signup
                </a> --}}
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->
