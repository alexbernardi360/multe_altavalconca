<?php
/*
 * TabellaMulte.php
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

class TabellaMulte{
	
	public static function save($multa){
		$query = sprintf("INSERT INTO Multe(data, valore, pagato, note, id_utente)
							VALUES('%s', %f, %b, '%s', %d);",
							$multa->getData(),
							$multa->getValore(),
							$multa->getPagato(),
							$multa->getNote(),
							$multa->getId_utente());
							
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print(mysql_error());
		}
	}
	
	public static function update($multa){
		$query = sprintf("UPDATE Multe SET data='%s', valore=%f, pagato=%b, note=%s, id_utente=%d WHERE id=%d;",
							$multa->getData(),
							$multa->getValore(),
							$multa->getPagato(),
							$multa->getNote(),
							$multa->getId_utente());
							
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print (mysql_error());
		}
	}
	
	public static function pagaTutto($id_utente){
		$query = sprintf("UPDATE Multe SET pagato=1 WHERE id_utente='%d';", $id_utente);
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print('errore pagamento');
		}
	}
	
	public static function paga($multa){
		$query = sprintf("UPDATE Multe SET pagato=1 WHERE id='%d';", $multa->getId());
		mysql_query($query);
		if(mysql_affected_rows()!=1){
			print('errore pagamento');
		}
	}
	
	
	public static function delete($multa){
		$query = sprintf("DELETE FROM Multe WHERE id=%d;",$multa->getId());
		mysql_query($query);
	}	
	
	public static function getAll(){
		$query = sprintf("SELECT * FROM Multe;");
		$result = mysql_query($query);
		$multe = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$multa = new Multa();
				$multa->setId($row["id"]);
				$multe[] = $multa;
			}
			return $multe;
		}else{
			return null;
		}
	}
	
	public static function getNonPagati(){
		$query = sprintf("SELECT * FROM Multe WHERE pagato=0;");
		$result = mysql_query($query);
		$multe = array();
		if($result){
			while($row = mysql_fetch_array($result)){
				$multa = new Multa();
				$multa->setId($row["id"]);
				$multe[] = $multa;
			}
			return $multe;
		}else{
			return null;
		}
	}
	
}
?>
