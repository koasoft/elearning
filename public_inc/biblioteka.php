<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>Biblioteka - USERNAME - elearn</title>
    <link rel="icon" href="../public_img/favicon.ico" >
    <meta name="description" content="">
    <meta name="keywords" content="">								
    
    <link href="../public_css/reset.css" rel="stylesheet">
    <link href="../public_css/bootstrap.css" rel="stylesheet">
    <link href="../public_css/lay.css" rel="stylesheet">

    
    <script src="../public_js/jquery.js"></script>
    <script src="../public_js/bootstrap.js"></script>
    <!--<script type="text/javascript" src="../public_js/whcookies.js"></script>-->
    
    <script>

		$(document).ready(function()
		{
			var window_height = $(window).height();
			var col_md_2 = $('.col-md-2').height();
			var col_md_10 = $('.col-md-10').height();
			
			if(col_md_10 < window_height)
			{
				$('.col-md-2').css('height', window_height-140 + "px");	
			}
			
			else
			{
				$('.col-md-2').css('height', col_md_10+100 + "px");	
			}
			
			
			
			$('.col-md-4 a p').css('width', $('.col-md-4 a img').width() + "px");

		}); 

	</script>

    
</head>

<body>

<div class="container-fluid">

	<header>
    
    	<a class="logo" href="index.php"></a>
        
        <nav class="right">
        
        	<a id="show_rwd_menu" href="#"></a>
        
        </nav>
        
        <nav class="center">
        
        	<a href="index.php">STRONA GŁÓWNA</a>
            <a class="active" href="biblioteka.php">BIBLIOTEKA</a>
            <a href="kontakt.php">KONTAKT</a>
        
        </nav>
    
    </header>
    
    
    <div class="page_libary">
        
        <div class="search_panel">
        
        	<form id="search_form" action="?" method="get">
            
            	<input type="text" name="keyword" id="search_keyword" maxlength="100" placeholder="Wyszukaj...">
                
                <a id="search" href="#"></a>
            
            </form>
        
        </div>
        
        <div class="content">
        
        	<div class="row">
            
            	<div class="col-md-2">
                
                	<a class="active" href="#">WSZYSTKIE</a>
                    <a href="#">KATEGORIA</a>
                    <a href="#">KATEGORIA</a>
                    <a href="#">KATEGORIA</a>
                    <a href="#">KATEGORIA</a>
                    <a href="#">KATEGORIA</a>
                    <a href="#">KATEGORIA</a>
                
                </div>
                
                <div class="col-md-10">
                
                	<div class="col-md-4">
                    
                    	<a href="#"><p>SQL INJECTION</p><img src="http://kursphp.com/wp-content/uploads/2015/06/sql-injection-702x336.jpg" alt=""></a>
                    
                    </div>
                    
                    
                    <div class="col-md-4"><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/PHP_Logo.png" alt=""></a></div>
                    <div class="col-md-4"><a href="#"><img src="http://www.miraclestudios.in/blog/wp-content/uploads/2013/02/php-dedicated.jpg" alt=""></a></div>
                    
                    <div class="col-md-4"><a href="#"><img src="http://www.miraclestudios.in/blog/wp-content/uploads/2013/02/php-dedicated.jpg" alt=""></a></div>
                    <div class="col-md-4"><a href="#"><p>SQL INJECTION ETAP 2</p><img src="http://kursphp.com/wp-content/uploads/2015/06/sql-injection-702x336.jpg" alt=""></a></div>
                    <div class="col-md-4"><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/PHP_Logo.png" alt=""></a></div>
                     
                
                </div>
            
            </div>
        
        </div>
    
    </div> <!-- PAGE LIBARY -->
    
    
    <footer>
    
    	<p class="copyright">&copy; 2015 elearn</p>
        
        <a class="logo" href="../index.php" target="_blank"></a>
    
    </footer>

</div> <!-- CONTAINER -->

</body>
</html>