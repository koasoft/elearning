<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>Rejestracja - elearn</title>
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
			$('#username').focus();
			
			
			$('#adres_platformy').focusout(function()
			{
				while($(this).val().indexOf(" ", 0) != '-1')
				{
					$(this).val($(this).val().replace(" ", ""));
				}
				
				$(this).val($(this).val().replace("!", ""));
				$(this).val($(this).val().replace("@", ""));
				$(this).val($(this).val().replace("#", ""));
				$(this).val($(this).val().replace("$", ""));
				$(this).val($(this).val().replace("%", ""));
				$(this).val($(this).val().replace("^", ""));
				$(this).val($(this).val().replace("&", ""));
				$(this).val($(this).val().replace("*", ""));
				$(this).val($(this).val().replace("(", ""));
				$(this).val($(this).val().replace(")", ""));
				$(this).val($(this).val().replace("-", ""));
				$(this).val($(this).val().replace("=", ""));
				$(this).val($(this).val().replace("+", ""));
				$(this).val($(this).val().replace("[", ""));
				$(this).val($(this).val().replace("]", ""));
				$(this).val($(this).val().replace("{", ""));
				$(this).val($(this).val().replace("}", ""));
				$(this).val($(this).val().replace("\\", ""));
				$(this).val($(this).val().replace("|", ""));
				$(this).val($(this).val().replace(";", ""));
				$(this).val($(this).val().replace(":", ""));
				$(this).val($(this).val().replace("'", ""));
				$(this).val($(this).val().replace('"', ""));
				$(this).val($(this).val().replace("?", ""));
				$(this).val($(this).val().replace("/", ""));
				$(this).val($(this).val().replace(".", ""));
				$(this).val($(this).val().replace(">", ""));
				$(this).val($(this).val().replace("<", ""));
				$(this).val($(this).val().replace(",", ""));
				
				
				var adres = $('#adres_platformy').val();
				
				adres = adres.replace("http://", "");
				adres = adres.replace("https://", "");
				adres = adres.replace("/", "");
				adres = adres.replace(".php", "");
				adres = adres.replace(".html", "");
				adres = adres.replace(":", "");
				adres = adres.replace("www", "");
				
				if(adres.length > 0)
				{
					if(adres.indexOf('.elearn.pl', 0) == '-1')
					{
						adres = adres + '.elearn.pl';	
					}
				}
				
				$('#adres_platformy').val(adres);
			});
			
			
			$('#register').click(function()
			{
				if($('#username').val().length > 0)
				{
					if($('#password').val().length > 0)
					{
						if($('#password_2').val().length > 0)
						{
							if($('#password').val() == $('#password_2').val())
							{
								var regex_e_mail = /[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}/;
							
								if($('#email').val().length > 0 && $('#email').val().match(regex_e_mail))
								{
									if($('#adres_platformy').val().length > 0)
									{
										$('#register_form').submit();
									}
									
									else
									{
										alert("Uzupełnij adres platformy.");
										$('#adres_platformy').focus();
										return false;
									}
								}
								
								else
								{
									alert("Uzupełnij prawidłowy adres e-mail.");
									$('#email').focus();
									return false;	
								}
							}
							
							else
							{
								alert("Podane hasła są różne.");
								$('#password_2').focus();
								return false;	
							}
						}
						
						else
						{
							alert("Powtórz hasło.");
							$('#password_2').focus();
							return false;	
						}
					}
					
					else
					{
						alert("Uzupełnij hasło.");
						$('#password').focus();
						return false;	
					}
				}
				
				else
				{
					alert("Uzupełnij nazwę użytkownika.");
					$('#username').focus();
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
            <a href="kontakt.php">KONTAKT</a>
        
        </nav>
    
    </header>
    
    
    <div class="page_register">
        
        <div class="row">
        
        	<div class="col-md-8">

    			<h1>REJESTRACJA NOWEGO KONTA</h1>
            	
                <form id="register_form" action="koa_cms/register.php" method="post" enctype="multipart/form-data">
                
                	<div class="form-group">
                    
                    	<label>Nazwa użytkownika</label>
                        <input type="text" name="username" id="username" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Hasło</label>
                        <input type="password" name="password" id="password" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Powtórz hasło</label>
                        <input type="password" name="password_2" id="password_2" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Adres e-mail</label>
                        <input type="email" name="email" id="email" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Adres platformy - wybrana_nazwa.eleran.pl (nie może zawierać spacji oraz znaków specjalnych)</label>
                        <input type="text" name="adres_platformy" id="adres_platformy" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<a id="register" href="#">ZAŁÓŻ KONTO</a>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<p>REJESTRACJA KONTA OZNACZA AKCEPTACJĘ <a href="regulamin.php" target="_blank">REGULAMINU</a></p>
                    
                    </div>
                
                </form>
            
            </div>
        
        </div>	
    
    </div> <!-- PAGE REGISTER -->

</div> <!-- CONTAINER -->

</body>
</html>