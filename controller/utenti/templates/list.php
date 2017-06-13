<?php
/*
 * list.php
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
    <title>Lista</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>

    <body>
        <center>
            <h1>Elenco Utenti</h1>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>None</th>
                        <th>Cognome</center></th>

                        <th>AZIONI</center></th>
                    </tr>
                </thead>
                <?php if($utenti != null):?>
                <?php foreach ($utenti as $utente):?>
                <tr>
                    <td><?php echo $utente->getNome() ?></td>
                    <td><?php echo $utente->getCognome() ?></td>
                    <td><a href="?controller=multa&action=show&id=<?php echo $utente->getId()?>"
                           class="btn btn-info btn-xs">Lista multe</a></td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>
            </table>
            <br>
            <a href="index.php?controller=utenti&action=new"
               class="btn btn-success">Aggiungi Utente</a>			
        </center>
    </body>
</html>
