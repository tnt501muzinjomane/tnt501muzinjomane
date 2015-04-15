<?php
	//Start session
	require_once('auth.php');
	session_start();
    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Administration</title>
<meta name="author" content="Muzi Mhlongo">
<meta name="generator" content="WYSIWYG Web Builder 8 - http://www.wysiwygwebbuilder.com">
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
#Shape3
{
   border-width: 0;
   height: 199px;
   width: 1201px;
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
   height: 37px;
   width: 518px;
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
#wb_CssMenu1 a
{
   display: block;
   float: left;
   margin: 0px 4px 0px 0px;
   color: #FFFFFF;
   border: 3px #000000 solid;
   -moz-border-radius: 8px;
   -webkit-border-radius: 8px;
   border-radius: 8px;
   background-color: #C0C0C0;
   font-family: Arial;
   font-size: 19px;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
   width: 144px;
   height: 22px;
   vertical-align: middle;
   line-height: 22px;
   text-align: center;
   -moz-box-shadow: 1px 1px 0px #000000;
   -webkit-box-shadow: 1px 1px 0px #000000;
   box-shadow: 1px 1px 0px #000000;
}
#wb_CssMenu1 a:hover
{
   color: #376BAD;
   background-color: #EDF2F8;
   border: 3px #FF0000 solid;
}
#wb_Text5 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
}
#wb_Text5 div
{
   text-align: left;
}
#Shape6
{
   border-width: 0;
   height: 235px;
   width: 941px;
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
<div id="SlideShow1" style="position:absolute;left:392px;top:49px;width:687px;height:282px;z-index:0;">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;" src="images/103_2562%20%282%29.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2563.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2565%20%282%29.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2566.jpg" alt="" title="">
<img style="border-width:0;left:0px;top:0px;width:687px;height:282px;display:none;" src="images/103_2567%20%282%29.jpg" alt="" title="">
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:50px;width:1199px;height:270px;z-index:1;">
<img src="images/img0074.png" id="Image1" alt="" border="0" style="width:1199px;height:270px;"></div>
<div id="wb_Shape1" style="position:absolute;left:1px;top:322px;width:1197px;height:56px;z-index:2;">
<img src="images/img0075.gif" id="Shape1" alt=""></div>
<div id="wb_Shape2" style="position:absolute;left:0px;top:0px;width:1199px;height:49px;z-index:3;">
<img src="images/img0076.gif" id="Shape2" alt=""></div>
<div id="wb_Shape3" style="position:absolute;left:0px;top:670px;width:1201px;height:199px;z-index:4;">
<img src="images/img0077.gif" id="Shape3" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:1104px;top:110px;width:47px;height:46px;z-index:5;">
<a href="https://www.facebook.com/flightconnector?skip_nax_wizard=true&ref_type=bookmark" target="_blank"><img src="images/115.png" id="Image2" alt="" border="0" style="width:47px;height:46px;"></a></div>
<div id="wb_Image3" style="position:absolute;left:1105px;top:162px;width:46px;height:45px;z-index:6;">
<a href="https://twitter.com/@flightconnector" target="_blank"><img src="images/116.png" id="Image3" alt="" border="0" style="width:46px;height:45px;"></a></div>
<div id="wb_Image4" style="position:absolute;left:1109px;top:219px;width:36px;height:37px;z-index:7;">
<a href="http://www.google.com" target="_blank"><img src="images/google.png" id="Image4" alt="" border="0" style="width:36px;height:37px;"></a></div>
<div id="wb_SiteSearch1" style="position:absolute;left:879px;top:10px;width:276px;height:26px;z-index:8;">
<form name="SiteSearch1_form" id="SiteSearch1_form" onsubmit="return searchPage(features)">
<input type="text" id="SiteSearch1_keyword" style="position:absolute;left:0px;top:0px;width:276px;height:26px;line-height:26px;;" name="SiteSearch1_keyword" value="">
<label id="SiteSearch1_label" style="position:absolute;left:1px;top:6px;" for="SiteSearch1_keyword">Search this website</label>
</form>
</div>
<marquee direction="right" scrolldelay="90" scrollamount="6" behavior="alternate" loop="0" style="position:absolute;left:42px;top:285px;width:1104px;height:24px;z-index:9;" id="Marquee1" onmouseover="this.stop()" onmouseout="this.start()"><span style="color:#FFFFFF;font-family:Arial;font-size:21px;"><strong>&quot;Your Reliable Transport To OR Tambo International Airport&quot;</strong></span></marquee>
<div id="wb_Text3" style="position:absolute;left:51px;top:225px;width:299px;height:48px;text-align:center;z-index:10;">
<span style="color:#FFFFFF;font-family:Arial;font-size:21px;"><strong><em>Flight Connector (Pty) Ltd<br>&quot;LaNkwali Transport&quot;</em></strong></span></div>
<div id="wb_Shape5" style="position:absolute;left:353px;top:384px;width:518px;height:37px;z-index:11;">
<img src="images/img0078.gif" id="Shape5" alt=""></div>
<div id="wb_Text1" style="position:absolute;left:369px;top:394px;width:470px;height:24px;text-align:center;z-index:12;">
<span style="color:#000000;font-family:Arial;font-size:21px;"><strong>ADMINISTRATORS ONLY</strong></span></div>
<div id="wb_Image5" style="position:absolute;left:61px;top:60px;width:288px;height:167px;z-index:13;">
<img src="images/Shuttle.png" id="Image5" alt="" border="0" style="width:288px;height:167px;"></div>
<div id="wb_TabMenu1" style="position:absolute;left:229px;top:310px;width:752px;height:66px;z-index:14;overflow:hidden;">
<ul id="TabMenu1">
<li><a href="Testimonial_Admin.php">View Testimonials</a></li>
<li><a href="Bookings_Admin.php">View Bookings</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="wb_CssMenu1" style="position:absolute;left:105px;top:736px;width:924px;height:42px;text-align:center;z-index:15;">
<a href="./index.html">Home</a>
<a href="./profile.html">Profile</a>
<a href="./services.html">Services</a>
<a href="./gallery.html">Gallery</a>
<a href="./bookings.php">Bookings</a>
<a href="./testimonials.php">Testimonials</a>
</div>
<div id="wb_Text5" style="position:absolute;left:382px;top:794px;width:436px;height:33px;z-index:16;">
<span style="color:#000000;font-family:'Times New Roman';font-size:16px;">Copyright </span><span style="color:#000000;font-family:Arial;font-size:13px;">&#169; <script language="javascript" type="text/ecmascript">
var today = new Date()
var year = today.getFullYear()
document.write(year)
</script> TnT Technologies Inc All Rights Reserved</span></div>
<div id="wb_Shape6" style="position:absolute;left:118px;top:430px;width:941px;height:235px;z-index:17;">
<img src="images/img0079.gif" id="Shape6" alt=""></div>
<div id="wb_JavaScript1" style="position:absolute;left:299px;top:455px;width:691px;height:141px;z-index:18;">
<div style="color:#000000;font-family:Arial;font-size:48px;font-weight:normal;font-style:italic;text-decoration:none" id="Fly">You Have Successfully Login.Thank You.</div>

<script type="text/javascript">
// Flying Letters script- by Matthias (info@freejavascripts.f2s.com)
// Modified by Twey for efficiency and compatibility
// For this script and more, visit Dynamic Drive: http://www.dynamicdrive.com

// Configure message to display. Use "$" for linebreak
// By default, set to just grab the text from element with ID="fly"
message = document.getElementById("Fly").innerHTML; // $ = taking a new line
distance = 50;
speed = 200;

var txt="",
num=0,
num4=0,
flyofle="",
flyofwi="",
flyofto="",
fly=document.getElementById("Fly");

function stfly() 
{
   for(i=0;i != message.length;i++) 
   {
      if(message.charAt(i) != "$")
         txt += "<span style='position:relative;visibility:hidden;' id='n"+i+"'>"+message.charAt(i)+"<\/span>";
      else
         txt += "<br>";
   }
   fly.innerHTML = txt;
   txt = "";
   flyofle = fly.offsetLeft;
   flyofwi = fly.offsetWidth;
   flyofto = fly.offsetTop;
   fly2b();
}

function fly2b() 
{
   if(num4 != message.length) 
   {
      if(message.charAt(num4) != "$") 
      {
         var then = document.getElementById("n" + num4);
         then.style.left = (flyofle - then.offsetLeft + flyofwi / 2) + "px";
         then.style.top = (flyofto - then.offsetTop + distance) + "px";;
         fly3(then.id, parseInt(then.style.left), parseInt(then.style.left) / 5, parseInt(then.style.top), parseInt(then.style.top) / 5);
      }
      num4++;
      setTimeout("fly2b()", speed);
   }
}

function fly3(target,lef2,num2,top2,num3) 
{
   if((Math.floor(top2) != 0 && Math.floor(top2) != -1) || (Math.floor(lef2) != 0 && Math.floor(lef2) != -1)) 
   {
      if(lef2 >= 0)
         lef2 -= num2;
      else
         lef2 += num2 * -1;
      if(Math.floor(lef2) != -1) 
      {
         document.getElementById(target).style.visibility = "visible";
         document.getElementById(target).style.left = Math.floor(lef2) + "px";
      }
      else
      {
         document.getElementById(target).style.visibility = "visible";
         document.getElementById(target).style.left = Math.floor(lef2 + 1) + "px";
      }
      if(lef2 >= 0)
         top2 -= num3;
      else
         top2 += num3 * -1;
      if(Math.floor(top2) != -1)
         document.getElementById(target).style.top = Math.floor(top2) + "px";
      else
         document.getElementById(target).style.top = Math.floor(top2 + 1) + "px";

      setTimeout("fly3('"+target+"',"+lef2+","+num2+","+top2+","+num3+")",50);
   }
}

stfly();

</script></div>
</div>
</body>
</html>