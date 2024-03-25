<div class="left-side-bar">
	<div class="brand-logo">
		<a href="index.html">
			<img src="/backend/vendor/images/deskapp-logo.svg" alt="" class="dark-logo" />
			<img src="/backend/vendor/images/deskapp-logo-white.svg" alt="" class="light-logo" />
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				<li>
					<a href="<?= route_to('admin.home'); ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-house"></span><span class="mtext">Resumen</span>
					</a>
				</li>

				<!-- Sindromes febriles -->
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-add-user"></span><span class="mtext">Sindromes Febril</span>
					</a>
					<ul class="submenu">
						<li><a href="<?= route_to('sindromes_febriles') ?>">Listado</a></li>
						<li><a href="<?= route_to('isertar.paciente.form') ?>">Agregar Nuevo</a></li>
					</ul>
				</li>
				
				<!-- Others Options -->
				<li>
					<a href="#" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-list"></span><span class="mtext">Categorías</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-newspaper"></span><span class="mtext">Post</span>
					</a>
					<ul class="submenu">
						<li><a href="#">All posts</a></li>
						<li><a href="#">Agregar</a></li>
					</ul>
				</li>

				<li>
					<div class="dropdown-divider"></div>
				</li>
				<li>
					<div class="sidebar-small-cap">Extras</div>
				</li>
				<li>
					<a href="<?= route_to('admin.profile'); ?>" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-user"></span>
						<span class="mtext">Perfil
						</span>
					</a>
				</li>
				<li>
					<a href="#" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-settings"></span>
						<span class="mtext">General
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>