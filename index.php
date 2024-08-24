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
			.custom-switch.custom-switch-lg {
			padding-bottom: 1rem;
			padding-left: 2.25rem;

			& .custom-control-label {
			padding-left: .75rem;
			padding-top: 0.15rem;

			&::before {
			border-radius: 1rem;
			height: 1.5rem;
			width: 2.5rem;
			}

			&::after {
			border-radius: .65rem;
			height: calc(1.5rem - 4px);
			width: calc(1.5rem - 4px);
			}
			}

			.custom-control-input:checked ~ .custom-control-label::after{
			transform: translateX(1rem);
			}
			}
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
							<input class="form-check-input" type="checkbox" role="switch" id="desktop" onClick="validate();" checked />
							<label class="form-check-label" for="desktop">Desktop</label>
						</div>
					</div>
					<div class="p-1">
						<label class="fw-bolder">Drivers:</label>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="e1000" onClick="validate();" />
							<label class="form-check-label" for="e1000">E1000</label>
							<p class="fs-6">Intel 82540EM network controller</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="ps2" onClick="validate();" />
							<label class="form-check-label" for="ps2">PS/2</label>
							<p class="fs-6">Old keyboard/mouse controller</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="sb16" onClick="validate();" />
							<label class="form-check-label" for="sb16">SB16</label>
							<p class="fs-6">Sound Blaster 16 audio controller</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="usb" onClick="validate();" />
							<label class="form-check-label" for="usb">USB</label>
							<p class="fs-6">Universal Serial Bus</p>
							<label class="fw-bolder fs-5">Extensions:</label>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" id="ohci" onClick="validate();" />
								<label class="form-check-label" for="ohci">OHCI</label>
								<p class="fs-6">Open Host Controller Interface</p>
							</div>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" id="uhci" onClick="validate();" />
								<label class="form-check-label" for="uhci">UHCI</label>
								<p class="fs-6">Universal Host Controller Interface</p>
							</div>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" id="ehci" onClick="validate();" />
								<label class="form-check-label" for="ehci">EHCI</label>
								<p class="fs-6">Enhanced Host Controller Interface</p>
							</div>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" id="xhci" onClick="validate();" />
								<label class="form-check-label" for="xhci">xHCI</label>
								<p class="fs-6">eXtensible Host Controller Interface</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="p-1">
						<label class="fw-bolder">Commands:</label>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="shell" onClick="validate();" />
							<label class="form-check-label" for="shell">shell</label>
							<p class="fs-6">Command line interaction with operating system environment</p>
							<label class="fw-bolder fs-5">Extensions:</label>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" id="cd" onClick="validate();" />
								<label class="form-check-label" for="cd">cd</label>
								<p class="fs-6">Change current directory</p>
							</div>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" role="switch" id="history" onClick="validate();" />
								<label class="form-check-label" for="history">history</label>
								<p class="fs-6">Remember all executed commands under up/down arrow keys</p>
							</div>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="cat" onClick="validate();" />
							<label class="form-check-label" for="cat">cat</label>
							<p class="fs-6">Displays file content</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="free" onClick="validate();" />
							<label class="form-check-label" for="free">free</label>
							<p class="fs-6">Usage of memory and other available devices</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="ls" onClick="validate();" />
							<label class="form-check-label" for="ls">ls</label>
							<p class="fs-6">List content of directories</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="moko" onClick="validate();" />
							<label class="form-check-label" for="moko">moko</label>
							<p class="fs-6">Text editor</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="pwd" onClick="validate();" />
							<label class="form-check-label" for="pwd">pwd</label>
							<p class="fs-6">Shows current directory path</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="touch" onClick="validate();" />
							<label class="form-check-label" for="touch">touch</label>
							<p class="fs-6">Create empty file</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="ping" onClick="validate();" />
							<label class="form-check-label" for="ping">ping</label>
							<p class="fs-6">Connection check via IPv4 address</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="hostname" onClick="validate();" />
							<label class="form-check-label" for="hostname">hostname</label>
							<p class="fs-6">Show current name of machine</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="colors" onClick="validate();" />
							<label class="form-check-label" for="colors">colors</label>
							<p class="fs-6">Available color palette inside console</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="p-1">
						<label class="fw-bolder">Software:</label>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="console" onClick="validate();" />
							<label class="form-check-label" for="console">Console</label>
							<p class="fs-6">Interaction with text mode software only</p>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="3d" onClick="validate();" />
							<label class="form-check-label" for="3d">3D</label>
							<p class="fs-6">Small 3D .obj viewer</p>
						</div>
					</div>
					<div class="p-1">
						<label class="fw-bolder">Games:</label>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="taris" onClick="validate();" />
							<label class="form-check-label" for="taris">Taris</label>
							<p class="fs-6">Tetris like game</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script>
			function validate() {
				// if Desktop disabled
				if( ! document.getElementById( 'desktop' ).checked ) {
					// enable Terminal, and something to interact with
					document.getElementById( 'console' ).checked = true;
					document.getElementById( 'shell' ).checked = true;
				}

				// if USB enabled
				if( document.getElementById( 'usb' ).checked ) {
					// enable at least OHCI, required by keyboard / mouse
					document.getElementById( 'ohci' ).checked = true;

					// disable PS/2 controller, as USB takes over it
					document.getElementById( 'ps2' ).checked = false;
					document.getElementById( 'ps2' ).setAttribute( 'disabled', '' );
				}

					// if USB was disabled
					if( ! document.getElementById( 'usb' ).checked ) {
						// we do not need any of its extensions
						document.getElementById( 'ohci' ).checked = false;
						document.getElementById( 'uhci' ).checked = false;
						document.getElementById( 'ehci' ).checked = false;
						document.getElementById( 'xhci' ).checked = false;

						// allow to enable PS/2 controller
						document.getElementById( 'ps2' ).setAttribute( 'enabled', '' );
					}

					
					// if( ! document.getElementById( 'ehci' ).checked ) {
					// 	document.getElementById( 'xhci' ).checked = false;
					// }

					// if( ! document.getElementById( 'uhci' ).checked ) {
					// 	document.getElementById( 'ehci' ).checked = false;
					// 	document.getElementById( 'xhci' ).checked = false;
					// }

					// if( ! document.getElementById( 'ohci' ).checked ) {
					// 	document.getElementById( 'usb' ).checked = false;
					// 	document.getElementById( 'uhci' ).checked = false;
					// 	document.getElementById( 'ehci' ).checked = false;
					// 	document.getElementById( 'xhci' ).checked = false;
					// }
			}
		</script>
	</body>
</html>
