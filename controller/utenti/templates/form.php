<?php
/*
 * form.php
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
        <title>form.php</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>

    <body>
        <h2>Dati nuovo utente</h2>
        <form id="regForm" action="index.php?controller=utenti" method="POST">
            <input type="hidden" name="action" value="<?php echo $utente->getId() ? 'update_profile' : 'create'; ?>">
            <input type="hidden" name="id" value="<?php echo $utente->getId(); ?>">
            <table class="table table-striped">
                <tr>
                    <td>Username:</td>
                    <td><input required type="text" name="username" class="form-control"
                               value="<?php echo $utente->getUsername(); ?>"</td>
                </tr>
            <?php if($_REQUEST['action'] == 'new'): ?>
                <tr>
                    <td>Password:</td>
                    <td><input required type="password" placeholder="Password" 
                               name="password" class="form-control"></td>
                </tr>
            <?php endif; ?>
                <tr>
                    <td>Nome:</td>
                    <td><input required type="text" name="nome" class="form-control"
                               value="<?php echo $utente->getNome(); ?>"></td>
                </tr>
                <tr>
                    <td>Cognome:</td>
                    <td><input required type="text" name="cognome" class="form-control"
                               value="<?php echo $utente->getCognome(); ?>"></td>
                </tr>
                <tr>
                    <td>Data di Nascita: </td>
                    <td><input type="date" name="data_nascita" class="form-control"
                               value="<?php echo $utente->getData_nascita() ?>" ></td>
                </tr>
            <?php if($_REQUEST['action'] == 'new'): ?>
                <tr>
                    <td>Gruppo:</td>
                    <td>
                        <input type="radio" name="id_gruppo" value="1" checked>utente base
                        <input type="radio" name="id_gruppo" value="2">amministratore
                    </td> 
                </tr>
            <?php else: ?>
                <input type="hidden" name="id_gruppo" value="<?php echo $utente->getId_gruppo(); ?>">
            <?php endif; ?>
            </table>
            <input type="submit" class="btn btn-success">
        </form>
    </body>

</html>
