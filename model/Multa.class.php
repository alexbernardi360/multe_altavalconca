<?php
/*
 * Multe.php
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

class Multe{
	private $id;
	private $data;
	private $valore;
	private $pagato;
	private $note;
	private $id_utente;
	
	public function getId(){
		return $this->id;
	}
	
	public function getData(){
		return $this->data;
	}
	
	public function getValore(){
		return $this->valore;
	}
	
	public function getPagato(){
		return $this->pagato;
	}
	
	public function getNote(){
		return $this->note;
	}
	
	public function getId_utente(){
		return $this->id_utente;
	}
	
///////////////////////////////////////////
	
	public function setId($v){
		$this->id = $v;
	}
	
	public function setData($v){
		$this->data = $v;
	}	
	
	public function setValore($v){
		$this->valore = $v;
	}
	
	public function setPagato($v){
		$this->pagato = $v;
	}
	
	public function setNote($v){
		$this->note = $v;
	}
	
	public function setId_utente($v){
		$this->id_utente = $v;
	}
?>
