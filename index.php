<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Site in Black</title>
		
		<link rel="stylesheet" type="text/css" href="assets/css/_Stylesheets.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

	</head>
	<body>
		<div class="container">
			<div class="box1" id="boxes" alt="weather">
				<a class="weatherwidget-io" href="https://forecast7.com/en/55d3810d40/odense-m/" data-label_1="ODENSE M" data-label_2="WEATHER" data-font="Arial Black" data-theme="weather_one" >ODENSE M WEATHER</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>
			</div>

			<div class="box2" id="boxes" alt="dayandtime">
				<div class="datotid">
				<br> <br> <br>
					<span class="dato" id="dagensdato"> Dagens Dato </span>
					<br> <br>
					<span class="tid" id="infour"> Tidspunkt </span>
				</div>				
			</div>
			<div class="box3" id="boxes" alt="cafeteriatime">
				
			</div>
			<div class="box4" id="boxes" alt="projects">
				<div id="skp">
						<div id="programmer">
						<h3 id="education_1"></h3>
						<span>Elever</span> <span id="students_1" class="boxtext"></span>
				        <span>Projekter</span> <span id="projects_1" class="boxtext"></span>
						<span>Deadlines</span> <span id="deadlines_1" class="boxtext"></span>
					</div>
					<div id="infrastructure">
						<h3 id="education_2"></h3>
						<span>Elever</span> <span id="students_2" class="boxtext"></span>
						<span>Projekter</span> <span id="projects_2" class="boxtext"></span>
						<span>Deadlines</span> <span id="deadlines_2" class="boxtext"></span>
					</div>
					<div id="support">
						<h3 id="education_3"></h3>
						<span>Elever</span> <span id="students_3" class="boxtext"></span>
						<span>Projekter</span> <span id="projects_3" class="boxtext"></span>
						<span>Deadlines</span> <span id="deadlines_3" class="boxtext"></span>
					</div>
				</div>
				
			</div>
			<div class="box5" id="boxes" alt="bustime">
				
			<table data-bind="if:!vm.error()">
   			    <thead class="thead">
   			        <tr>
   			            <th>Rute</th>
   			            <th>Til</th>
   			            <th>Næste</th>
   			        </tr>
   			    </thead>
   			    <tbody data-bind="foreach:vm.theBuses() ">
   			        <tr data-bind="attr:{'class': type}">
   			            <td><span data-bind="text:name"></span></td>
   			            <td><span data-bind="text:direction"></span></td>
   			            <td><span data-bind="text:time"></span><span data-bind="ifnot: delay === 0"> +<span data-bind="text:delay"></span></td>
   			        </tr>
   			    </tbody>
   			</table>

			</div>
			<div class="box6" id="boxes" alt="breaks">
				 <div class="breakBox">
                    <p> Pauser: </p>
                    <p> Morgen: 9:30 </p>
                    <p> Frokost: 11:30 </p>
                    <p> Eftermiddag: 13:30 </p>
                </div>
			</div>
			<div class="box7" id="boxes" alt="todolist">
				<div id="header">
					<p style="padding:0 0px 0px 0px; font-size:40px;">HUSK!</p>
				</div>
				<div id="checkin">
					<p>Check ind</p>
				</div>
				<div id="brick">
					<p>Brik</p>
				</div>
				<div id="logbook">
					<p>Logbog</p>
				</div>
				<div id="checkout">
					<p>Check ud</p>
				</div>
			</div>
			<div class="box8" id="boxes" alt="news">
			<iframe id="marquee-iframe" src="marquee.html" width="100" height="75" frameborder="0" style="width:100%; border-radius: 20px;"></iframe>
			</div>
		</div>
		<!-- Custom JS -->
    <script src="dato.js"></script>
    <script src="tid.js"></script>
    <script>
        function start() {
            showTime();
            showDate();
        }
		window.onload = start;

    </script>
	</body>

	<?php
	
		include 'js/busplan.php';
		include 'js/skpinfo.html';
	
		
	?>
</html>