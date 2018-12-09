<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQL
 *
 * @author khacn
 */
class MySQL {
    //put your code here
    function KetNoi(){
        $conn = new mysqli("localhost","root","","shoponline");
        mysqli_set_charset($conn, 'utf8');
        return $conn;             
    }
}
