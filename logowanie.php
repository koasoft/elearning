<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>Logowanie - elearn</title>
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
			
			$('#register').click(function()
			{
				if($('#username').val().length > 0)
				{
					if($('#password').val().length > 0)
					{
						$('#log_in_form').submit();
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

    			<h1>LOGOWANIE</h1>
            	
                <form id="log_in_form" action="koa_cms/login.php" method="post">
                
                	<div class="form-group">
                    
                    	<label>Nazwa użytkownika</label>
                        <input type="text" name="username" id="username" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Hasło</label>
                        <input type="password" name="password" id="password" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<a id="register" href="#">ZALOGUJ</a>
                    
                    </div>
                
                </form>
            
            </div>
        
        </div>	
    
    </div> <!-- PAGE REGISTER -->

</div> <!-- CONTAINER -->

</body>
</html>