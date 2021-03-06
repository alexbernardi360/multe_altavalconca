<?php
/*
 * Utente.class.php
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

class Utente{
    private $id = null;
    private $username = null;
    private $password = null;
    private $nome = null;
    private $cognome = null;
    private $data_nascita = null;
    private $location_img = null;
    private $id_gruppo = null;
    private $id_ruolo = null;

    public function getId(){
        return $this->id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getData_nascita(){
        return $this->data_nascita;
    }

    public function getLocation_img(){
        return $this->location_img;
    }

    public function getId_gruppo(){
        return $this->id_gruppo;
    }

    public function getId_ruolo(){
        return $this->id_ruolo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

///////////////////////////////////////////

    public function setId($v){
        $this->id = $v;
    }

    public function setUsername($v){
        $this->username = $v;
    }

    public function setPassword($v){
        $this->password = $v;
    }

    public function setNome($v){
        $this->nome = $v;
    }

    public function setCognome($v){
        $this->cognome = $v;
    }

    public function setData_nascita($v){
        $this->data_nascita = $v;
    }

    public function setLocation_img($v){
        $this->location_img = $v;
    }

    public function setId_gruppo($v){
        $this->id_gruppo = $v;
    }

    public function setId_ruolo($v){
        $this->id_ruolo = $v;
    }

    public function setSaldo($v){
        $this->saldo = $v;
    }

///////////////////////////////////////////

    public function save(){
        TabellaUtente::save($this);
    }

    public function update(){
        TabellaUtente::update($this);
    }

    public function delete(){
        TabellaUtente::delete($this);
    }
} 

?>
