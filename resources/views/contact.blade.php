@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<div class="container">
   <div class="mainbar" style="margin-top:40px;">
        <div class="article">
          <div class="" style="padding-left:15px">
             <h2><span>Send us</span> mail</h2>
          <div class="clr"></div>
          <form action="/contactQuery" method="post" enctype="multipart/form-data">

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" required="required" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="email" required="required" name="email" class="text" />
              </li>
              <li>
                <label for="website">Website</label>
                <input id="website" required="required" name="website" class="text" />
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" required="required" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="image" required="required" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
          </div>
        </div>
      </div>
     
      <div class="clr"></div>
    </div>
  </div>
</div>
     
 
@endsection
