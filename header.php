<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SNDLOU | 2013</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|Arvo:400,700,400italic,700italic|Roboto+Slab:400,100,300,700|Archivo+Black' rel='stylesheet' type='text/css'>
<link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/twitterfeed.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/scripts/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			
		$('#eventmenu').hide();
		$('#speakersmenu').hide();
		
		//$('#dropitlow').hide();
		$('#dropitlow').click(function(){
			$('#eventmenu').toggle('slow');
			$('#dropitlow').addClass('showing');

		});
		
		$('#dropit').click(function(){
			$('#speakersmenu').toggle('slow');
			$('#dropitlow').addClass('showing');

		});
		
		});
		
		
</script>
</head>

<body>

<div class="navbar navbar-fixed-top" id="menu">
	<div class="navbar-inner">
    	<div class="container" id="insidemenu">
        	<a class="brand" href="http://www.sndlou.com/" id="logo"><img src="http://www.sndlou.com/images/nameplate.png" /></a>
                <div class="nav">
            	<ul id="navigation" class="nav">
                	<li class="active"><a href="http://www.sndlou.com">Home</a></li>
                	<li class="active"><a href="http://www.sndlou.com/news">News</a></li>
                    <li class="active"><a href="http://www.sndlou.com/register.html">Register</a></li>
                    <li class="active"><a href="http://www.sndlou.com/news/schedule/">Speakers & Schedule<a href="#" id="dropit"><img src="http://www.sndlou.com/images/arrowdown.png"></a></a></li>
                    <li class="active dropdown" id="events"><a href="http://www.sndlou.com/venues.html">Events & Venues<a href="#" id="dropitlow"><img src="http://www.sndlou.com/images/arrowdown.png"></a></a></li>
                    <li class="active"><a href="http://www.sndlou.com/sponsors.html">Be A Sponsor</a></li>
                </ul>
               
                </div>
                 <div id="eventmenu">
                	<ul id="thedrop" ><li class="active"><a href="http://www.hacktucky.com/" target="new">Hacktucky</a></li>
                	<li class="active"><a href="http://www.sndlou.com/news/2013/09/06/graphics-garage-coming-back-for-sndlou/" target="new">Graphics Garage</a></li><li class="active"><a href="http://www.sndlou.com/news/sndf" target="new">SND Foundation Lebowski Night</a></li></ul>
                </div>
                 <div id="speakersmenu">
                	<ul id="thedrop" ><li class="active"><a href="http://www.sndlou.com/news/schedule" target="new">Full Schedule</a></li>
                	<li class="active"><a href="http://www.sndlou.com/speakers.html" target="new">Announcements</a></li></ul>
                </div>
       </div>
    </div>
</div>