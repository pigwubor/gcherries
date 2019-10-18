
<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">

     <div class="modal-dialog modal-lg">
       <div class="modal-content">
        <div class="modal-header">
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>

       <h4 class="modal-title text-center" id = "modName"></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
         <div class="col-sm-6">
         <div class="center-block">
          <img src="catelogue/product_images/" alt="Chocolate Cake" class="details img-responsive" id = "myimage"/>
      </div>
      </div>
         <div class="col-sm-6">
          <h4>Description</h4>
          <p id="myDesc"></p>
          <hr/>
          <h3>Price: ₦ <span id = "priceG"></span></h3><br>
        <!--  <h5>Brand:  <span id = "brandG"></span></h5><br> -->
          <form action="add_cart.php" method="post">
  <div class="form-group">
   <div class="col-xs-3">
    <label for="quantity" id="quantity-label"> Quantity:</label>
    <input type="text" class="form-control" Value="1" id="quantity" name="quantity" readonly/>
    </div>
  <div class="form-group">
   <div class="col-xs-3">
       <label for="size"> Size:</label>
    <select name="size" id="size" class="form-control">
       <option value=""></option>
       <option value="6">6</option>
      <option value="8">8</option>
      <option value="0">Others</option>
      <option value="N/A">Not Applicable</option>
     </select>
      </div>
<!-- This div is used to show case message when product is added to cart -->
				<div class="row">
					<div class="col-md-12 col-xs-12" style="display:" id="product_msg">
					</div>
				</div>
      </div>
         </form>
      </div>
      </div>
     </div>
     <div/>
             <div class="modal-footer">
          <button type="button" onClick='history.go(0)' class="btn btn-default" data-dismiss="modal">Close</button>
          <button pid='$pro_id' id='product' type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
        </div>
</div>
<script>

 }); 
</script>

