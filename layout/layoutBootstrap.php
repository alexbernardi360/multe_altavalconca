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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

    <head>
        <meta name="theme-color" content="#222222">
        <title>Multe Altavalconca</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            
            html, body {
                margin: 0px;
                padding: 0px;
                min-height: 100%;
                height: 100%;
            }
            
            .wrapper {
                min-height: 100%;
                height: auto;
                margin-bottom: -50px; /* the bottom margin is the negative value of the footer's total height */
            }

            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: auto;}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
                height: 50px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <img src="/icone/altavalconca2.png" alt="Altavalconca" width="50px" height="50px"> 
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php?controller=multa">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Impostazioni<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?controller=utenti&action=editpasswd">Modifica password</a></li>
                                    <li><a href="#">Modifica profilo</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Multe<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?controller=multa&action=new">Aggiungi multa</a></li>
                                    <li><a href="index.php?controller=multa&action=list">Lista multe</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php?controller=login&action=doLogout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

          <div class="container-fluid text-left">    
                <div class="row content">
                    <div class="col-sm-2">  <!-- attribito sidenav dentro questo div-->
<!--                            <p><a href="index.php?controller=multa&action=list">Lista Multe</a></p>
                            <p><a href="index.php?controller=utenti&action=list">Lista Utenti</a></p>
                            <p><a href="index.php?controller=utenti&action=editpasswd">Modifica Password</a></p>
-->
                    </div>

                    <div class="col-sm-8 text-left"> 
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
<!--
        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>
-->

    </body>

</html>
