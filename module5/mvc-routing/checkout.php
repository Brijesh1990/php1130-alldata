<?php
$MERCHANT_KEY = "FH2qsrBv";
$SALT = "StCMXYEpZ3";
// Merchant Key and Salt as provided by Payu.
$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode
$action = '';
$posted = array();
if(!empty($_POST)) {
//print_r($_POST);
foreach($_POST as $key => $value) {    
$posted[$key] = $value; 

}
}
$formError = 0;
if(empty($posted['txnid'])) {
// Generate random transaction id
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
$txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
if(
empty($posted['key'])
|| empty($posted['txnid'])
|| empty($posted['amount'])
|| empty($posted['firstname'])
|| empty($posted['email'])
|| empty($posted['phone'])
|| empty($posted['productinfo'])
|| empty($posted['surl'])
|| empty($posted['furl'])
|| empty($posted['service_provider'])
) {
$formError = 1;
} else {
//$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
$hashVarsSeq = explode('|', $hashSequence);
$hash_string = '';	
foreach($hashVarsSeq as $hash_var) {
$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
$hash_string .= '|';
}
$hash_string .= $SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = $PAYU_BASE_URL . '/_payment';
}
} elseif(!empty($posted['hash'])) {
$hash = $posted['hash'];
$action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
<head>
</script>
<!-- customer click on checkout button and go for payments -->
<script type="text/javascript">
var hash = '<?php echo $hash ?>';
function submitPayuForm() {
if(hash == '') {
return;
}
var payuForm = document.forms.payuForm;
payuForm.submit();
}
</script>
</head>
<body onload="submitPayuForm()">
<div class="container-fluid p-5 mt-2">
<div class="row">
<div class="col-md-6">
<h3>Fill <span class='text-danger'>(*)</span> all required fieled of customers details to order now</h3>
<form method="post"  id="frm1" action="<?php echo $action; ?>" name="payuForm">

<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

<tr>
<td class="mt-3">Amount: </td>
<td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" /></td>
<td class="mt-3">First Name: </td>
<td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" class="form-control" /></td>
</tr>
<tr>
<td class="mt-5">Email: </td>
<td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" class="form-control" /></td>
<td class="mt-3">Phone: </td>
<td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" class="form-control" /></td>
</tr>
<tr>
<td class="mt-3">Product Info: </td>
<td colspan="3"><textarea name="productinfo" class="form-control"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="surl" value="<?php echo $mainurl;?>success" size="64" /></td>
</tr>

<tr>
<td colspan="3"><input type="hidden" name="furl" value="<?php echo $mainurl;?>failure" size="64" /></td>
</tr> 

<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
</tr>

<div class="input-group mt-3">
<textarea  name="address" placeholder="Manage Address *"   required class="form-control"><?php echo $mangeprof[0]["address"];?></textarea>
</div>

<div class="input-group mt-3">
<select  name="country" placeholder="Manage Address *"  required class="form-control">
<option value="">-select country-</option>
<?php
foreach($country as $country1)
{ 
?>
<option value="<?php echo $country1["country_id"];?>"><?php echo $country1["countryname"];?></option>
<?php 
}
?>
</select>
</div>


<div class="input-group mt-3">
<select  name="state" placeholder="Manage Address *"  required class="form-control">
<option value="">-select state-</option>
<?php
foreach($state as $state1)
{ 
?>
<option value="<?php echo $state1["state_id"];?>"><?php echo $state1["statename"];?></option>
<?php 
}
?>
</select>
</div>


<div class="input-group mt-3">
<select  name="city" placeholder="Manage Address *"  required class="form-control">
<option value="">-select city-</option>
<?php
foreach($city as $city1)
{ 
?>
<option value="<?php echo $city1["city_id"];?>"><?php echo $city1["cityname"];?></option>
<?php 
}
?>
</select>
</div>


</div>
<div class="col-md-5 shadow ms-4 p-5">
<h4>Order summary <button type="button" class="btn btn-dark position-relative">
<span class="bi bi-truck"></span>
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $totalcount[0]["total"];?></span>
</button></h4>

<table class="table table-responsive">
<tr>
<th>#id</th>
<th>Photo</th>
<th>FoodName</th>
<th>qty</th>
<th>Total</th>
</tr>
<?php 
foreach( $shwcart as $row)
{
?>
<tr>
<td><?php echo $row["cart_id"];?></td>
<td><img src="admin/<?php echo $row['photo'];?>" style="width:50px; height:50px"></td>
<td><?php echo $row["foodname"];?></td>
<td><?php echo $row["quantity"];?></td>
<td><?php echo $row["subtotal"];?></td>
</tr>
<?php 
}
?>
<tr>
<td colspan="10" align="right">
<h4 class="bg-dark text-white p-3 w-100" >Subtotal of Products Rs.<?php echo $subtotal[0]["total"];?></h4>
</td>
</tr>
<tr>
<?php if(!$hash) { ?>
            <td colspan="6"><input type="submit" value="Order Now >>" class="w-100 btn btn-lg btn-dark text-white" /></td>
<?php } ?>
</table>

</div>
</form>

</div>
</div>
