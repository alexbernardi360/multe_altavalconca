<?php
/*
 * show.php
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
            <title>show.php</title>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
            <style> td{vertical-align: top;} </style>
    </head>

    <body>
            <h1><center>Multe di <?php echo $utente->getNome()." ".$utente->getCognome(); ?></center></h1>
            <div>
                <div class="col-sm-6">
                    <b>Multe non pagate</b> 
                    <table class="table table-striped">
                        <tr>
                            <th>Data</th>
                            <th>Valore</th>

                            <th colspan="2">Azioni</th>
                        </tr>
                    <?php foreach ($multe0 as $multa): ?>
                        <tr>
                            <td><?php echo dateInIt($multa->getData()); ?></td>
                            <td><?php echo $multa->getValore(); ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="?controller=multa&action=edit&id=<?php echo $multa->getId(); ?>"
                                       class="btn btn-info btn-xs
                                       <?php echo ($_SESSION['id_gruppo']!=2) ? 'disabled' : '' ?>">Modifica</a>
                                    <a href="?controller=multa&action=paga&id_multa=<?php echo $multa->getId(); ?>&id_utente=<?php echo $utente->getId(); ?>"
                                       class="btn btn-success btn-xs
                                       <?php echo ($_SESSION['id_gruppo']!=2) ? 'disabled' : '' ?>">Paga</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-sm-6">
                    <b>Multe pagate</b>
                    <table class="table table-striped">
                        <tr>
                            <th>Data</th>
                            <th>Valore</th>

                            <th>Azioni</th>
                        </tr>
                    <?php foreach ($multe1 as $multa): ?>
                        <tr>
                            <td><?php echo dateInIt($multa->getData()); ?></td>
                            <td><?php echo $multa->getValore(); ?></td>
                            <td><a href="?controller=multa&action=edit&id=<?php echo $multa->getId(); ?>"
                                   class="btn btn-info btn-xs
                                   <?php echo ($_SESSION['id_gruppo']!=2) ? 'disabled' : '' ?>">Modifica</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
          
            
            
            
            
            
            
<!--        <table align="center">
            <tr>
                <th>Multe pagate</th>
                <th>Multe non pagate</th>
            </tr>
            <tr>
                <td>
                    <table class="table table-hover">
                        <tr>
                            <th>Data</th>
                            <th>Valore</th>

                            <th>Azioni</th>
                        </tr>
                    <?php foreach ($multe1 as $multa): ?>
                        <tr>
                            <td><?php echo dateInIt($multa->getData()); ?></td>
                            <td><?php echo $multa->getValore(); ?></td>
                            <td><a href="?controller=multa&action=edit&id=<?php echo $multa->getId(); ?>">Modifica</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </td>
                <td>
                    <table class="table table-hover">
                        <tr>
                            <th>Data</th>
                            <th>Valore</th>

                            <th colspan="2">Azioni</th>
                        </tr>
                    <?php foreach ($multe0 as $multa): ?>
                        <tr>
                            <td><?php echo dateInIt($multa->getData()); ?></td>
                            <td><?php echo $multa->getValore(); ?></td>
                            <td><a href="?controller=multa&action=edit&id=<?php echo $multa->getId(); ?>">Modifica</a></td>
                            <td><a href="?controller=multa&action=paga&id_multa=<?php echo $multa->getId(); ?>&id_utente=<?php echo $utente->getId(); ?>">Paga</a></td>
                        </tr>
                    <?php endforeach; ?>
                        </table>        
                </td>
            </tr>
        </table>
-->
    </body>

</html>
