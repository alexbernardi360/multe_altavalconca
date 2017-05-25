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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="it">

	<head>
		<?php if(!isset($_REQUEST['id'])): ?>
		<title>inserimento multa</title>
		<?php else: ?>
		<title>modifica multa</title>
		<?php endif; ?>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>

	<body>
		<center>
		<form action="index.php?controller=multa" method="POST">
			<input type="hidden" name="action" value="<?php echo $multa->getId() ? 'update' : 'create' ?>">
			<input type="hidden" name="id" value="<?php echo $multa->getId() ?>">
			<center>
				<table>
					<tr>
						<td>Data:</td>
						<td><input type="date" name="data" value="<?php echo $multa->getData() ?>"></td>
					</tr>
					<tr>
						<td>Valore:</td>
						<td><input type="number" name="valore" step="0.50" value="<?php echo $multa->getValore() ?>"></td> <!-- bloccare in numeri negativi -->
					</tr>
					<tr>
						<td>Pagato:</td>
						<td>
							<input type="radio" name="pagato" value="1">si
							<input type="radio" name="pagato" value="0" checked>no
						</td>
					</tr>
					<tr>
						<td>Nome:</td>
						<td><textarea rows="2" cols="30" name="note"></textarea></td>
					</tr>
					<tr>
						<td>Persona:</td>
						<td>
							<select name="id_utente">
								<option disabled selected>--scegli--</option>
								<?php foreach($utenti as $utente): ?>
								<option value="<?php echo $utente->getId(); ?>" <?php echo ($multa->getId_utente() == $utente->getId()) ? "selected" : ""; ?>><?php echo $utente->getCognome().' '.$utente->getNome(); ?> </option>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
				</table>
			</center>
			<input type="submit" value="Aggiungi">
		</form>
		</center>
	</body>

</html>
