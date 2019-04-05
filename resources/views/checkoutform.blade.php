@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<div class="container">
	<div class="col-md-12">
	<div class=" customArticleCss  responseHeightForm">
     <h2 style="padding-left: 2%; height: auto;"><span>Please Enter </span> Personal Details</h2>
        <p>
 <form action="/pgRedirect" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 	<div class="col-md-6">
 	 First name:<br>
  <input type="text" style="width: 100%" name="firstname" value="Mickey">
  <br>	
 	</div>
 <div class="col-md-6">
  Last name:<br>
  <input type="text" style="width: 100%" name="lastname" value="">
  <br><br>
</div>
<div class="col-md-6">
   Mobile No:<br>
  <input type="text" style="width: 100%" name="MSSIDN" value="">
  <br><br>
</div>
<div class="col-md-6">
   Email:<br>
  <input type="text" style="width: 100%" name="EMAIL" value="">
  <br><br>
</div>
<div class="col-md-6">
   Address:<br>
  <textarea name="Address" style="width: 100%" value=""></textarea>
  <br><br>
</div>
  <div class="col-md-12">
  	
<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST<?php echo  "ORDS" . rand(0,100)?>">
<input type="hidden" id="TXN_AMOUNT"  name="TXN_AMOUNT" value="<?php echo  $_POST['TXN_AMOUNT']; ?>">
<input type="hidden" id="INDUSTRY_TYPE_ID"  name="INDUSTRY_TYPE_ID" value="Retail">
<input type="hidden" id="CHANNEL_ID"  name="CHANNEL_ID" value="WEB">
<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
  <input type="submit" value="Submit">
</div>
</form> 
</p>
</div>	
</div>
</div>

@endsection