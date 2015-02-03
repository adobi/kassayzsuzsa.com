<?php  

  $app_main_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']),'/\\');	
	define('_APP_MAIN_DIR', $app_main_dir);

  $newUrl = str_replace('/', '\/', _APP_MAIN_DIR);
	$pattern = '/'.$newUrl.'/';   
	$_url = preg_replace($pattern, '', $_SERVER['REQUEST_URI'], 1);
	
    if ($_url = explode('/', $_url)) {
        
		foreach ($_url as $tag)	{
			if ($tag) {
				$_app_info['params'][] = $tag;
			}
		}
	}
	
	$lang = (isset($_app_info['params'][0]) ? ($_app_info['params'][0]) : 'ro');
    
	
	
	header('Content-Type: text/html; charset=UTF-8');


?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu">

	<head>
		
		<title>Dr. Zsuzsa Kassay</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <meta name="description" content="Kassay Zsuzsa fogszabályzó szakorvos, Kassay Zsuzsa medic specialist in ortodontie si ortopedie dento-faciala" />
    <meta name="keywords" content="Kassay Zsuzsa, fogszabályzás nagykároly, ortodontie carei" />
    <meta name="author" content="Dobi Attila" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

    <link rel="stylesheet" href="css/site.css" />
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,400,500,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <script type="text/javascript" charset="utf-8" src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--<script type="text/javascript" charset="utf-8" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" charset="utf-8" src = "js/jquery.watermark.min.js"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script type="text/javascript" charset="utf-8" src = "js/zsu.js"></script>
	</head>
	
	<body>
		<div id="container">
			
			<div id="content">
				
				<div class="box-left" id="logo">
			    <div class="slide">
				    <div class="box-nav-big">
             <a href="">HELLO THERE <span class="smiley">:)</span></a>
		        </div>
			    </div>
		    </div>			    
				<div class = "box-left" id="about">
	        <div class="slide">
		        <div id="about-box">
	            <p class="p-title"><strong>I'm Zsuzsa Kassay</strong></p>      
              <p>
                I'm a dentist/orthidontist living in Nagykároly.
	            </p>
              <div style="text-align:center">
                <img class="profile-picture" src="img/profile.jpg">
              </div>
		        </div>
	        </div>				    
				</div>
				<div class="box-left" id="contact">
          <div class="slide">
		        <div id="contact-box">
	            <p class="p-title" style="text-align:left;"><strong>CONTACT ME</strong></p>
	            <p  class="p-inner">
	                <span class="label">phone:</span> +40741067001
	            </p>
	            <p class="p-inner">
	                <span class="label">email:</span> <a href="mailto:hello(at)kassayzsuzsa.com" style="color:white; text-decoration:underline">hello (at) kassayzsuzsa.com</a>
	            </p>
              <div style = "clear:both"></div>                            

              <p class="p-title" style="margin-top:20px; text-align:left"><strong>MY PROGRAM</strong></p>
              <p  class="p-inner">
                  <span class="label">wednesday:</span> 15-20
              </p>
              <p class="p-inner">
                  <span class="label">friday:</span> 15-20
              </p>
		        </div>
          </div>
				</div>
				
				<div class="box-left" id="program">
	        <div class="slide">
            <div id="program-box">
              <p class="p-title" style="text-align:left;"><strong>I work here</strong></p>
              <div id="google-maps"></div>
            </div>
	        </div>
				</div>
			</div> <!-- content -->
		</div> <!-- container -->
		<script>

    </script>
        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-22103043-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>		
	</body>

</html>
