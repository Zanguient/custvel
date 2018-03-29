<nav class="uk-navbar">

	<div class="uk-navbar-left">
		<!-- Branding Image -->
		<a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
			{{ config('app.name', 'Laravel') }}
		</a>
	</div>

	<div class="uk-navbar-right">
		<ul class="uk-navbar-nav">
			@if (Auth::guest())
				<li><a href="{{ route('frontend.login') }}">Login</a></li>
				<li><a href="{{ route('frontend.register') }}">Register</a></li>
			@else
				<li>
					<a href="#">{{ Auth::user()->name }}</a>
					<div class="uk-navbar-dropdown">
						<ul class="uk-nav uk-navbar-dropdown-nav">
							<li>
								<a href="{{ route('frontend.logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('frontend.logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</div>
				</li>
			@endif
		</ul>
	</div>

</nav>
