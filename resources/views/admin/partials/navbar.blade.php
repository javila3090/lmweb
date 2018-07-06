<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				<p style="color: #555">Salir &nbsp;&nbsp;<i class="nav-icon fa fa-sign-out"></i></p>
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>   
	</ul>
</nav>