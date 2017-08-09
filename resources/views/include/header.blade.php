<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL('/') }}">Sistem Informasi</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="{{ URL('pegawai') }}">Pegawai</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Mahasiswa
				<span class="caret"></span>
			</a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ URL('mahasiswa') }}">Daftar Mahasiswa</a></li>
					<li><a href="{{ URL('mahasiswa/archive') }}">Arsip Mahasiswa</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				{{ Auth::user()->name }}
				<span class="caret"></span>
			</a>
				<ul class="dropdown-menu" role="menu">
                    <li>
						<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							Logout
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</nav>