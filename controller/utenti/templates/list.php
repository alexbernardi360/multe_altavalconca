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
			<h1>Elenco persone</h1>
			<br>
			<br>
			<table border="3px">
				<tr>
					<th><center></center></th>
					<th><center>None</center></th>
					<th><center>Cognome</center></th>
					<th><center>Note</center></th>
					<th><center>Valore</center></th>
					
					<th colspan="2"><center>AZIONI</center></th>
				</tr>
				<?php if($multe != null):?>
				<?php foreach ($multe as $multa):?>
				<tr>
					<td><?php echo $multa->getId_utente()->getNome() ?></td>
					<td><?php echo $multa->getId_utente()->getCognome() ?></td>
					<td><?php echo $multa->getNote() ?></td>
					<td><?php echo $multa->getValore() ?>
					<td><a href="?controller=multe&action=paga&id=<?php echo $persona->getId()?>">Paga</a></td>
					<td><a href="?controller=persona&action=show&id=<?php echo $persona->getId()?>&id_disciplina=<?php echo $persona->getIdDisciplina()?>">Elimina</a></td>
				</tr>
				<?php endforeach;?>
				<?php endif;?>
			</table>
			<br>
			<br>
			<a href="?action=new">Nuova Multa</a>
			
		</center>
		
	</body>
</html>
