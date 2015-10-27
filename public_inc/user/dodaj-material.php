<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>Dodaj materiał - USERNAME - elearn</title>
    <link rel="icon" href="../../public_img/favicon.ico" >
    <meta name="description" content="">
    <meta name="keywords" content="">								
    
    <link href="../../public_css/reset.css" rel="stylesheet">
    <link href="../../public_css/bootstrap.css" rel="stylesheet">
    <link href="../../public_css/lay.css" rel="stylesheet">

    
    <script src="../../public_js/jquery.js"></script>
    <script src="../../public_js/bootstrap.js"></script>
    <!--<script type="text/javascript" src="../public_js/whcookies.js"></script>-->
    
    <script>

		$(document).ready(function()
		{
			$('#nazwa').focus();

		}); 

	</script>

    
</head>

<body>

<div class="container-fluid">

	<header>
    
    	<a class="logo" href="../index.php"></a>
        
        <nav class="right">
        
        	<a class="action" href="../../koa_cms/wylogowanie.php">Wyloguj</a>
            
            <a id="show_rwd_menu" href="#"></a>
        
        </nav>
        
        <nav class="center">
        
        	<a href="index.php">STRONA GŁÓWNA</a>
            <a href="biblioteka.php">BIBLIOTEKA</a>
            <a href="subskrybenci.php">SUBSKRYBENCI</a>
        
        </nav>
    
    </header>
    
    
    <div class="page_admin_register">
        
        <div class="row">
        
        	<div class="col-md-8">

    			<h1>DODAJ NOWY MATERIAL</h1>
            	
                <form id="add_form" action="../koa_cms/add_object.php" method="post">
                
                	<div class="form-group">
                    
                    	<label>Nazwa (tytuł)</label>
                        <input type="text" name="nazwa" id="nazwa" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Kategoria</label>
                        <input type="text" name="kategoria" id="kategoria" maxlength="100" list="kategorie">
                        
                        <datalist id="kategorie">
                        	
                            <option value="Kursy">
                            <option value="Szkolenia">
                        
                        </datalist>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Rodzaj materiału</label>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Cena (PLN)</label>
                        <input type="number" name="cena" id="cena" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Opis</label>
                        <textarea name="opis" id="opis" maxlength="10000"></textarea>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Sposoby płatności</label>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Miniatura</label>
						<input name="max_file_size" type="hidden" value="2000000000">
                        <input type="file" name="miniatura" id="miniatura">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie tła</label>
                        <input type="file" name="zdjecie_tla" id="zdjecie_tla">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<a id="register" href="#">DODAJ MATERIAŁ</a>
                    
                    </div>
                
                </form>
            
            </div>
        
        </div>	
    
    </div> <!-- PAGE REGISTER -->
    
    
    <footer>
    
    	<p class="copyright">&copy; 2015 elearn</p>
        
        <a class="logo" href="../../index.php" target="_blank"></a>
    
    </footer>

</div> <!-- CONTAINER -->

</body>
</html>