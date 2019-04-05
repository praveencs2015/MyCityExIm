@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<div class="container">
   <div class="mainbar" style="margin-top: 115px !important;">
    <div class="col-md-12 darkgoldenrod">
      <div class="col-md-6" style="z-index: 99; color: darkgoldenrod;">
        <h2>Experience</h2>
        <h4>Hope Is Where the Heart Is</h4>
        <p>MY CITY wants to spread our message of hope and compassion. We believe that a single action can make a difference in the community, and that collective action can greatly impact the world. Through advocacy and outreach activities, our team works tirelessly each day to contribute their part to the greater good.</p>
      </div>
        <div class="col-md-6" style="margin-left: -692px;">
        <img class="contactImg" src="/images/contact.jpg">
      </div>
    </div>
    <div class="col-md-6 darkgoldenrod" >
      <div class=" customArticleCss  responseHeight" style="height: 170px;   ">
          <div class="" >
             <h2><span>My City</span> Ex-Im</h2>
          <div class="clr"></div>
        <p class="contact_info">Plot No 10,Lane No-6D, Block-K, Mahipalpur, South West Delhi, Delhi, 110037 <br />
          <span>Mobile:</span>+91-80-9010-7155<br />
          <span>E-mail:</span> <a href="#">info@mycityexim.com</a></br>
          <span>E-mail:</span> <a href="#">sales@mycityexim.com</a> </p>
       </div>
      </div>
    </div>
    <div class="col-md-6">
       <div class="article customArticleCss " id="ProductObjective"  style="height: 265px;border: none;">
          <div class="" >
             <h2 style="margin-left: 12px;"><span>Send us</span> mail</h2>
          <div class="clr"></div>
          <form action="/contactQuery" method="post" enctype="multipart/form-data">

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="">
            <div class="col-md-6">
            <input id="name" required="required" placeholder="Name" name="name" class="text" />
          </div>
          <div class="col-md-6">
              <input id="email" required="required" placeholder="Email" name="email" class="text" />
          </div>
          </div>
          <div class="top">
            <div class="col-md-12">
                <input id="website" required="required" style="width: 90%;margin-top: 15px;"  placeholder="Mobile"  name="website" class="text" />
            </div>
          </div>
            
        </br> 
        <div class="top">
          <div class="col-md-12">
                <input id="subject" required="required" style="width: 90%;margin-top: 12px;" placeholder="Subject"  name="subject" class="text" />
          </div>
        </div>
      </br>
        <div class="top">
          <div class="col-md-12">
                <textarea id="message" required="required" style="width: 90%;margin-top: 15px;" placeholder="Your Message" name="message"></textarea>
          </div>
        </div>
          <div class="col-md-12">

            <div class="submitButton">
              <button type="submit"  style="width: 90%;margin-top: 15px;background-color: #ddd;
    color: #000;" name="submit">Click here & We will contact You</button>
            </div>
          </div>
          
            
          </form>
          </div>
        </div>
    </div>
       
      </div>
     
      <div class="clr"></div>
    </div>
  </div>
</div>
     
 
@endsection
