<?php
class DBConnection
{
    public static function getDBConnection()
    {
        $con = mysqli_connect("localhost", "root", "", "anarchy");
        // $con = mysqli_connect("localhost", "root", "anarchy_1526101", "anarchy");
        return $con;
    }
}
