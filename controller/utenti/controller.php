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
        case 'list':
                $utenti = array();
                $utenti = TabellaUtente::getAll();
                $content = get_include_contents("../controller/utenti/templates/list.php");
                break;

        case 'new':
                $utente = new Utente();
                $content = get_include_contents("../controller/utenti/templates/form.php");
                break;

        case 'create':
                $utente = new Utente();
                $utente->setUsername($_POST['username']);
                $utente->setPassword($_POST['password']);
                $utente->setNome($_POST['nome']);
                $utente->setCognome($_POST['cognome']);
                $utente->setData_nascita($_POST['data_nascita']);
                $utente->setId_gruppo($_POST['id_gruppo']);
                $utente->save();
                $utenti = TabellaUtente::getAll();
                $content = get_include_contents("../controller/utenti/templates/list.php");
                break;

        case 'editpasswd':
                $wrongPasswd = false;
                $content = get_include_contents("../controller/utenti/templates/formpasswd.php");
                break;

        case 'updatepasswd':
                $changedPasswd = TabellaUtente::updatePasswd($_SESSION['id'], $_REQUEST['oldpasswd'], $_REQUEST['newpasswd']);
                if($changedPasswd)
                    header("Location: ?controller=multa&action=list");
                else{
                    $wrongPasswd = true;
                    $content = get_include_contents("../controller/utenti/templates/formpasswd.php");
                }
                break;
        
        case 'edit_profile':
                $utente = TabellaUtente::getById($_SESSION['id']);
                $content = get_include_contents("../controller/utenti/templates/form.php");
                break;
        
        case 'update_profile':
                $utente = new Utente();
                $utente->setUsername($_POST['username']);
                $utente->setNome($_POST['nome']);
                $utente->setCognome($_POST['cognome']);
                $utente->setData_nascita($_POST['data_nascita']);
                $utente->setId_gruppo($_POST['id_gruppo']);
                $utente->setId($_POST['id']);
                $utente->update();
                header('Location: ?controller=multa');
                break;
    }
?>
