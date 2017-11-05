<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Produkcja Audio</title>
	<meta name="description" content="Poznaj tajniki produkcji muzycznej, nagrywania, miksu, masteringu. Dowiedz się jakiego sprzętu potrzebujesz. Poznaj ciekawostki ze świata akustyki!" />
	<meta name="keywords" content="produkcja, muzyczna, miks, mastering, sprzęt, audio, akustyka" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="Shortcut icon" href="img/logo.png" />
	
	<script src="jquery-1.12.2.min.js"></script>
	
	<script>
			$(document).ready(function() {
			var stickyNavTop = $('.nav').offset().top;
			
			var stickyNav = function(){
			var scrollTop = $(window).scrollTop();
			
			if (scrollTop > stickyNavTop) { 
				$('.nav').addClass('sticky');
			} else {
				$('.nav').removeClass('sticky');
				}
			};
			
			stickyNav();
			
			$(window).scroll(function() {
				stickyNav();
			});
			});
</script>
	
	<script type="text/javascript">
		var numer = Math.floor(Math.random()*6)+1;
	
		function schowaj()
		{
			$("#content_slajd").fadeOut(500);
		}
	
		function zmienslajd()
		{
			numer++; 
			if(numer>6) numer=1;
			
			var plik = "<img src=\"img/slajd" + numer + ".png\" />"
			
			document.getElementById("content_slajd").innerHTML = plik;
			$("#content_slajd").fadeIn(500);
			
			
			setTimeout("zmienslajd()",4000);
			setTimeout("schowaj()",3500);
		}
	</script>
	
	
</head>

<body onload="zmienslajd()">

	
	<div id="wrapper">
	
		<div id="header">
			<div id="logo">
				<a href="?page=glowna">
					<img src="img/logo.png" width="100" height="56" style="float: left;"/>
					produkcja<span style="color: #257475">audio</span>.pl
					<div style="clear: both;"></div>
				</a></div>
			</div>
		
		<div class="nav">
				<ol>
				
						<li><a href="?page=produkcja_muzyczna">Produkcja muzyczna</a></li>
						<li><a href="?page=nagrywanie">Nagrywanie</a></li>
						<li><a href="?page=miks" onclick="change_value_miks();">Miks</a></li>
						<li><a href="?page=mastering" onclick="change_value_mastering();">Mastering</a></li>
						<li><a href="?page=sprzet" onclick="change_value_sprzet();">Sprzęt</a></li>
						<li><a href="?page=akustyka" onclick="change_value_akustyka();">Akustyka</a></li>
				</ol>
		</div>
		
		<div id="content">
			<div id="content_slajd"></div>
			<div id="content_tekst">
			
					<?php
					$page = isset($_GET['page']) ? basename($_GET['page']) : 'glowna';
					$file = 'menu/' . $page . '.html';
					
					if(file_exists($file))
						include $file;
					else
						echo 'Strona nie istnieje';
					?>
				
			</div>
			<div style="clear: both;"></div>
			
			
		</div>
		
		<div id="sources">
				<div id="sourcesdivs">
				
						<a href="http://zakamarkiaudio.pl/" target="blank">
						<div id="zakamarki_audio">
						ZAKAMARKI AUDIO
						</div></a>
						
						<a href="http://www.eis.com.pl" target="blank">
						<div id="estrada_i_studio">
						ESTRADA I STUDIO
						</div></a>
						
						<a href="http://livesound.pl/" target="blank">
						<div id="live_sound_i_instalation">
						LIVE SOUND & INSTALATION
						</div></a>
						
						<a href="http://dzwiek.org/" target="blank">
						<div id="dzwiekorg">
						DZWIEK.ORG
						</div></a>
						<div style="clear: both"></div>
				</div>
		</div>
		
		<div id="footer">
			<div id="footerdivs">
					<div id="tekst_w_stopce">produkcjaaudio.pl &copy 2016 Strona została wykonana przez Wojciecha Musiała w ramach studiów Inżynieria Akustyczna
					</div>
					<div id="agh_w_stopce">
							<a href="http://www.agh.edu.pl/" target="blank">
							<img src="img/logo_agh.png" width="16" height="32"/>
							</a>
					</div>		
					<div style="clear: both"></div>
			</div>
		</div>
	
	</div>

</body>

</html>