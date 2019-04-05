@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<?php 
 // print_r($_POST);
 // die;

?>
<div id="shoppingStyle" style="min-height:660px;">

<div id="product-grid">
	<div class="txt-heading">Products</div>
@foreach($productByCode as $Product)
		<div class=" product-item" style="height:440px">
			<form method="post" action="/AddCartItem">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="product-image"><img src="/images/{{$Product->productImage}}" style="    width: 269px;
    height: 320px;
    padding: 24px;"></div>
			<div class="product-tile-footer">
			<div class="product-title">{{$Product->productName}}</br>
			INR {{$Product->productPrice}}</div>
			<div class="cart-action">
				<input type="Hidden" class="productId" name="ProductId" value="{{$Product->id}}"  />
				<input type="Hidden" class="action" name="action" value="add"  />
				<input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit"  value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	@endforeach
</div>
</div>
@endsection