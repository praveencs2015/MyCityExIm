@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<?php


// following files need to be included

//will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	// echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		?>
		<div class="container" style="margin-top: 200px;">
			<div class="ResponseFont" style="text-align: center;font-size: 20px;"><b>Your Transaction  is successfull</b></div>
</div>
	<?php }
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>

<div class="container" style="margin-top: 100px;">
	<div style="margin: 0 auto;">
		<div class="col-md-3"></div>
		<div class="col-md-3" style="text-align: center;">
			
			<a href="/peelAway">
   <button class="btn btn-group" type="button" style="float:left;background-color: #00a69c; color :#fff" name="ContinueShopping">Continue Shopping</button>
</a>
</div>
<div class="col-md-3"  style="text-align: center;">
<a href="/">	
   <button class="btn btn-group" type="submit" style="float:right;background-color: #00a69c; color :#fff" name="ContinueShopping">HOME</button>	
</a>
</div>
<div class="col-md-3" ></div>
	</div>
</div>
@endsection