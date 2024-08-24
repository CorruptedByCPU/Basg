<?php
	SESSION_START();

	// read-only access
	$sql = new mysqli( "", "", "", "" );
	if( $sql -> connect_errno ) { echo "Database unavailable."; exit(); }
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BASG - Blackdev.org Advanced System Generator</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<style>
			.fs-6 { font-size: 10px !important; }
			.fs-5 { font-size: 11px !important; }
		</style>
	</head>
	<body>
		<div class="container-sm p-4">
			<div class="row g-3 align-items-center">
				<div class="col-auto">
					<label for="config" class="col-form-label">Configuration token:</label>
				</div>
				<div class="col-auto">
					<input type="text" id="config" class="form-control" aria-describedby="passwordHelpInline" autofocus />
				</div>
			</div>
		</div>
		<div class="container-sm p-4">
			<div class="row">
				<div class="col">
					<div class="p-1">
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="desktop" checked />
							<label class="form-check-label" for="desktop">Desktop</label>
						</div>
					</div>
					<div class="p-1">
						<label class="fw-bolder">Drivers:</label>
						<?php
							$result = $sql -> query( "SELECT * FROM `t_driver` ORDER BY `name` ASC" );
							while( $row = $result -> fetch_assoc() ) {
								echo '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="driver-'. $row['name'] .'" '; if( ! $row['active'] ) echo 'disabled';
								echo ' /><label class="form-check-label" for="driver-'. $row['name'] .'">'. $row['name'] .'</label><p class="fs-6">'. $row['description'] .'</p></div>';
							}
						?>
					</div>
					<div class="p-1">
						<label class="fw-bolder">Applications:</label>
						<?php
							$result = $sql -> query( "SELECT * FROM `t_application` ORDER BY `name` ASC" );
							while( $row = $result -> fetch_assoc() ) {
								echo '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="application-'. $row['name'] .'" '; if( ! $row['active'] ) echo 'disabled';
								echo ' /><label class="form-check-label" for="application-'. $row['name'] .'">'. $row['name'] .'</label><p class="fs-6">'. $row['description'] .'</p></div>';
							}
						?>
					</div>
					<div class="p-1">
						<label class="fw-bolder">Games:</label>
						<?php
							$result = $sql -> query( "SELECT * FROM `t_game` ORDER BY `name` ASC" );
							while( $row = $result -> fetch_assoc() ) {
								echo '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="game-'. $row['name'] .'" '; if( ! $row['active'] ) echo 'disabled';
								echo ' /><label class="form-check-label" for="game-'. $row['name'] .'">'. $row['name'] .'</label><p class="fs-6">'. $row['description'] .'</p></div>';
							}
						?>
					</div>
				</div>
				<div class="col">
					<div class="p-1">
						<label class="fw-bolder">Software:</label>
						<?php
							$result = $sql -> query( "SELECT * FROM `t_software` ORDER BY `name` ASC" );
							while( $row = $result -> fetch_assoc() ) {
								echo '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="software-'. $row['name'] .'" '; if( ! $row['active'] ) echo 'disabled';
								echo ' /><label class="form-check-label" for="software-'. $row['name'] .'">'. $row['name'] .'</label><p class="fs-6">'. $row['description'] .'</p></div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
<?php
	$sql = NULL;
?>