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


	if(!isset($_REQUEST['action']))
		$action = 'list';
	else
		$action = $_REQUEST['action'];
		
	switch ($action){		
		case 'list':  //solo multe da pagare (pagato = 0)
			$result = TabellaUtente::getAllWithSaldo();
			$content = get_include_contents("../controller/multe/templates/list.php");
			break;
		
		case 'new':
			$multa = new Multa();
			$utenti = TabellaUtente::getAll();
			$content = get_include_contents("../controller/multe/templates/form.php");
			break;
			
		case 'create':
			$multa = new Multa();
			$multa->setData($_POST['data']);
			$multa->setValore($_POST['valore']);
			$multa->setPagato($_POST['pagato']);
			$multa->setNote($_POST['note']);
			$multa->setId_utente($_POST['id_utente']);
			$multa->save();
			$result = TabellaUtente::getAllWithSaldo();
			$content = get_include_contents("../controller/multe/templates/list.php");
			break;
			
		case 'paga_tutto':
			TabellaMulte::pagaTutto($_REQUEST['id']);
			$result = TabellaUtente::getAllWithSaldo();
			$content = get_include_contents("../controller/multe/templates/list.php");
			break;
	
	}
?>
