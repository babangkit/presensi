<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Amankan extends CI_Controller { 

     
      function index(){ 
          $this->load->library('encrypt'); 
           $msg = '1'; //Plain text 

           //default menggunakan MCRYPT_RIJNDAEL_256 
           $hasil_enkripsi = $this->encrypt->encode($msg);  

           $hasil_dekripsi = $this->encrypt->decode($hasil_enkripsi); 
           echo "Pesan yang mau dienkripsi: ".$msg."<br/><br/>"; 
           echo "Hasil enkripsi: ".$hasil_enkripsi."<br/><br/>"; 
           echo "Hasil dekripsi: ".$hasil_dekripsi."<br/><br/>"; 
      } 
 } 