@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<?php
// echo $cart_item[$productId]['image'];
// die;
 $cart_item=Session::get('cart_item');
if(isset($cart_item)){
    $total_quantity = 0;
    $total_price = 0;
?>	
<a id="btnEmpty" href="/AddCartItem/{empty}">Empty Cart</a>	
<table class="tbl-cart table" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	 
<tr>
<?php
if(isset($cart_items) && !empty($cart_items)){
    foreach ($cart_items as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr style="    height: 100px;">
				<td><img src="/images/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["productName"]; ?></td>
				<td><?php echo $item["id"]; ?></td>
				<td style="text-align:center;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "INR ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "INR ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="/images/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
	}
		

?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "INR ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>	
<a href="/peelAway">
   <button class="btn btn-group" type="button" style="float:left;background-color: #00a69c; color :#fff" name="ContinueShopping">Continue Shopping</button>
</a>
	<form action="/CheckOut" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" id="TXN_AMOUNT"  name="TXN_AMOUNT" value="<?php echo  number_format($total_price, 2); ?>">
	
   <button class="btn btn-group" type="submit" style="float:right;background-color: #00a69c; color :#fff" name="ContinueShopping">Checkout</button>	
	</form>
	
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
@endsection