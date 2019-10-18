<?php

include "db.php";

$product_id = $_GET["product_id"];

$sql = "SELECT * FROM products WHERE product_id=$product_id";
$result = mysqli_query($con, $sql);

$product2 = mysqli_fetch_assoc($result);
echo json_encode($product2);  //Returning the JSON string
?>

<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
        <div class="modal-header">
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
       <h4 class="modal-title text-center">Chocolate Cake</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
         <div class="col-sm-6">
         <div class="center-block">
          <img src="images/chocolate cake1.jpg" alt="Chocolate Cake" class="details img-responsive" />
      </div>
      </div>
         <div class="col-sm-6">
          <h4>Details</h4>
          <p>This cake is made from rich flavour chocolate, you can feel the chocolaty tasty from a single bite</p>
          <hr/>
          <p>Price: NGN 10,000</p>
          <p>Brand: Cake</p>
          <form action="add_cart.php" method="post">
  <div class="form-group">
   <div class="col-xs-3">
    <label for="quantity" id="quantity-label"> Quantity:</label>
    <input type="text" class="form-control" value="1" id="quantity" name="quantity"/>
    </div>
  <div class="form-group">
   <div class="col-xs-3">
       <label for="size"> Size:</label>
    <select name="size" id="size" class="form-control">
       <option value="6">6</option>
      <option value="8">8</option>
      <option value="N/A">Not Applicable</option>
     </select>
      </div>
      </div>
         </form>
      </div>
      </div>
     </div>
     <div/>
             <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
        </div>
</div>
