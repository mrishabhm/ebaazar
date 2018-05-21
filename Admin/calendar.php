<?php
include('header.php');
?>
		<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
	<!-- //calendar -->
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- grids -->
				<div class="grids">
					
					<div class="progressbar-heading grids-heading">
						<h2>Calendar</h2>
					</div>
					
					<div class="agile-calendar-grid">
						<div class="page">
							<div class="col-md-3 w3l-calendar-right">
								<div class="calendar-heading">
									<h3>Date Picker</h3>
								</div>
								<input type="text" id="mytarget" value="Select Date">
								<div class="monthly" id="mycalendar2"></div>
							</div>
							<div class="col-md-9 w3l-calendar-left">
								<div class="calendar-heading">
									<h3>Event Calendar</h3>
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
			</div>
		</div>
	<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				xmlUrl: 'events.xml'
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
	
<?php
include('footer.php');
?>