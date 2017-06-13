<?php
/*
 * lib.php
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

    function get_include_contents($filename){
        if(is_file($filename)){
            extract($GLOBALS, EXTR_REFS);
            ob_start();
            include $filename;
            return ob_get_clean();
        }
        return false;
    }


    function csvToArray($filepath){
        setlocale(LC_ALL, 'it_IT.UTF-8');

        if(($handle = fopen($filepath, "r")) !== FALSE){
            $nn = 0;

            // legge una riga alla volta fino alla fine del file
            while(($data = fgetcsv($handle, 1000, ";")) !== FALSE){

                // numero di elementi presenti nella riga letta
                $num_elementi = count($data);

                // popolamento dell'array
                for($x = 0; $x < $num_elementi; $x++){
                    $csvarray[$nn][$x] = $data[$x];
                }
                $nn++;
            }

            fclose($handle);
        }else
            echo "File non trovato";

        return $csvarray;
    }


    function dateInIt($str_data){
        $array = explode("-", $str_data); 
        $data_it = $array[2]."-".$array[1]."-".$array[0]; 
        return $data_it; 
    }

?>
