<?php
session_start();
if(isset($_POST['submit'])) {
$korisnik = $_POST['korisnik'];
$sifra = $_POST['sifra'];
 
 
if($korisnik=="admin" && $sifra=="admin"){
  $_SESSION['admin']="admin"; 
  header("Location:http://localhost/telefoni-master/admin.html");
   
}  
  else{
      die("pogresno korisnicko ime ili lozinka");
  }
}
?>