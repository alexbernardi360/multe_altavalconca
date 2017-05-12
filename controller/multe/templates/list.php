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
			<h1>Elenco persone multate</h1>
			<br>
			<br>
			<table border="3px">
				<tr>
					<th><center>Nome</center></th>
					<th><center>Cognome</center></th>
					<th><center>Saldo</center></th>
					
					<th colspan="2"><center>Azioni</center></th>
				</tr>
				<?php foreach($utenti as $utente):?>    <!-- fare la query per avere nome,cognome,e totale da pagare -->
				<tr>
					<td><?php echo $utente->getNome(); ?></td>
					<td><?php echo $utente->getCognome(); ?></td>
					<td><?php echo $utente->getSaldo().'€';?></td>
					<td><a href="index.php?controller=multe&action=paga_tutto&id=<?php echo $utente->getId()?>">Paga tutto</a></td>
				</tr>
				<?php endforeach;?>
			</table>
			<br>
			<br>
			<a href="index.php?controller=multe&action=new">Aggiungi Multa</a>
		</center>
	</body>

</html>
