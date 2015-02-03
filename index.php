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
		
		<title>Dr. Kassay Zsuzsa</title>

        <meta name="description" content="Kassay Zsuzsa fogszabályzó szakorvos, Kassay Zsuzsa medic specialist in ortodontie si ortopedie dento-faciala" />
        <meta name="keywords" content="Kassay Zsuzsa, fogszabályzás nagykároly, ortodontie carei" />
        <meta name="author" content="Dobi Attila" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />

		
        <link rel="stylesheet" href="css/site.css" />
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,100italic,light,lightitalic,regular,600,600italic,bold,bolditalic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/colorbox.css" />
        		
		<script type="text/javascript" charset="utf-8" src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" charset="utf-8" src = "js/jquery.watermark.min.js"></script>
        <script type="text/javascript" charset="utf-8" src = "js/zsu.js"></script>
        
	</head>
	
	<body>
		<div id="container">
			
			<div id = "header">
				<p style="text-align:right; margin-right:30px;">
				    <a href="ro" id = "ro" style = "opacity:0.4"><img src="img/ro.png" alt=""></a>
				    <a href="hu" id = "hu" style = "opacity:0.4"><img src="img/hu.png" alt=""></a>
				    <a href="en" id = "en"><img src="img/en.png" alt=""></a>
				</p>
			</div> <!-- header -->
			
			<div id="content">
				
				<div class="box-left" id="logo">
				    
				    <div class="slide">
					    <div class="box-nav-big">
                            <a href="">HELLO!</a>
    			        </div>
				    </div>
			        
				    <div id="logo-box">
    		        </div>
			    </div>			    
				<div class = "box-left" id="about">
				    <div class="slide">
					    <div class="box-nav-big">
                            <a href="javascript:void(0)" class="open" id="about-link">ABOUT ME</a>
    			        </div>
				    </div>
			        <div class="slide">
    			        <div id="about-box">
    			            <p class="p-title" style="color:#eaeaea;"><strong>ABOUT ME</strong></p>
    			                
                            <p  style="font-style:italic; color:#ccc; font-size:18px">
    			                coming soon...
    			            </p>
    			            <div style = "clear:both">
    			                
    			            </div>

    			        </div>
    			        <div class="open">
    			            <a href="javascript:void(0);" class = "back-link"></a>
                        </div>
			        </div>				    
				</div>

				<div id="logo-middle">
				    
				</div>
				<div class="box-left" id="contact">
				    <div class="slide">
					    <div class="box-nav-big">
                            <a href="javascript:void(0)" class="open" id="contact-link">CONTACT</a>
    			        </div>
				    </div>
			        
			        <div class="slide">
    			        <div id="contact-box">
    			            <p class="p-title"><strong>CONTACT ME</strong></p>
    			            <p  class="p-inner">
    			                <span class="label">phone:</span> +40741067001
    			            </p>
    			            <p class="p-inner">
    			                <span class="label">email:</span> hello (at) kassayzsuzsa.com
    			            </p>
    			            <p class="p-inner">
    			                <span class="label">address:</span> ...
    			            </p>
    			            <hr />
    			            <div style = "clear:both">
    			                
    			            </div>
    			            <p  style="font-style:italic; color:#ccc; font-size:18px">
    			                Or  you can send me email <a href="javascript:void(0);" class = "show-contact-form">here</a>
    			            </p>
    			        </div>
    			        <div class="open">
    			            <a href="javascript:void(0);" class = "back-link"></a>
                        </div>
			        </div>
				</div>
				
				<div class="box-left" id="program">
				    <div class="slide">
					    <div class="box-nav-big">
                            <a href="javascript:void(0)" class="open" id="program-link">MY PROGRAM</a>
    			        </div>
    			        
				    </div>
			        
			        <div class="slide">
    			        <div id="program-box">
    			            <p class="p-title" style = "color:#BE2D64"><strong>MY PROGRAM</strong></p>
    			            <p  class="p-inner">
    			                <span class="label">wednesday:</span> 16-19
    			            </p>
    			            <p class="p-inner">
    			                <span class="label">friday:</span> 16-19
    			            </p>

    			            
    			            <p  style="font-style:italic; color:#666; font-size:18px">
    			                You can find me at ...
    			            </p>

			                
    			            <hr />
    			            <div style = "clear:both"></div>			                
    			            <p  style="font-style:italic; color:#666; font-size:18px">
    			                <strong>Or make a reservation by <a href="javascript:void(0);" class = "show-contact-form">email</a></strong>
    			            </p>    			            
    			        </div>
    			        <div class="open">
    			            <a href="javascript:void(0);" class = "back-link-black"></a>
                        </div>
			        </div>
				</div>
			</div> <!-- content -->
			<div class  = "hidden">
			    
    			<div id="contact-form">
    			    <p class="p-title"><strong>WHAT CAN I DO FOR YOU?</strong></p>
    			    <p class="label">Your name</p>
    			    <p><input type="text" name = "name" id = "name" size = "40"/></p>
    			    <p class="label">Your email</p>
    			    <p><input type="text" name = "email" id = "email" size = "40"/></p>
    			    <p class="label">Subject</p>
    			    <p><input type="text" name = "subject" id = "subject" size = "40"/></p>
    			    <p class = "label">Message</p>
    			    <p>
    			        <textarea cols="50" rows="4" name = "message" id = "message"></textarea>
    			    </p>
    			    <p>
    			        <input type="submit" value = "Send message" id = "send-button" />
    			    </p>
    			</div>
    			
    			<div id="contact-message-sent-notification">
    			    <p class = "p-title">Your message has been sent</p>
    			</div>

    			<div id="contact-message-error-notification">
    			    <p class = "p-title" style = "color:red">There was an error, please try again later</p>
    			</div>    			
			</div>
		</div> <!-- container -->
		
		<div id="footer">
			
			
		</div> <!-- footer -->
		
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
