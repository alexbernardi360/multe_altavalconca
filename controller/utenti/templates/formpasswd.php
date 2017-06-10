<?php
/*
 * formpsw.php
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
        <title>formpws.php</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>

    <body>
        <fieldset>
        <?php if($wrongPasswd): ?>
            <legend>Modifica Password: Inserisci la vecchia password come conferma.</legend>
        <?php else: ?>
            <legend>Vecchia Password errata: Password non modificata.</legend>
        <?php endif; ?>
            <form action="index.php?controller=utenti&action=updatepasswd" method="POST">
                <table>
                    <td>
                        <td>Vechia Password:</td>
                        <td><input type="password" name="oldpasswd" required></td>
                    </tr>
                    <td>
                        <td>Nuova password:</td>
                        <td><input type="password" name="newpasswd" required></td>
                    </tr>
                </table>
                <input type="submit" value="Modifica Password">
            </form>
        </fieldset>
    </body>

</html>
