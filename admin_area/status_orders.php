
<?php 
include("includes/db.php"); 
if(isset($_GET['status_orders'])){
	$status_id = $_GET['status_orders']; 
}
?>
<form action="" method="post" style="padding:80px;">
    <b>Confirm Order Status:</b>
    <select name="new_cat">
        <option value=""></option>
    	<option value="Pending">Pending</option>
    	<option value="Completed">Completed</option>
    	<option value="Cancel">Cancel</option>

    </select>
    <input type="submit" name="update_status" value="Update Status" /> 

</form>
<?php 
	if(isset($_POST['update_status'])){
	$update_id = $status_id;
	$new_cat = $_POST['new_cat'];
	$update_cat = "update orders set p_status='$new_cat' where order_id='$update_id'";
	$run_cat = mysqli_query($con, $update_cat); 
	if($run_cat){
	
	   echo "<script>alert('An Order status has been updated!')</script>";
	   echo "<script>window.open('index.php?view_orders','_self')</script>";
	   }
	}
?>