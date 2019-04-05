@extends('layout.layout') 
@section('title', 'Home') 
@section('content')

<div id="myCarousel" class="carousel slide" style="margin-top: 115px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 305px;">
      <div class="item active">
        <img src="/images/banner-2.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="/images/banner-3.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="/images/banner-4.jpg" alt="New york" style="width:100%;">
      </div>
       <div class="item">
        <img src="/images/banner-5.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 <div class="container">
        <div class="Custom">
          <div class="article ImgwidthHeight customArticleCss" style="height: 300px;">
            <h2 style="padding-left: 2%;"><span>Our Story</span></h2>
            <div class="col-md-12">
              <strong>
                City Ex-Im was established by Shaswat Singh with one mission: to bring a real, high quality Products for India that can make our lives easier and secure. Our passion for excellence is what inspired us in the beginning and it continues to drive us today. We pride ourselves in the long-term relationships we’ve built with our customers. Our passion for excellence is what drove us from the beginning and it still drives us now. In fact, it’s what makes us tick. Our unique product is one of a Kind and makes our lives safe in Hospitals proving unmatched comfort to patient. People come back for our product because they know they’ll find what they’re looking for on our shelves - and if they don’t, we’ll help them find it. Try ones to see for yourself!
              </strong>
              <h4>From Founder</h4>
<p>“According to me Development is understand and accepting the changes that could help us in any way.”</p>
             </div>

           </div>
        <div class="article customArticleCss" style="height: 400px;">
          <h2 style="padding-left: 2%;"><span>About The Founder</span></h2>
          <div class="clr"></div>
          <div class="col-md-12">
           <!--  <img src="/images/webpik.jpg" style="height: 308px;width: 360px;">
          </div>
          <div class="col-md-7"> -->
<h3>SHASWAT SINGH</h3>
<p><strong>Experienced Custom Administrator with a demonstrated history in working in Export-Import, Freight Delivery Industry skilled in Strategic Planning.
Information technology professional with Masters of Business Administration focused in International Business & Supply Chain.</strong>
</p>
<p>
is the founder of My City Ex-Im, the innovative start-up company that creates availability  of  products & services, While attending the University specialized  in International Business he realized the importance of the availability  of products and services that are not at all or easily available  in our country and how could international business can help us. 
Thus started working with an  Forbs MNC  to know more  as he knew the potential of International Business and how it could help our country to provide world class services and products, thus to create the availability of unavailable and enhance your services in country started this Organization.
 </p>
          </div>
          
        </div>
    </div>
</div>
@endsection