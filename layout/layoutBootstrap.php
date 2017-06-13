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
                margin-bottom: 0px; /* the bottom margin is the negative value of the footer's total height */
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
                height: auto;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
            }
            
            .footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
            .footer-ul li { line-height:29px;}
            .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
            .footer-ul i { margin-right:10px;}
            .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }
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
                            <li><a href="index.php?controller=multa">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Impostazioni<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?controller=utenti&action=editpasswd">Modifica password</a></li>
                                    <li><a href="index.php?controller=utenti&action=edit_profile">Modifica profilo</a></li>
                                </ul>
                            </li>
                        <?php if($_SESSION['id_gruppo'] == 2): ?>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Multe<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?controller=multa&action=new">Aggiungi multa</a></li>
                                    <li><a href="index.php?controller=multa&action=list">Lista multe</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Utenti<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?controller=utenti&action=new">Aggiungi utente</a></li>
                                    <li><a href="index.php?controller=utenti&action=list">Lista utenti</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php?controller=login&action=doLogout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

          <div class="container-fluid text-left">    
                <div class="row content">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text-left"> 
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 text-left">
                <div class="col-sm-4">
                    <img src="/icone/altavalconca2.png" alt="Alta Valconca" width="50px" height="50px"> 
                    <p>
                        Sito per la gestione delle multe riguardanti la categoria Juniores della società Alta Valconca.
                        Solo i tesserati hanno il diritto di usufruire delle funzionalità del sito.
                    </p>
                    <br>
                </div>
                <div class="col-sm-4">
                    <h4>A cura di <i>Alessandro Bernardi.</i></h4>
                    <h4>Contatti</h4>
                    <p><i>via Trebbio 38, Montegridolfo, Rimini, Italy</i></p>
                    <p><i>Phone: </i>+39 3318977918</p>
                    <p><i>E-mail: </i>alexbernardi360@gmail.com</p>
                    <br>
                </div>
                <div class="col-sm-4">
                    <h4>Link utili</h4>
                    <ul class="footer-ul">
                        <li><a href="index.php?controller=utenti&action=editpasswd">Modifica password</a></li>
                        <li><a href="index.php?controller=utenti&action=edit_profile">Modifica profilo</a></li>
                    <?php if($_SESSION['id_gruppo'] == 2): ?>  
                        <li><a href="index.php?controller=multa&action=new">Aggiungi multa</a></li>
                        <li><a href="index.php?controller=multa&action=list">Lista multe</a></li>
                        <li><a href="index.php?controller=utenti&action=new">Aggiungi utente</a></li>
                        <li><a href="index.php?controller=utenti&action=list">Lista utenti</a></li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </footer>

    </body>

</html>
