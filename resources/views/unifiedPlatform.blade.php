@extends('layout.layout') 
@section('title', 'Home') 
@section('content')


 <div id="myCarousel" class="carousel slide" style="margin-top: 115px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 305px;">
      <div class="item active">
        <img src="/images/unified.jpg" alt="Los Angeles" style="width:100%;">
      </div>
    </div>
   <!--   <div class="downStatement">
      	<h4>We Know Your Time is Valueable</h4>
      </div> -->
  </div>
  <div class="tab">
  	<button class="tablinks active" style="margin-left: 70px;    text-transform: uppercase; font-size: 18px; " onclick="openCity(event, 'Unified')">Unified Platform</button>
  <button class="tablinks" style="font-size: 18px;    text-transform: uppercase; " onclick="openCity(event, 'AirCraft')">AirCraft</button>
  <button class="tablinks" style="font-size: 18px;    text-transform: uppercase; " onclick="openCity(event, 'Order')">Order</button>
  <button class="tablinks" style="font-size: 18px;    text-transform: uppercase; " onclick="openCity(event, 'Econo')">Econo</button>
  </div>
<div class="container">
        <div class="mainbar">
        	<div class="row" >
        		<div class="col-md-12 ImgwidthHeight tabcontent boxshadowLogistics customArticleCssWithHeight"   id="Unified">
        			<div class="padding15"><h4>Unified PlatForm</h4></div>
				<div class="col-md-4">
					<img src="/images/unified2.jpg"class="imgWidthPadding">
				</div>
				<div class="col-md-8">
					<p class="pContent">
						India’s evolving economic landscape requires all sellers to continuously create more robust, efficient and technically advanced support for their business ranging from marketing to logistics. Maximizing the potential of your business requires re-defining business strategy and adapting to continuously evolving customer demands every day
					</p>
				</div>
			</div>
				<div class="col-md-12  ImgwidthHeight tabcontent boxshadowLogistics customArticleCssWithHeight" id="AirCraft">
				<div class="padding15"><h4>Air-Craft</h4></div>
				<div class="col-md-4">
					<img src="/images/air-craft.jpg"class="imgWidthPadding">
				</div>
				<div class="col-md-8">
					<p class="pContent">
						We provide a unified tracking solution for fleet management, helping owners maximize their capacity utilization. Our reporting and business intelligence tools provide real-time and periodic business performance metrics. Increase deployment efficiency by dispatching the closest vehicle to any job site; reduce phone calls to the drivers in the field and better customer satisfaction by enhanced response time and periodical alerts
					</p>
				</div>
			</div>
				<div class="col-md-12 ImgwidthHeight tabcontent boxshadowLogistics customArticleCssWithHeight" id="Order">
			<div class="padding15"><h4>Order</h4></div>
				<div class="col-md-4">
					<img src="/images/order1.jpg"class="imgWidthPadding">
				</div>
				<div class="col-md-8">
					<p class="pContent">Ease and Convenience, Mini-Truck within 60 minutes, Dedicated Support Staff.
					</p>
				</div>
			</div>
			<div class="col-md-12 ImgwidthHeight tabcontent boxshadowLogistics customArticleCssWithHeight" id="Econo">
						<div class="padding15"><h4>Econo</h4></div>
				<div class="col-md-4">
					<img src="/images/econo1.jpg"class="imgWidthPadding">
				</div>
				<div class="col-md-8">
					<p class="pContent">
						Widespread Network, Economical Pricing, Safety and Reliability, Advertisement.
					</p>
				</div>
			</div>
         </div>
    
  <div class="col-md-12 removeTrialtext" >

        <div style="float:left; width:100%;padding-top:98px;">
            <div id="thumbnail-slider">
                <div class="inner">
                    <ul>
                        <li>
                            <a class="thumb" href="/images/2.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/3.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/4.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/5.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/6.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/7.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/8.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/9.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/10.JPG"></a>

                        </li>
                         <li>
                            <a class="thumb" href="/images/2.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/3.JPG"></a>
                        </li>
                        <li>
                            <a class="thumb" href="/images/4.JPG"></a>
                    </ul>
                </div>
            </div>
        </div>
</div>
 </div>
</div>

<script type="text/javascript">
	$('#AirCraft').hide();
	$('#Order').hide();
	$('#Econo').hide();
	function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
@endsection