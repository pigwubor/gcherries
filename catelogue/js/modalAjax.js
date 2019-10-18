
function showDetails(button){
  var product_id = button.id;

// AJAX call to get specific product data
$.ajax({
  url: "modalAjaxFetchDB.php",
  method: "GET",
  data: {"product_id": product_id},
  success: function(response){
 //   alert(response);
// parsing the Jason to javascript object
var product = JSON.parse(response);
var path = "/Gigglecherries/catelogue/product_images/";
var img = product.product_image;
var imgPath = path + img;

$("#modName").text(product.product_title);
$("#myimage").attr('src', imgPath);
$("#myDesc").text(product.product_desc);
$("#priceG").text(product.product_price);
}
  
});
}
