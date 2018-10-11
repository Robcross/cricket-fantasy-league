<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>11ADMIN</title>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous">
    </script>
    <style type="text/css">
        /* line 1, ../sass/shared/_site.scss */
body {
  background-image: url(ressources/images.jpg);
   background-size: cover;
  font-family: 'Roboto', sans-serif;
  color: #fff;
  margin: 0;
  padding: 0;
}
/* line 8, ../sass/shared/_site.scss */
body #page .navi-slot {
  background: #FF5644;
  position: fixed;
  top: 0;
  left: 0;
  width: 20%;
  height: 100vh;
}
/* line 15, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper {
  padding: 30px 0 0;
}
/* line 17, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .logo {
  font-size: 50px;
  text-decoration: none;
  color: #fff;
  display: block;
  text-align: center;
  font-weight: bold;
}
/* line 25, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items {
  margin-top: 20px 0 0;
  padding: 0;
  list-style-type: none;
}
/* line 30, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li a {
  padding: 15px;
  display: block;
  text-decoration: none;
  color: #fff;
  border-bottom: solid 1px #ff3f2b;
  border-top: solid 1px #ff6d5e;
  cursor: pointer;
}
/* line 39, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li .sub-menu {
  margin-top: 0;
  background: #ff6d5e;
  padding-left: 10px;
}
/* line 44, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li .sub-menu li a {
  border: none;
}
/* line 49, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li.sub {
  position: relative;
}
/* line 51, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li.sub:after, body #page .navi-slot .nav-wrapper .menu-items li.sub:before {
  content: '';
  position: absolute;
  height: 3px;
  width: 15px;
  background: #fff;
  top: 25px;
  right: 15px;
  margin: auto;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
/* line 62, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li.sub:after {
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
/* line 66, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li.sub.open:after {
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
}
/* line 69, ../sass/shared/_site.scss */
body #page .navi-slot .nav-wrapper .menu-items li.sub.open:before {
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
/* line 78, ../sass/shared/_site.scss */
body #page .content-slot {
  width: 80%;
  margin-left: 20%;
}
/* line 81, ../sass/shared/_site.scss */
body #page .content-slot > div.sections {
  -webkit-box-shadow: 0 5px 10px -4px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 5px 10px -4px rgba(0, 0, 0, 0.3);
  box-shadow: 0 5px 10px -4px rgba(0, 0, 0, 0.3);
  background: #fff;
  padding: 25px 50px 50px;
}
/* line 85, ../sass/shared/_site.scss */
body #page .content-slot > div.sections h1 {
  font-size: 40px;
  margin: 25px 0;
}
/* line 89, ../sass/shared/_site.scss */
body #page .content-slot > div.sections h2 {
  font-size: 35px;
  margin: 25px 0;
}
/* line 93, ../sass/shared/_site.scss */
body #page .content-slot > div.sections h3 {
  font-size: 30px;
  margin: 25px 0;
}
/* line 97, ../sass/shared/_site.scss */
body #page .content-slot > div.sections p {
  font-size: 16px;
  line-height: 1.5;
}
/* line 101, ../sass/shared/_site.scss */
body #page .content-slot > div.sections img {
  max-width: 100%;
}
/* line 104, ../sass/shared/_site.scss */
body #page .content-slot > div.sections#page-1 {
  background: #303030;
}
/* line 107, ../sass/shared/_site.scss */
body #page .content-slot > div.sections#page-2 {
  background: #3AA1BF;
}
/* line 109, ../sass/shared/_site.scss */
body #page .content-slot > div.sections#page-2 img {
  float: right;
  padding: 15px 30px;
  padding-right: 0;
}
/* line 115, ../sass/shared/_site.scss */
body #page .content-slot > div.sections#page-3 {
  background: #F5A503;
}
/* line 117, ../sass/shared/_site.scss */
body #page .content-slot > div.sections#page-3 img {
  float: left;
  padding: 15px 30px;
  padding-left: 0;
}
/* line 123, ../sass/shared/_site.scss */
body #page .content-slot > div.sections#page-4 {
  padding: 0;
}

		.site-link{
      padding: 5px 15px;
			position: fixed;
			z-index: 99999;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 10px;
		}
    .site-link a{
      text-decoration: none;
      color: #0af !important;
          transform: translateY(-8px);
    display: inline-block;
    }
		.site-link img{
      
          transform: translateY(10px);
			width: 30px;
			height: 30px;
		}
	</style>
    <script type=text/javascript>
    $(document).ready(function(){
			$("a").on('click', function(event) {
				if (this.hash !== "") {
					event.preventDefault();
					var hash = this.hash;
					$('html, body, .content-slot').animate({
						scrollTop: $(hash).offset().top
					}, 500, function(){
						window.location.hash = hash;
					});
				}
			});
  
			$('.sub .sub-menu').hide();
			$('.sub').click(function(){
				$(this).find('.sub-menu').slideToggle();
        
				$(this).toggleClass('open');
			});
		});
    </script>
    </head>
    <body>
    <div id="page">
		<div class="navi-slot">
			<nav class="nav-wrapper">
			<a href="admin.php" class="logo">DREAM 11</a>
			<ul class="menu-items">
				<li class="sub"><a>Matches</a>
					<ul class="menu-items sub-menu">
						<li><a href="iccteams.php">ICC</a></li>
						<li><a href="iplteams.php">IPL</a></li>
					</ul>
				</li>
				<li><a href="showteams.php">Dream Teams</a></li>
				<li><a href="#page-4">Item - 5</a></li>
			</ul>
			</nav>
		</div>
        </div>

<div class="site-link">
		<a href="logout.php">
			Sign <img src="http://creatorvisions.com/img/new-logo-2.png"> 
		Off</a>
	</div>
    </body>

   </html>
    
    