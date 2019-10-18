 <?php


include "db.php";

$productTemp = $_GET["product_id"];

$sql = "SELECT * FROM products WHERE product_id = $productTemp" ;
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);
echo json_encode($row);  //Returning the JSON string


?>

