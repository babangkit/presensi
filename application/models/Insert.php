<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Insert extends CI_Model
{
    public function InstMatkul()
    {
        
        $query =   "INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
                    VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');;

        return $this->db->query($query)->result_array();
    }
}