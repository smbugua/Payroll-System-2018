<?php 
	include('db/db.php');

	if(isset($_POST['order']))
	{
		$order_name = $_POST['order_name'];
		$location   = $_POST['location'];
		$date_order = $_POST['date_order'];

		mysql_query("INSERT INTO tborder(order_name,location,date_order) values('$order_name','$location','$date_order')");
		$id = mysql_insert_id();
		if($id > 0)
		{
			for($i=0;$i<count($_POST['product_name']);$i++)
			{
				$product_name = $_POST['product_name'][$i];
				$quantity     = $_POST['quantity'][$i];
				$price        = $_POST['price'][$i];
				$amount       = $_POST['amount'][$i];

				mysql_query("INSERT INTO tborderdetail(order_id,product_name,quantity,price,amount) 
					                values('$id','$product_name','$quantity','$price','$amount')");
			}
		}
	}
?>
<html>
<head>
	<title>Invoice</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
 <div class="container" style="background-color:#efefef">
  <center><h2>Order Product</h2></center>
  <form action="" method="post">  
    <table class="table">
    	<tr>
         	<td>
         	    <label>OrderName</label>
         	    <input type="text" class="form-control" name="order_name">
         	</td>
         	<td>
         	    <label>Location</label>
         	    <input type="text" class="form-control" name="location" value="Phnom Penh">
         	</td>
    	</tr>
    	<tr>
    		<td>
    			<label>Date Order</label>
    			<input type="date" class="form-control" name="date_order" value="">
    		</td>

    	</tr>
    </table>
    <hr style="border:1px dashed black">
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>ProductName</th>
    			<th>Quantity</th>
    			<th>Price</th>
    			<th>Amount</th>
    			<th>Remove</th>
    			<th><input type="button"  class="btn btn-primary add" value="+"></th>
    		</tr>
    	</thead>
    	<tbody class="details">
    		  <tr>
    		  	   <td><input type="text" name="product_name[]" class="form-control product_name"></td>
    		  	   <td><input type="text" name="quantity[]" class="form-control quantity"></td>
    		  	   <td><input type="text" name="price[]" class="form-control price"></td>
    		  	   <td><input type="text" name="amount[]" class="form-control amount"></td>
    		  	   <td><input type="button"  class="btn btn-danger remove" value="Remove"></td>
    		  </tr>
    	</tbody>
    	<tfoot>
    		<tr>   
    		    <td></td>
    		    <td></td>
    		    <td></td> 		   
    			<td>
    				<label>Sub Total</label>
    				<input type="text" name="subtotal" class="subtotal form-control">
    			
    				<label>Get Pay</label>
    				<input type="text" name="pay" class="pay form-control">
    			
    				<label>Return</label>
    				<input type="text" name="return" class="return form-control"><br/>
    				<input type="submit" class="btn btn-primary" name="order" value="Order Now">
    			</td>
    		</tr>
    	</tfoot>
    </table>
  </form>
 </div>
</body>
</html>

<script type="text/javascript">
    

    function total()
    {
       var gg = 0;
       $('.amount').each(function(i,e){
       		var amt = $(this).val()-0;
       		gg += amt;
       	});
       $('.subtotal').val(gg);
    }


	$(function(){


		// add new row 
		$('.add').click(function(){
			var tr = '<tr>'+
		    		  	   '<td><input type="text" name="product_name[]" class="form-control product_name"></td>'+
		    		  	   '<td><input type="text" name="quantity[]" class="form-control quantity"></td>'+
		    		  	   '<td><input type="text" name="price[]" class="form-control price"></td>'+
		    		  	   '<td><input type="text" name="amount[]" class="form-control amount"></td>'+
		    		  	   '<td><input type="button"  class="btn btn-danger remove" value="Remove"></td>'+
		    		  '</tr>';
		  $('.details').append(tr);
		});
		// end 

		// total amount 
		$('.details').delegate('.quantity,.price','keyup',function(){
			var tr = $(this).parent().parent();
			var price = tr.find('.price').val();
			var qty   = tr.find('.quantity').val();
			var amount = price * qty;
			tr.find('.amount').val(amount);
			total();
		});
		// end 


		// delete row 
		$('.details').delegate('.remove','click',function(){
				var con = confirm("Do you want to remove it ?");
				if(con)
				{
					$(this).parent().parent().remove();
					total();
				}

		});
		// end 


		//get pay
		$('.pay').change(function(){
			var subtotal = $('.subtotal').val()-0;
			var get      = $(this).val()-0;
			$('.return').val(get - subtotal);
		});
		// end 
	});
</script>