<?php

$status = false;

if($_POST){
	
$product_name = $_POST['product_name'];

$price = $_POST['price'];
	
$name = $_POST['name'];

$card_number = $_POST['card_number'];

$month = $_POST['month'];

$year = $_POST['year'];

$cvv = $_POST['cvv'];	

$status = true;
	
}

?>

<html>

<head>
<title>PRODUCT INTRODUCTION PAGE</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script  src="https://code.jquery.com/jquery-3.6.3.js"  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<style>

.gradient-custom {
/* fallback for old browsers */
background: #cd9cf2;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1))
}

.form-group{margin-bottom:15px}

.padding{
    padding:5rem !important;
    margin-left:300px;
}
.card {
    margin-bottom: 1.5rem;
} 

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem;
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f0f3f5;
    border-bottom: 1px solid #c8ced3;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}

.form-control:focus {
    color: #5c6873;
    background-color: #fff;
    border-color: #c8ced3 !important;
    outline: 0;
    box-shadow: 0 0 0 #F44336;
}

</style>

</head>

<body>

<section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h5 class="text-muted mb-0">PRODUCT INTRODUCTION PAGE</h5>
          </div>
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
              <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
            </div>
            <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                      class="img-fluid" alt="Phone">
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">Samsung Galaxy</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">White</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Capacity: 64GB</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Qty: 1</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">$499</p>
                  </div>
                </div>
				<?php

				if($status==false){

				?>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <button id="buy" type="submit">BUY</button>
                </div>
				
				<?php } ?>
              </div>
            </div>
 
<script>

$("#buy").on("click",function(){
	
$("#order_form").slideToggle();
	
});

</script>

<?php

if($status==false){

?>

<form id="place_order_form" method="post" action="/urun_siparis/index.php" > 

<div id="order_form" class="container" style="display:none">
	<div class="row">
      <div class="col-md-12 col-md-offset-12">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">ORDER FORM</legend>
    
<div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<strong>Credit Card</strong>
<small>enter your card details</small>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm-12">
<div class="form-group">
    

    
<label for="name">Name</label>
<input class="form-control" id="name" name="name" type="text" placeholder="Enter your name">

<input class="form-control" id="price" name="price" type="hidden" value="499">
<input class="form-control" id="product_name" name="product_name" type="hidden" value="Samsung Galaxy">

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label for="ccnumber">Credit Card Number</label>


<div class="input-group">
<input class="form-control" id="card_number" name="card_number" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
<div class="input-group-append">
<span class="input-group-text">
<i class="mdi mdi-credit-card"></i>
</span>
</div>
</div> 
</div>
</div>
</div>

<div class="row">
<div class="form-group col-sm-4">
<label for="ccmonth">Month</label>
<select id="month" name="month" class="form-control" id="ccmonth">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
</div>
<div class="form-group col-sm-4">
<label for="ccyear">Year</label>
<select id="year" name="year" class="form-control" id="ccyear">
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option selected>2023</option>
<option>2024</option>
<option>2025</option>
</select>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="cvv">CVV/CVC</label>
<input id="cvv" name="cvv" class="form-control" type="text" placeholder="123">
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>


<div class="form-group">
<div class="col-md-12 ">
<button type="submit" class="btn btn-primary btn-block" style="width:100%">PLACE ORDER</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>

</form>

<?php }else{ ?>


<div class="alert alert-success">ORDER PLACED!</div>


<table class="table table-hover">

  <tbody>
  
    <tr>
	
      <td>ORDER ID</td>
	  
	  <td><?php echo $order_id; ?></td>

    </tr>  
  
  
    <tr>
	
      <td>NAME</td>
	  
	  <td><?php echo $name; ?></td>

    </tr>
	
    <tr>
	
      <td>PRODUCT NAME</td>
	  
	  <td><?php echo $product_name; ?></td>

    </tr>
	
  
    <tr>
	
      <td>PRICE</td>
	  
	  <td>$<?php echo $price; ?></td>

    </tr>
	
 

  </tbody>
</table>


<?php } ?>

</div>
</div>



    </div>
  </div>
</section>


</body>


</html>