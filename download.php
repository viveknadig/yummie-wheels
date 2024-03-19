<?php
ob_start();//to capture the output buffer
include 'db_connect.php';
session_start();
require 'vendor/autoload.php';//dompdf dependencies
$uid=$_SESSION['uid'];
$oid=$_GET['oid'];
$date = date('Y-m-d');
if(!isset($_SESSION['uid'])){
  header('Location: ./error.php?no=3');
}
$sqlo="select Users.name as uname,Users.phone as ph,Address.state as state,Address.city as city,Address.street as street,Address.pincode as pin,Menu.item_name as mname,order_id as oid,order_total as price,Drivers.name as dname,delivery_status as status,Menu.img as img,Drivers.phone from Users,Orders,Menu,Drivers,Address where Orders.menu_id=Menu.menu_id  and Orders.driver_id=Drivers.driver_id and Orders.user_id=Address.user_id and Orders.user_id=Users.user_id and order_id=$oid;";
$reso=mysqli_query($conn, $sqlo);
$row = mysqli_fetch_assoc($reso);
    $mname=$row["mname"];
    $ph=$row["ph"];
    $uname=$row["uname"];
    $price=$row["price"];
    $dname=$row["dname"];
    $status=$row["status"];
    $img=$row["img"];
    $phone=$row["phone"];
    $state=$row["state"];
    $street=$row["street"];
    $city=$row["city"];
    $pin=$row["pin"];
    $sqll="select * from Payment where order_id=$oid;";
    $ress=mysqli_query($conn,$sqll);
    $rest=mysqli_fetch_assoc($ress);
    $pid=$rest["payment_id"];
    $pstatus=$rest["payment_method"];
    $pst=$rest["status"];
    $pr=$rest["amount"];
?>
<html>
<head>
<meta name="author" content="Vivek Nadig">
<meta name="description" content="Invoice page of yummie wheels">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="./css/bootstrap.min.css" >
  <style>
	  .invoice-head td {
    padding: 0 8px;
  }
  .invoice-body{
    background-color:transparent;
  }
  .invoice-thank{
    margin-top: 60px;
    padding: 5px;
  }
  address{
    margin-top:15px;
  }
  </style>
</head>
<body>
<div class="container">
    	<div class="row">
    		<div class="span4">
    			<address>
			        <h2><strong>Yummie <span style="color:#3D7065;">Wheels</span></strong></h2><br>
                 
			       Kengeri<br>
                  Bengaluru, Karnataka-560060 (India)
		    	</address>
          <h5>Delivery Address:</h5>
		  <?php

        echo<<<out
        <p>{$uname}<br>{$street}<br>{$city}<br>{$state}<br>{$pin}<br>+91{$ph}</p>
        <p><strong>Delivery Agent:</strong>{$dname}</p></div>
        out;
        ?>
			<?php
			echo<<<out
    		<div class="span4 well">
    			<table class="invoice-head">
    				<tbody>
    					<tr>
    						<td class="pull-right"><strong>Customer:</strong></td>
    						<td>$uid</td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Invoice:</strong></td>
    						<td>#$oid</td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Date:</strong></td>
    						<td>$date</td>
    					</tr>
              <tr>
              <td class="pull-right"><strong>Transaction ID:</strong></td>
              <td>#$pid</td>
              </tr>
              <tr>
              <td class="pull-right"><strong>Mode of Payment:</strong></td>
              <td>$pstatus</td>
              </tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
    	<div class="row">
    		<div class="span8">
    			<h2>Invoice</h2>
    		</div>
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered" style="border: 1px solid black;border-collapse: collapse;">
					<thead style="border: 1px solid black;border-collapse: collapse;">
						<tr >
                          <th style="border: 1px solid black;border-collapse: collapse;">Item</th>
							            <th style="border: 1px solid black;border-collapse: collapse;">Quantity</th>
                          <th style="border: 1px solid black;border-collapse: collapse;">Unit Price</th>
							            <th style="border: 1px solid black;border-collapse: collapse;">Total Price</th>
						</tr>
					</thead>
					<tbody style="border: 1px solid black;border-collapse: collapse;">
					<tr style="border: 1px solid black;border-collapse: collapse;">
						<td style="border: 1px solid black;border-collapse: collapse;">$mname</td>
						<td style="border: 1px solid black;border-collapse: collapse;text-align:center;">1</td>
						<td style="border: 1px solid black;border-collapse: collapse;"><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>$price</td>
                      <td><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> $price</td>
						</tr>
            <tr><td colspan="4"></td></tr>
<tr >
							<td colspan="2" >&nbsp;</td>
							<td style="border: 1px solid black;border-collapse: collapse;"><strong>Total</strong></td>
							<td style="border: 1px solid black;border-collapse: collapse;"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> $price</strong></td>
						</tr>
					</tbody>
				</table>
		  	</div>
  		</div>
  		<div class="row">
  			<div class="span8 well invoice-thank">
  				<h5 style="text-align:center;">Thank You!</h5>
  			</div>
  		</div>
  		<div class="row">
  	    	<div class="span3">
  		        <strong>Phone:</strong>+911234567890
  	    	</div>
  	    	<div class="span3">
  		        <strong>Email:</strong> <a href="mailto:contact@yummie.com">contact@yummie.com</a>
  	    	</div>
  	    	<div class="span3">
  		        <strong>Website:</strong> <a href="http://yummie.com">http://yummie.com</a>
  	    	</div>
  		</div>
    </div>
    </body>
    </html>
out;
?>
<?php
$html=ob_get_clean();
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->loadHtml(html_entity_decode($html));
$dompdf->render();
$dompdf->stream("order_$oid.pdf");

?>