<?php include "../konekcija/db.php";
global $connnection;
session_start();

$query = "SELECT id, model, ram, procesor, baterija, kamera, slika, cena, marka_id FROM telefon";
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
echo "<h2>Telefoni:</h2>";
while($row=mysqli_fetch_array($query_product_info)){
    echo "<div class='product'>
    <img src='{$row['slika']}' alt=''>
    <h4>{$row['model']}</h4>
    <p>{$row['ram']}</p>
    <p>{$row['procesor']}</p>
    <p>{$row['baterija']}</p>
    <p>{$row['kamera']}</p>
    <p>{$row['cena']}</p>";
    if(isset($_SESSION['admin'])){
        echo "<button class='izmeni' id='{$row['id']}'>Izmeni</button>";
        echo "<button class='obrisi' id='{$row['id']}'>Obrisi</button>";

        }else{
    echo "<button  class='dodajUKorpu' id={$row['id']}>Dodaj u korpu</button>";
        }
echo "</div>";
}

?>