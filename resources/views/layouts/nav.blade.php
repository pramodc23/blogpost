<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{ url('/') }}">Home</a></li>
								
								@if(Auth::user())
								<li><a href="{{ url('/myblog') }}">My Blogs</a></li>
								@endif

                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ url('/userlogin') }}">Login</a></li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li><a href="{{ url('/userregister') }}">Register</a></li>
                                    @endif
                                @else
                                <li class="has-children ">
                                    <a href="#">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown">
                                        <li class="active">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>                              
                                    </ul>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                 
                                @endguest
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<form action="#" class="search-form d-none d-lg-inline-block">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>