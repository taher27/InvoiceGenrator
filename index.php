<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>SaifeeHardware</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body style="background-image: url('./images/bck3.jpg'); height: 50%; width: 100%; background-size: cover;">

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
		<textarea id="address" style="padding:10px;">
Customer Details
		</textarea>
		<a href="register.php" class="addCustomer"> Add Customer </a>

		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

		<div id="customer-title">
SAIFEE HARDWARE & PLYWOOD
Shop 57, Shilpi Square Complex,
Nagori Dairy, 
Bypass Road,<br>
Bharuch - 392001
	</div>

            <table id="meta" style="background-color: white;">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
				</tr>
				
                <!-- <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">Rs0.00</div></td>
                </tr> -->

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea style="padding:2px;">FevicolMarine</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea style="padding:2px;">Description</textarea></td>
		      <td><textarea class="cost" style="padding:2px;">Rs00.00</textarea></td>
		      <td><textarea class="qty" style="padding:2px;">0</textarea></td>
		      <td><p class="price" style="padding:2px;">Rs00.00</p></td>
		  </tr>
		  
		  
		  <tr id="hiderow">
		    <td colspan="5" style="border:none;" ><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> <h5><b>Terms & Condition</b></h5> </td>
		      <td colspan="2" class="total-line">Subtotal: </td>
		      <td class="total-value"><div id="subtotal">Rs00.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> <p style="font-weight: stronger">* Payment is requested by crossed ordered cheque/DD in favor of M/s Saifee Hardware & Plywood or made by NEFT/RTGS.</p> </td>
		      <td colspan="2" class="total-line">GST: </td>
		      <td class="total-value"><div id="gst">Rs00.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> <p style="font-weight: stronger">* Goods once installed cannot be taken back or replaced.</p> </td>
		      <td colspan="2" class="total-line">Total: </td>
		      <td class="total-value"><div id="total">Rs00.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> <p style="font-weight: stronger">* Subject to juridiction of Bharuch court only.</p> </td>
		      <td colspan="2" class="total-line">Amount Paid: </td>
		      <td class="total-value"><textarea id="paid">Rs0.00</textarea></td>
		  </tr>
		  <!-- <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">Rs00.00</div></td>
		  </tr> -->
		
		</table>
		
		<div id="terms" style="margin-top: 10%">
		  <h5><b style="color: black">This is Computer generated invoice</b></h5>
		  <div>
		  </div>
		</div>
	
	</div>
	
</body>

</html>