@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/WhatsApp3.jpeg" width="1100" height="360" alt="" /> </a> <a href="#"><img src="images/WhatsApp Image1.jpeg" width="1100" height="360" alt="" /> </a> <a href="#"><img src="images/WhatsApp2.jpeg" width="1100" height="360" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="container">
        <div class="mainbar">
        <div class="article">
          <h2><span>Support to</span> Company Name</h2>
          <div class="clr"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Suspendisse nulla ligula, blandit ultricies aliquet ac, lobortis in massa. Nunc dolor sem, tincidunt vitae viverra in, egestas sed lacus.</strong> Etiam in ullamcorper felis. Nulla cursus feugiat leo, ut dictum metus semper a. Vivamus euismod, arcu gravida sollicitudin vestibulum, quam sem tempus quam, quis ullamcorper erat nunc in massa. Donec aliquet ante non diam sollicitudin quis auctor velit sodales. Morbi neque est, posuere at fringilla non, mollis nec nibh. Sed commodo tortor nec sem tincidunt mattis. Nam convallis aliquam nibh eu luctus. Nunc vel tincidunt lacus. Suspendisse sit amet pulvinar ante.</p>
          <p>Phasellus diam justo, laoreet vel vulputate eu, congue vel est. Maecenas eros libero, sollicitudin a vulputate fermentum, ultrices vel lacus. Nam in metus non augue fermentum consequat ultrices ac enim. Integer aliquam urna non diam aliquam eget hendrerit sem molestie.</p>
          <p><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget bibendum tellus. Nunc vel imperdiet tellus. Mauris ornare aliquam urna, accumsan bibendum eros auctor ac.</p>
          <ul class="sb_menu">
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
          </ul>
        </div>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
              Unlimited Amazing Stock Photos</li>
            <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="http://www.csshub.com/">CSS Hub</a><br />
              Premium CSS Templates</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
      </div>
 
@endsection
