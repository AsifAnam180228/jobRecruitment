<header id="header" class="fixed-top">
    <div class="container" >

        <div class="logo float-left">
            <h1 class="text-light">Job Recruitment System</h1>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/customer">Jobs</a></li>
                <li><a href="/contact">Career Advice</a></li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-45 py-45 sm:block">
                            @auth
                                <form class="nav-link" method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-45 underline">Login</a>
                            </li><li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-2 text-sm text-gray-45 underline">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>
