<?php
/*
 * index.php
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
    require('../lib/lib.php');
    require('../config/connessione.php');
    require('../model/Multa.class.php');
    require('../model/TabellaMulta.class.php');
    require('../model/Utente.class.php');
    require('../model/TabellaUtente.class.php');

    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $auth = true;
    }else
        $auth=false;

    if(!isset($_REQUEST['controller'])){
        $controller = 'multa';
    }else
        $controller = $_REQUEST['controller'];

    if(!$auth){
        $controller =  'login';
        $action = 'login';
    }else{
        //controllo per limitare gli accessi agli utenti base. 2-amministratore   1-base
        if($_SESSION['id_gruppo'] == 2){
            if(!isset($_REQUEST['action']))
                $action = 'list';
            else
                $action = $_REQUEST['action'];
        }else{
            switch($controller){
                case 'multa':
                        $action = 'show';
                        $_REQUEST['id'] = $_SESSION['id'];
                        break;

                case 'utenti':
                        if($_REQUEST['action'] == 'new' or $_REQUEST['action'] == 'create' or $_REQUEST['action'] == 'list'){ 
                            $controller = 'multa';
                            $action = 'show';
                            $_REQUEST['id'] = $_SESSION['id'];
                        }else
                            $action = $_REQUEST['action'];
                        break;

                case 'login':
                        if($auth)
                            $action = 'doLogout';
                        break;
            }
        }
    }
    switch($controller){
        case 'multa':
                require('../controller/multe/controller.php');
                break;

        case 'utenti':
                require('../controller/utenti/controller.php');
                break;

        case 'login':
                require('../controller/login/controller.php');
                break;
    }

    if($auth)
        require ('../layout/layoutBootstrap.php');

?>
