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
        <title>lista multe</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>

    <body>
        <center>
        <?php if(mysql_num_rows($result)): ?>
            <h1>Elenco persone multate</h1>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Saldo</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
            <?php while($row = mysql_fetch_array($result)): ?>
                    <tr>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['cognome']; ?></td>
                        <td><?php echo $row['saldo'].'€'; ?>
                        <td>
                            <div class="btn-group-vertical">
                                <a href="index.php?controller=multa&action=paga_tutto&id=<?php echo $row['id']; ?>"
                                   class="btn btn-success btn-xs">Paga tutto</a>
                                <a href="index.php?controller=multa&action=show&id=<?php echo $row['id']; ?>"
                                   class="btn btn-info btn-xs">Vedi tutto</a>
                            </div>
                        </td>
                    </tr>
            <?php endwhile; ?>					
            </table>
        <?php else: ?>
            <h1>Nessuna multa in sospeso</h1>
        <?php endif; ?>
            <br>
            <br>
            <a href="index.php?controller=multa&action=new"
               class="btn btn-success">Aggiungi Multa</a>
            <a href="index.php?controller=utenti&action=list"
               class="btn btn-info">Lista Persone</a>
        </center>
    </body>

</html>
