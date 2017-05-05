<?php
/*
 * TabellaUtente.class.php
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

class TabellaUtente{
	
	public static function save($utente){
		$query = sprintf("INSERT INTO Utenti(username, password, nome, cognome, data_nascita, location_img, id_gruppo, id_ruolo)
							VALUES('%s', '%s', '%s', '%s', '%s', '%s', %d, %d);",
							$utente->getUsername(),
							$utente->getPassword(),
							$utente->getNome(),
							$utente->getCognome(),
							$utente->getData_nascita(),
							$utente->getLocation_img(),
							$utente->getId_gruppo(),
							$utente->getId_ruolo());
							
		mysql_query($query);
		if(mysql_affected_rows()!=1)
			print(mysql_error());
	}
	
	public static function update($utente){
		$query = sprintf("UPDATE Utenti SET username='%s', nome='%s', cognome='%s', data_nascita='%s', location_img='%s', id_gruppo=%d, id_ruolo=%d WHERE id=%d;",
							$utente->getUsername(),
							$utente->getNome(),
							$utente->getCognome(),
							$utente->getData_nascita(),
							$utente->getLocation_img(),
							$utente->getId_gruppo(),
							$utente->getId_ruolo());
							
		mysql_query($query);
		if(mysql_affected_rows()!=1)
			print (mysql_error());
	}
	
	public static function delete($utente){
		$query = sprintf("DELETE FROM Utenti WHERE id=%d", $utente->getId());
		$result = mysql_query($query);
	}

}
?>
