<?php 
/*
 * controller.php
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
 
	if(isset($_REQUEST['action'])){
		$action = $_REQUEST['action'];
		if($action!='login' && $action!='doLogin' && $action!='doLogout'){
			$action = 'login';
		}
	}else{
		$action = 'login';
	}

	switch($action){
		case 'login':
			require("../controller/login/template/form.html");
			break;
		
		case 'doLogin':
			$utente = TabellaUtente::getByUsernameAndPassword($_POST['username'], $_POST['password']);
			if($utente != null){
				$_SESSION['username'] = $utente->getUsername();
				$_SESSION['id_gruppo'] = $utente->getId_gruppo();
				$_SESSION['id'] = $utente->getId();
			}				
			header("Location: ?controller=multa&action=list");
			break;
		
		case 'doLogout':
			session_destroy();
			header("Location: ?controller=login&action=login");
			break;
	}
 ?>
