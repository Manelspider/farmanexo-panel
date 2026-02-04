<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../shared/header.php';
?>

<div class="page">
	<header class="navbar navbar-expand-md navbar-light d-print-none">
		<div class="container-xl">
			<a class="navbar-brand" href="/panel/">
				<i class="fa-solid fa-prescription-bottle-medical me-2"></i>
				FarmaNexo Panel
			</a>
		</div>
	</header>

	<div class="page-wrapper">
		<div class="container-xl">
			<div class="page-header d-print-none">
				<div class="row g-2 align-items-center">
					<div class="col">
						<h2 class="page-title">Prueba de imports</h2>
						<div class="text-muted mt-1">Tabler + Bootstrap + Font Awesome</div>
					</div>
				</div>
			</div>

			<div class="row row-deck row-cards">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="mb-3">
								<span class="badge bg-primary me-2">Tabler badge</span>
								<span class="badge bg-success">Bootstrap badge</span>
							</div>

							<div class="btn-list mb-3">
								<button class="btn btn-primary">
									<i class="fa-solid fa-bolt me-2"></i>
									Botón Tabler
								</button>
								<button class="btn btn-outline-secondary">
									<i class="fa-solid fa-flask me-2"></i>
									Botón Bootstrap
								</button>
							</div>

							<div class="alert alert-info alert-dismissible fade show" role="alert">
								<i class="fa-solid fa-circle-info me-2"></i>
								Este bloque usa estilos de Bootstrap (alert) con iconos de Font Awesome.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>

							<div class="mb-3">
								<button id="test-alert" class="btn btn-outline-primary">
									<i class="fa-solid fa-bell me-2"></i>
									Probar alerta (toast)
								</button>
							</div>

							<div class="toast-container position-fixed bottom-0 end-0 p-3">
								<div id="demo-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
									<div class="toast-header">
										<i class="fa-solid fa-circle-info me-2 text-primary"></i>
										<strong class="me-auto">Notificación</strong>
										<small>Ahora</small>
										<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									</div>
									<div class="toast-body">
										Esta es una alerta de prueba usando Bootstrap.
									</div>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Recurso</th>
											<th>Estado</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Tabler CSS/JS</td>
											<td><span class="badge bg-success">OK</span></td>
										</tr>
										<tr>
											<td>Bootstrap CSS/JS</td>
											<td><span class="badge bg-success">OK</span></td>
										</tr>
										<tr>
											<td>Font Awesome</td>
											<td><span class="badge bg-success">OK</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="./js/main.js"></script>

<?php require_once __DIR__ . '/../shared/footer.php'; ?>
