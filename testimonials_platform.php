<?php
	$url1 = $_SERVER['REQUEST_URl'];
	header("Refresh: 90; URL = $url1");
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.html");
		exit();
	}
	
	//Create query
	$qry="select * from testimonial order by Testimonial_Id DESC";
	$result=mysql_query($qry);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Testimonials</title>
<meta name="author" content="Muzi Mhlongo">
<meta name="generator" content="WYSIWYG Web Builder 8 - http://www.wysiwygwebbuilder.com">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<style type="text/css">
div#container
{
   width: 1204px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   text-align: center;
   margin: 0;
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #C8D7EB;
   text-decoration: underline;
}
a:visited
{
   color: #C8D7EB;
}
a:active
{
   color: #C8D7EB;
}
a:hover
{
   color: #376BAD;
   text-decoration: underline;
}
</style>
<style type="text/css">
#Image1
{
   border: 0px #000000 solid;
}
#Shape1
{
   border-width: 0;
   height: 56px;
   width: 1197px;
}
#Shape2
{
   border-width: 0;
   height: 49px;
   width: 1199px;
}
#Image2
{
   border: 0px #000000 solid;
}
#Image3
{
   border: 0px #000000 solid;
}
#Image4
{
   border: 0px #000000 solid;
}
#Shape6
{
   border-width: 0;
   height: 73px;
   width: 986px;
}
#Shape7
{
   border-width: 0;
   height: 311px;
   width: 223px;
}
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text1 div
{
   text-align: center;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text2 div
{
   text-align: center;
}
#SiteSearch1_keyword
{
   border: 1px #C0C0C0 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
.autocomplete
{
   position: absolute;
   background: #FFFFFF;
   border: 1px solid #C0C0C0;
   font-family: Arial;
   font-size: 13px;
   list-style-type: none;
   z-index: 999;
   padding: 0;
   top: 28px;
   width: 278px;
   margin: 0;
}
.autocomplete li
{
   padding: 0;
   margin: 0;
}
.autocomplete li.selected
{
   background: #008;
   color: #FFFFFF;
}
#SiteSearch1_label
{
   color: #C0C0C0;
   cursor: text;
   font-family: Arial;
   font-size: 13px;
}
#Marquee1
{
   background-color: transparent;
   background-image: url(images/Comp%20-%20Copy.png);
   background-repeat: repeat;
   background-position: left top;
   border: 1px #0000FF none;
   -moz-border-radius: 10px;
   -webkit-border-radius: 10px;
   border-radius: 10px;
   text-align: center;
   -moz-box-shadow: 0px 0px 2px #000000;
   -webkit-box-shadow: 0px 0px 2px #000000;
   box-shadow: 0px 0px 2px #000000;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text3 div
{
   text-align: center;
}
#Shape5
{
   border-width: 0;
   height: 249px;
   width: 205px;
}
#wb_Text9 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text9 div
{
   text-align: left;
}
#Image5
{
   border: 0px #000000 solid;
}
#TabMenu1
{
   text-align: left;
   float: left;
   margin: 0;
   width: 100%;
   font-family: Arial;
   font-size: 21px;
   font-weight: bold;
   list-style-type: none;
   padding: 21px 0px 16px 18px;
}
#TabMenu1 li
{
   float: left;
}
#TabMenu1 a:link.active, #TabMenu1 a:visited.active, #TabMenu1 a:hover.active
{
   border-bottom: 1px solid #0000FF;
   background-color: #0000FF;
   color: #FFFFFF;
   position: relative;
   font-weight: bold;
   font-style: italic;
   text-decoration: underline;
}
#TabMenu1 a:link, #TabMenu1 a:visited
{
   padding: 9px 80px 16px 10px;
   border: 3px solid #000000;
   border-top-left-radius: 18px;
   border-top-right-radius: 18px;
   background-color: #7F7F7F;
   color: #FFFFFF;
   margin-right: 6px;
   text-decoration: none;
   border-bottom: none;
}
#TabMenu1 a:hover
{
   background: #FF0000;
   color: #000000;
   font-weight: normal;
   text-decoration: underline;
}
#Table1
{
   border: 2px #C0C0C0 solid;
   background-color: #E6E6FA;
   border-spacing: 1px;
}
#Table1 td
{
   padding: 0px 0px 0px 0px;
}
#Table1 td div
{
   white-space: nowrap;
}
#Shape3
{
   border-width: 0;
   height: 46px;
   width: 661px;
}
#wb_Text4 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text4 div
{
   text-align: left;
}
#wb_Text11 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text11 div
{
   text-align: left;
}
</style>
<script type="text/javascript" src="./jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./jquery.effects.core.min.js"></script>
<script type="text/javascript" src="./jquery.effects.blind.min.js"></script>
<script type="text/javascript" src="./jquery.effects.bounce.min.js"></script>
<script type="text/javascript" src="./jquery.effects.clip.min.js"></script>
<script type="text/javascript" src="./jquery.effects.drop.min.js"></script>
<script type="text/javascript" src="./jquery.effects.fold.min.js"></script>
<script type="text/javascript" src="./jquery.effects.scale.min.js"></script>
<script type="text/javascript" src="./jquery.effects.slide.min.js"></script>
<script type="text/javascript" src="./wb.slideshow.min.js"></script>
<script type="text/javascript" src="./searchindex.js"></script>
<script type="text/javascript">
<!--
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch1_keyword');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>Search results</title></head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            html = html + '<b><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'</a></b><br>Description:' + searchResults[n].description + '<br>Keywords:' + searchResults[n].keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            html = html + 'No results';
         }
         html = html + '</span>';
         html = html + '</body></html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
// -->
</script>
<script type="text/javascript">
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      effectlength: 2000
   });
   var $search = $('#SiteSearch1_form');
   var $searchInput = $search.find('input');
   var $searchLabel = $search.find('label');
   if ($searchInput.val())
   {
      $searchLabel.hide();
   }
   $searchInput.focus(function()
   {
      $searchLabel.hide();
   }).blur(function()
   {
      if (this.value == '')
      {
         $searchLabel.show();
      }
   });
   $searchLabel.click(function()
   {
      $searchInput.trigger('focus');
   });

   var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch1_keyword');
   var selectedItem = null;
   var setSelectedItem = function(item)
   {
      selectedItem = item;
      if (selectedItem === null)
      {
         $autocomplete.hide();
         return;
      }
      if (selectedItem < 0)
      {
         selectedItem = 0;
      }
      if (selectedItem >= $autocomplete.find('li').length)
      {
         selectedItem = $autocomplete.find('li').length - 1;
      }
      $autocomplete.find('li').removeClass('selected').eq(selectedItem).addClass('selected');
      $autocomplete.show();
   };
   var populateSearchField = function()
   {
      $('#SiteSearch1_keyword').val($autocomplete.find('li').eq(selectedItem).text());
      setSelectedItem(null);
   };
   $('#SiteSearch1_keyword').attr('autocomplete', 'off').keyup(function(event)
   {
      if (event.keyCode > 40 || event.keyCode == 8)
      {
         var data = new Array();
         var keywordVal = $('#SiteSearch1_keyword').val();
         for (i=0; i<database_length; i++)
         {
            var words = (searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords).toLowerCase();
            var array = words.split(" ");
            data = $.merge(data, array);
         }

         var unique = new Array();
         o:for(var i = 0; i < data.length; i++)
         {
            for(var j = 0; j < unique.length; j++)
            {
               if(unique[j]==data[i]) continue o;
            }
            unique[unique.length] = data[i];
         }

         unique.sort();
         if (keywordVal.length && unique.length)
         {
            $autocomplete.empty();
            $.each(unique, function(index, term)
            {
               term = term.toLowerCase();
               if (term.indexOf(keywordVal) == 0)
               {
                  $('<li></li>').text(term).appendTo($autocomplete).mouseover(function()
                  {
                     setSelectedItem(index);
                  }).click(populateSearchField);
               }
            });
            setSelectedItem(0);
         }
         else
         {
            setSelectedItem(null);
         }
      }
      else
      if (event.keyCode == 38 && selectedItem !== null)
      {
         setSelectedItem(selectedItem - 1);
         event.preventDefault();
      }
      else
      if (event.keyCode == 40 && selectedItem !== null)
      {
         setSelectedItem(selectedItem + 1);
         event.preventDefault();
      }
      else
      if (event.keyCode == 27 && selectedItem !== null)
      {
         setSelectedItem(null);
      }
   }).keypress(function(event)
   {
      if (event.keyCode == 13 && selectedItem !== null)
      {
         populateSearchField();
         event.preventDefault();
      }
   }).blur(function(event)
   {
      setTimeout(function()
      {
         setSelectedItem(null);
      }, 250);
   });
});
</script>
</head>
<body>
<div id="container">
<div id="SlideShow1" style="position:absolute;left:392px;top:51px;width:687px;height:282px;z-index:0;">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;" src="images/103_2562%20%282%29.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2563.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2565%20%282%29.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2566.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2567%20%282%29.jpg" alt="" title="">
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:50px;width:1199px;height:270px;z-index:1;">
<img src="images/img0053.png" id="Image1" alt="" border="0" style="width:1199px;height:270px;"></div>
<div id="wb_Shape1" style="position:absolute;left:1px;top:322px;width:1197px;height:56px;z-index:2;">
<img src="images/img0054.gif" id="Shape1" alt=""></div>
<div id="wb_Shape2" style="position:absolute;left:0px;top:0px;width:1199px;height:49px;z-index:3;">
<img src="images/img0055.gif" id="Shape2" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:1104px;top:110px;width:47px;height:46px;z-index:4;">
<a href="https://www.facebook.com/flightconnector?skip_nax_wizard=true&ref_type=bookmark" target="_blank"><img src="images/115.png" id="Image2" alt="" border="0" style="width:47px;height:46px;"></a></div>
<div id="wb_Image3" style="position:absolute;left:1105px;top:162px;width:46px;height:45px;z-index:5;">
<a href="https://twitter.com/@flightconnector" target="_blank"><img src="images/116.png" id="Image3" alt="" border="0" style="width:46px;height:45px;"></a></div>
<div id="wb_Image4" style="position:absolute;left:1109px;top:219px;width:36px;height:37px;z-index:6;">
<a href="http://www.google.com" target="_blank"><img src="images/google.png" id="Image4" alt="" border="0" style="width:36px;height:37px;"></a></div>
<div id="wb_Shape6" style="position:absolute;left:122px;top:383px;width:986px;height:73px;z-index:7;">
<img src="images/img0056.gif" id="Shape6" alt=""></div>
<div id="wb_Shape7" style="position:absolute;left:883px;top:459px;width:223px;height:311px;z-index:8;">
<img src="images/img0057.gif" id="Shape7" alt=""></div>
<div id="wb_Text1" style="position:absolute;left:152px;top:392px;width:652px;height:34px;text-align:center;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:29px;"><strong>Testimonials From Our Valuable Customers</strong></span></div>
<div id="wb_Text2" style="position:absolute;left:906px;top:469px;width:178px;height:29px;text-align:center;z-index:10;">
<span style="color:#000000;font-family:Arial;font-size:24px;"><strong>Contact Us</strong></span></div>
<div id="wb_SiteSearch1" style="position:absolute;left:879px;top:10px;width:276px;height:26px;z-index:11;">
<form name="SiteSearch1_form" id="SiteSearch1_form" onsubmit="return searchPage(features)">
<input type="text" id="SiteSearch1_keyword" style="position:absolute;left:0px;top:0px;width:276px;height:26px;line-height:26px;;" name="SiteSearch1_keyword" value="">
<label id="SiteSearch1_label" style="position:absolute;left:1px;top:6px;" for="SiteSearch1_keyword">Search this website</label>
</form>
</div>
<marquee direction="right" scrolldelay="90" scrollamount="6" behavior="alternate" loop="0" style="position:absolute;left:42px;top:285px;width:1104px;height:24px;z-index:12;" id="Marquee1" onmouseover="this.stop()" onmouseout="this.start()"><span style="color:#FFFFFF;font-family:Arial;font-size:21px;"><strong>&quot;Your Reliable Transport To OR Tambo International Airport&quot;</strong></span></marquee>
<div id="wb_Text3" style="position:absolute;left:51px;top:225px;width:299px;height:48px;text-align:center;z-index:13;">
<span style="color:#FFFFFF;font-family:Arial;font-size:21px;"><strong><em>Flight Connector (Pty) Ltd<br>&quot;LaNkwali Transport&quot;</em></strong></span></div>
<div id="wb_Shape5" style="position:absolute;left:892px;top:507px;width:205px;height:249px;z-index:14;">
<img src="images/img0058.gif" id="Shape5" alt=""></div>
<div id="wb_Text9" style="position:absolute;left:901px;top:522px;width:157px;height:80px;z-index:15;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Tel:&nbsp; (+268) 2404 6353<br>Cell: (+268) 7626 9498<br><br>Email: <a href="mailto:flightconnector@swazi.net" style="color:#000">flightconnector@swazi.net</a></span></div>
<div id="wb_Image5" style="position:absolute;left:76px;top:59px;width:288px;height:167px;z-index:16;">
<img src="images/Shuttle.png" id="Image5" alt="" border="0" style="width:288px;height:167px;"></div>
<div id="wb_TabMenu1" style="position:absolute;left:31px;top:313px;width:1133px;height:66px;z-index:17;overflow:hidden;">
<ul id="TabMenu1">
<li><a href="./index.html">Home</a></li>
<li><a href="./profile.html">Profile</a></li>
<li><a href="./services.html">Services</a></li>
<li><a href="https://www.facebook.com/flightconnector/photos_stream" target="_blank">Gallery</a></li>
<li><a href="./bookings.php">Bookings</a></li>
<li><a href="./testimonials.php">Testimonials</a></li>
</ul>
</div>
<table style="position:absolute;left:124px;top:465px;width:752px;height:502px;z-index:18;" cellpadding="0" cellspacing="1" id="Table1" >
<tr>
<td style="background-color:transparent;border:1px #C0C0C0 solid;text-align:left;vertical-align:top;height:494px;"><br><br>


 <?php 

  while ($member = mysql_fetch_array ($result)) {
			//Successful
			
		echo "  <table  border='0'>
			
				
				
			  <tr><td width='750'><font color='#000'><br><hr><b>From :{$member['Name']}&nbsp;&nbsp;{$member['Surname']}</b></td></tr>
			   
			    <tr><td width='750'><font color='#000'><b>Testimonial :</b>{$member['Testimonial_Detail']}</td></tr>
				 <tr><td width='750'><font color='#000'><b>Date :</b>{$member['date_of_test']}</td></tr>
		        
			</table> ";
          }
		  ?>




</td>
</tr>
</table>
<div id="wb_Shape3" style="position:absolute;left:175px;top:470px;width:661px;height:46px;z-index:19;">
<img src="images/img0059.gif" alt="" name="Shape3" height="29" id="Shape3"></div>
<div id="wb_Text4" style="position:absolute;left:339px;top:487px;width:347px;height:19px;z-index:20;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong><a href="./testimonials.php" style="color:#000">Click Here To Feed Your Testimonials</a></strong></span></div>
<div id="wb_Text11" style="position:absolute;left:904px;top:616px;width:167px;height:38px;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:17px;"><strong>&nbsp; We are based in Mbabane Swaziland</strong></span></div>
</div>
</body>
</html>
