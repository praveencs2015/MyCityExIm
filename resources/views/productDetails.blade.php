@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<!-- <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/p1.JPG"  alt="" /> </a> <a href="#"><img src="images/Corner_Peel_Away.jpg" width="1100" height="360" alt="" /> </a> <a href="#"><img src="images/Peeling_Process_3.jpg" width="1100" height="360" alt="" /> </a> </div>
        <div class="clr"></div>
      </div> -->
      <div class="container">
        <div class="mainbar">
      
          <div class=" customArticleCss DetailedHeight" id="ProductHeightDetails" style="height:570px;margin-top:155px !important; " >
          <h2 style="padding-left: 2%; height: auto;"><span>Our</span> Product</h2>
           <p>
          <div class="clr"></div>
          <div class="col-md-6 ProductAlign">
            <div>
            <a href=""><img src="/images/{{$selectCount->productImage}}" ></a>  
            </div>
             <h3>{{$selectCount->productName}}</h3>
            <span>Unbelievably Soft and Waterproof</span>
           <!--  <span>$16.49-$21.99</span> -->
          </div>
          <div class="col-md-6 detailAlign detailAlignResp" >
          <h1>{{$selectCount->productName}}</h1> 
  INR <span style="font-size: 25px;"> {{$selectCount->productPrice}}</span>
          <div style="padding: 5%;">
          {{$selectCount->productDescription}}
          </div>
            <form method="post" action="/AddCartItem">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="">
              <input type="Hidden" class="productId" name="ProductId" value="{{$selectCount->id}}"  />
        <input type="Hidden" class="action" name="action" value="add"  />
        <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
        <input type="submit" style="background-color: #00a69c; color :#fff"  value="Add to Cart" class="btnAddAction" />
         
         
          </div>
        </form>
          </div>
          </p>
          </div>
  </div>
      </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
window.onload = function(e){ 
     // var Visitor = document.getElementById('#ProductVisitor');
     var visitorData=$("#ProductVisitor").val('1'); 
     $.ajax({

         type: "GET",
         url: "/SaveVisitor",
         data: visitorData,
          success: function(msg){
            alert(msg);

         }
       });

     
    };
  });

</script>

 
 @endsection