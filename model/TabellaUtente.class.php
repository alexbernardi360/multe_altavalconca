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
		$query = sprintf("DELETE FROM Utenti WHERE id=%d;",$utente->getId());
		mysql_query($query);
	}	
	
	public static function getAll(){
		$query = sprintf("SELECT * FROM Utenti WHERE NOT id=1 ORDER BY cognome;");   //diverso da 1 perchè 1 è l'utente "root"
		$result = mysql_query($query);
		$utenti = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$utente = new Utente();
				$utente->setId($row["id"]);
				$utente->setUsername($row["username"]);
			//	$utente->setPassword($row["password"]);
				$utente->setNome($row["nome"]);
				$utente->setCognome($row["cognome"]);
				$utente->setData_nascita($row["data_nascita"]);
				$utente->setLocation_img($row["location_img"]);
				$utente->setId_gruppo($row["id_gruppo"]);
				$utente->setId_ruolo($row["id_ruolo"]);
				$utenti[] = $utente;
			}
			return $utenti;
		}else{
			return null;
		}
	}
	
	public static function getByUsernameAndPassword($user, $pass){
		$query=sprintf("SELECT * FROM Utenti WHERE username='%s' AND password='%s';", $user, sha1($pass));
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print('Errore, credenziali errate');
			return FALSE;
		}else
			return TRUE;
	}
	
	public static function getById($id){
		$query = sprintf("SELECT * FROM Utenti where id=%d;",$id);
		$result = mysql_query($query);
		if(mysql_affected_rows()!=1){
			print "Errore" . mysql_error();
		}
		$row = mysql_fetch_array($result);
		$utente = new Utente();
		$utente->setId($row["id"]);
		$utente->setUsername($row["username"]);
	//	$utente->setPassword($row["password"]);
		$utente->setNome($row["nome"]);
		$utente->setCognome($row["cognome"]);
		$utente->setData_nascita($row["data_nascita"]);
		$utente->setLocation_img($row["location_img"]);
		$utente->setId_gruppo($row["id_gruppo"]);
		$utente->setId_ruolo($row["id_ruolo"]);
		return $utente;
	}
	
	
	public static function getAllWithSaldo(){
		$query = sprintf("SELECT Utenti.id, Utenti.cognome, Utenti.nome, SUM(Multe.valore) AS saldo
							FROM Utenti
							JOIN Multe ON Multe.id_utente = Utenti.id
							WHERE Multe.pagato = 0
							GROUP BY Utenti.id, Utenti.cognome, Utenti.nome
							ORDER BY saldo;"); 
		$result = mysql_query($query);
		return $result;
	}
}
?>
