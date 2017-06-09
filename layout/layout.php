<?php
/*
 * Utente.class.php
 * 
 * Copyright 2017 Alessandro Bernardi <alessandro@Alessandro>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<link href="icone/favicon.ico" rel="icon">
		<title>Multe Altavalconca</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script>
			$(function(){
    				$( "#datepicker" ).datepicker();
  			});
  			
		</script>
		
		<style>
			div.container{
				width: 100%;
				border: 1px solid gray;
			}

			header, footer{
				padding: 1em;
				color: black;
				background-color: #FFE4E1;
				clear: left;
				text-align: center;
			}

			nav{
				float: left;
				height: 100%;
				max-width: 160px;
				margin: 0;
				padding: 1em;
			}

			nav ul{
				list-style-type: none;
				padding: 0;
			}
			  
			nav ul a{
				text-decoration: none;
			}

			article{
				margin-left: 170px;
				height: 100%;
				border-left: 1px solid gray;
				padding: 1em;
				overflow: hidden;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<header>
				<img align="left" src="icone/ms-icon-70x70.png">
				<h1>Multe Altavalconca Juniores</h1>
			</header>
			<nav>
				<!-- aggiungere tag <summary> -->
				<ul>
					<li><a href="index.php?controller=multa&action=list">Lista Multe</a></li>
					<li><a href="index.php?controller=utenti&action=list">Lista Utenti</a></li>
					<li><a href="index.php?controller=login&action=doLogout">Logout</a></li>
				</ul>
			</nav>
			<article>
				<?php echo $content; ?>
			</article>
		</div>
	</body>
</html>
