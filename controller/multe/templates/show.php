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
		<style>
			td{ vertical-align: top; }
		</style>
	</head>
		
	<body>
		<p>multe di <?php echo $utente->getNome()." ".$utente->getCognome(); ?></p>
		<br>
		
		<table border="1" align="center">
			<tr>
				<th>Multe pagate</th>
				<th>Multe non pagate</th>
			</tr>
			<tr>
				<td>
					
					<table border="3px">
						<tr>
							<th><center>Data</center></th>
							<th><center>Valore</center></th>
							
							<th colspan="2"><center>Azioni</center></th>
						</tr>
						<?php foreach ($multe1 as $multa): ?>
						<tr>
							<td><?php echo $multa->getData(); ?></td>
							<td><?php echo $multa->getValore(); ?></td>
							<td><a href="?controller=multa&action=show_details&id=<?php echo $multa->getId(); ?>">Vedi</a></td>
							<td><a href="?controller=multe&action=edit&id=<?php echo $multa->getId(); ?>">Modifica</a></td>
						</tr>
						<?php endforeach; ?>
					</table>
					
				</td>
				<td>
					
					<table border="3px">
						<tr>
							<th><center>Data</center></th>
							<th><center>Valore</center></th>
							
							<th colspan="3"><center>Azioni</center></th>
						</tr>
						<?php foreach ($multe0 as $multa): ?>
						<tr>
							<td><?php echo $multa->getData(); ?></td>
							<td><?php echo $multa->getValore(); ?></td>
							<td><a href="?controller=multa&action=show_details&id=<?php echo $multa->getId(); ?>">Vedi</a></td>
							<td><a href="?controller=multe&action=edit&id=<?php echo $multa->getId(); ?>">Modifica</a></td>
							<td><a href="?controller=multa&action=paga&id=<?php echo $multa->getId(); ?>">Paga</a></td>
						</tr>
						<?php endforeach; ?>
					</table>
					
				</td>
			</tr>
			
		</table>
	</body>

</html>
