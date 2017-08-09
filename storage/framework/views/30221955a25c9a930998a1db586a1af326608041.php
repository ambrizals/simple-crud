<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo e(URL('/')); ?>">Sistem Informasi</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="<?php echo e(URL('pegawai')); ?>">Pegawai</a></li>
			<li><a href="<?php echo e(URL('mahasiswa')); ?>">Mahasiswa</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<?php echo e(Auth::user()->name); ?>

				<span class="caret"></span>
			</a>
				<ul class="dropdown-menu" role="menu">
                    <li>
						<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							Logout
						</a>
						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo e(csrf_field()); ?>

						</form>
					</li>
				</ul>
			</li>
		</ul>
	</nav>