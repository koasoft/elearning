<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>TYTUŁ - elearn</title>
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
			//$('.col-md-4 img').css('height', $('.col-md-7').height());
			
			//$('video').hide();
			$('form').hide();
			
			$('#button_buy_access').click(function()
			{
				$('form').hide();
				$('#buy_form').show();
				$('#imie_i_nazwisko').focus();
			});
			
			$('#button_authorization').click(function()
			{
				$('form').hide();
				$('#authorization_form').show();
				$('#kod_dostepu').focus();
			});

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
            <a href="biblioteka.php">BIBLIOTEKA</a>
            <a href="kontakt.php">KONTAKT</a>
        
        </nav>
    
    </header>
    
    
    <div class="page_object">
        
        <div class="top">
        
        	<div class="row">
            
            	<div class="col-md-5">
                	
                    <div class="col-md-4"><img src="http://www.miraclestudios.in/blog/wp-content/uploads/2013/02/php-dedicated.jpg" alt=""></div>
                    
                    <div class="col-md-7">
                    
                    	<div class="col-md-12">
                    
                    		<h1>KURS PROGRAMOWANIA W PHP</h1>
                            
                        </div>
                        
                        <div class="col-md-6">
                        
                        	<a href="#" id="button_buy_access"><img src="../public_img/kup_dostep.png" alt=""></a>
                        
                        </div>
                        
                        <div class="col-md-6">
                        
                        	<a href="#" id="button_authorization"><img src="../public_img/aktywuj.png" alt=""></a>
                        
                        </div>
                    
                    </div>
                
                </div>
            
            </div>
        
        	<img class="background_image" src="http://www.miraclestudios.in/blog/wp-content/uploads/2013/02/php-dedicated.jpg" alt="">
        
        </div> <!-- TOP -->
        
        <div class="content">
            
        	<div class="col-md-11">
            
            	<div class="col-md-3">
                
                	<p class="title">Nazwa:</p>
                    <p class="txt">Kurs Programowania PHP</p>
                    
                    <p class="title">Kategoria:</p>
                    <p class="txt">Kursy</p>
                    
                    <p class="title">Cena:</p>
                    <p class="txt">100 PLN</p>
                    
                    <p class="title">Autor:</p>
                    <p class="txt">userek</p>
                    
                    <p class="title">Data dodania:</p>
                    <p class="txt">2015-10-26</p>
                    
                    <p class="title">Opis:</p>
                    <p class="txt justify">Phasellus vulputate ante tincidunt aliquet varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tristique, nunc vel ornare viverra, risus nibh venenatis risus, ut posuere erat dolor vel mauris. Vivamus ultricies ultricies ex id finibus. Integer congue risus at sem imperdiet commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas urna est, rutrum id tortor vitae, congue interdum turpis. Phasellus sit amet elit a ligula suscipit ullamcorper. Sed odio orci, tincidunt molestie pretium in, tempor nec eros. Etiam cursus tellus ex, ut scelerisque velit vehicula eu. Nam iaculis feugiat ipsum eget cursus. In vel vehicula ex, sed ullamcorper metus. Etiam sit amet tortor ut nulla sollicitudin egestas a non diam. Nam mollis aliquam turpis.</p>
                
                </div>
                
                <div class="col-md-9">
                
                	<video width="100%" controls>
                    
                      <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                      
                      Your browser does not support HTML5 video.
                      
                    </video>
                    
                    <form id="authorization_form" action="../koa_cms/authorization.php" method="post">
                    
                    	<div class="form-group">
                        
                        	<label>Kod dostępu</label>
                            <input type="text" name="kod_dostepu" id="kod_dostepu" maxlength="100">
                        	
                        </div>
                        
                        <div class="form-group">
                        
                        	<a class="action" id="authorization">AKTYWUJ</a>
                        
                        </div>
                    
                    </form>
                    
                    <form id="buy_form" action="../koa_cms/buy_access.php" method="post">
                    
                    	<div class="form-group">
                        
                        	<label>Sposób opłaty</label>
                            
                            <select name="sposob_oplaty" id="sposob_oplaty">
                            
                            	<option>Płatność internetowa (natychmiastowy dostęp)</option>
                            
                            </select>
                        
                        </div>
                    
                    	<div class="form-group">
                        
                        	<label>Imię i nazwisko</label>
                            <input type="text" name="imie_i_nazwisko" id="imie_i_nazwisko" maxlength="100">
                        	
                        </div>
                    
                    	<div class="form-group">
                        
                        	<label>Adres e-mail</label>
                            <input type="email" name="email" id="email" maxlength="100">
                        	
                        </div>
                        
                        <div class="form-group">
                        
                        	<a class="action" id="buy" href="#">AKCEPTUJĘ I PŁACĘ</a>
                        
                        </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div> <!-- CONTENT -->
    
    </div> <!-- PAGE OBJECT -->
    
    
    <footer>
    
    	<p class="copyright">&copy; 2015 elearn</p>
        
        <a class="logo" href="../index.php" target="_blank"></a>
    
    </footer>

</div> <!-- CONTAINER -->

</body>
</html>