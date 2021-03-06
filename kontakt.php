<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>Kontakt - elearn</title>
    <link rel="icon" href="favicon.ico" >
    <meta name="description" content="">
    <meta name="keywords" content="">								
    
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/lay.css" rel="stylesheet">

    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--<script type="text/javascript" src="js/whcookies.js"></script>-->
    
    <script>

		$(document).ready(function()
		{
			$('#imie_i_nazwisko').focus();
			
			$('#register').click(function()
			{
				var regex_e_mail = /[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}/;
							
				if($('#email').val().length > 0 && $('#email').val().match(regex_e_mail))
				{
					if($('#wiadomosc').val().length > 0)
					{
						$('#contact_form').submit();
					}
									
					else
					{
						alert("Uzupełnij treść wiadomości.");
						$('#wiadomosc').focus();
						return false;
					}
				}
				
				else
				{
					alert("Uzupełnij prawidłowy adres e-mail.");
					$('#email').focus();
					return false;
				}
			});

		}); 

	</script>

    
</head>

<body>

<div class="container-fluid">

	<header>
    
    	<a class="logo" href="index.php"></a>
        
        <nav class="right">
        
        	<a class="action" href="rejestracja.php">Rejestracja</a>
            <a class="action" href="logowanie.php">Logowanie</a>
            
            <a id="show_rwd_menu" href="#"></a>
        
        </nav>
        
        <nav class="center">
        
        	<a href="index.php">STRONA GŁÓWNA</a>
            <a href="onas.php">O NAS</a>
            <a href="oferta.php">OFERTA</a>
            <a class="active" href="kontakt.php">KONTAKT</a>
        
        </nav>
    
    </header>
    
    
    <div class="page_register">
        
        <div class="row">
        
        	<div class="col-md-8">

    			<h1>FORMULARZ KONTAKTOWY</h1>
            	
                <form id="contact_form" action="koa_cms/contact.php" method="post">
                
                	<div class="form-group">
                    
                    	<label>Imię i nazwisko</label>
                        <input type="text" name="imie_i_nazwisko" id="imie_i_nazwisko" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Nazwa firmy</label>
                        <input type="text" name="nazwa_firmy" id="nazwa_firmy" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Adres e-mail</label>
                        <input type="email" name="email" id="email" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Numer telefonu</label>
                        <input type="tel" name="telefon" id="telefon" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Treść wiadomości</label>
                        <textarea name="wiadomosc" id="wiadomosc"></textarea>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<a id="register" href="#">WYŚLIJ WIADOMOŚĆ</a>
                    
                    </div>
                
                </form>
            
            </div>
        
        </div>	
    
    </div> <!-- PAGE REGISTER -->

</div> <!-- CONTAINER -->

</body>
</html>