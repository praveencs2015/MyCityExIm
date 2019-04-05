<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My City</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="csrf-token" content="{{ csrf_token() }}">
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<link href="/css/app.css" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="/css/thumbnail-slider.css" />
<link rel="stylesheet" type="text/css" href="/css/thumbs2.css" />
<script type="text/javascript" src="/js/thumbnail-slider.js"></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<script type="text/javascript" src="/js/cufon-georgia.js"></script>
<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/coin-slider.min.js"></script>
</head>
<body>
  <?php
$cartItem=Session::get('cart_item');
$countCart=count($cartItem);

  ?>
<div class="main" style="   ">
  <div class="col-md-12 " style="background-color: #fff; 
    z-index: 9999;    min-height: 130px;">
    <div class="container">
     <div class="header">
       <div class="logo">
        <h1 style="margin:0px;"><a href="/"><img src="/images/Completelogo.jpeg"  style="margin-top: -50px; margin-left: -45px;height:130px;width: 221px;" width="75" height="75" alt="" class="gal" /></a></h1>
      </div>      
      <div class="col-md-9 RoundSocialIcon RoundIconResponsive" style="float: right;     width: 963px;sright: -104px;">
          <div class="col-md-4" style="float: left">
              <a target="_blank" href="">
               <i class="fa fa-facebook icon imgsize "></i>
            </a> 
            <a target="_blank" href="">
             <i class="fa fa-twitter  icon imgsize"></i>
            </a>
            <a target="_blank" href="">
              <i class="fa fa-youtube  icon imgsize" aria-hidden="true"></i>

            </a>
            <a target="_blank" href="">
             <i class="fa fa-instagram icon imgsize" aria-hidden="true"></i>

               </a>
               <a target="_blank" href="https://plus.google.com/u/0/+YouthHostelsAssociationofIndia">
             <i class="fa fa-google-plus icon imgsize" aria-hidden="true"></i>

               </a>
               <a target="_blank" href="https://in.pinterest.com/yhaindia/">
             <i class="fa fa-pinterest-p icon imgsize" aria-hidden="true"></i>

               </a>
          </div>
          <div class="col-md-offset-1" style="float: left; ">
            <p class="Address"> <img src="/images/flag.PNG"><span style="padding: 4px;">5, Nyaya Marg,</span><span style="padding: 4px;"> Chanakyapuri, New Delhi</span></p>
            <p class="MobileStyle"><img src="/images/phone.PNG"><span style="padding: 4px;">011-29399022</span></p>
          </div>
         
  <a href="/AddCartItem"><div class="col-md-1" style="float: right;color: #000"><i class="fa fa-shopping-cart" style="    font-size: 23px;
    margin-top: 6px;"></i><span class="CartCount">{{$countCart}}</span></div>
         </div>
        </a>
      <div class="header_resize">
       <div class="menu_nav" >
        <ul>
          <li class="active"><a href="/" ><span style="font-size: 18px; color: darkgoldenrod">Home</span></a></li>
          <li class=""><a href="/about" ><span style="font-size: 18px;">About Us</span></a></li>
           <li><a href="/unified"><span style="font-size: 18px;">Our Services</span></a></li>
           <li class="dropdown">
          <a href="#" >
           <span class="dropbtn" style="font-size: 18px;"><input type="hidden" name="VisitorData" id="ProductVisitor" value=""> Our Products</span>
            <div class="dropdown-content">
              <a href="/peelAway" id="PeelAway" style="padding: 15px;">
                Product List</a>
              <a href="/ProductOverview" style="padding: 15px;">Product Description</a>
            </div>
          </a>
          </li>
          <!--  <li><a href="/peelAway"><span style="font-size: 18px;">Our Products</span></a></li> -->
          <li><a href="/contact"><span style="font-size: 18px;">Contact Us</span></a></li>
        </ul>
      </div>

      <div class="clr"></div>

      <div class="clr"></div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="content">
    <div class="content_resize" style="padding-bottom: 0px;min-height: 605px;">
        @yield('content')
    </div>
  </div>
</div>
 <div class="footer" style="clear: both;">
    <div class="footer_resize">
      <p class="lf" style="margin: 10px 0 !important; padding: 12px;"><a href="#">Copyright © 2018. All Right Reserved to MyCity Ex-Im</a>.</p>
      <a href="http://www.ingencorp.in/">
         <p class="rf" style="margin: 10px 0 !important;padding: 12px;">Design & Maintained 
        <img src="/images/ingenCorplogo.png" style="width: 140px;"></p>
      <div style="clear:both;"></div>
      </a>
     
    </div>
  </div>
</div>

</body>

</html>
