<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
    <title>USERNAME - elearn</title>
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
        
        	<a class="active" href="index.php">STRONA GŁÓWNA</a>
            <a href="biblioteka.php">BIBLIOTEKA</a>
            <a href="subskrybenci.php">SUBSKRYBENCI</a>
        
        </nav>
    
    </header>
    
    
    <div class="page_admin_main">
        
        <img class="background_image" src="../../public_img/default_background_image.png" alt="">
        
        <h1>USERNAME</h1>
        
        <div class="row">
        
        	<div class="col-md-8">
            
            	<form id="update_form" action="koa_cms/update_account.php" method="post" enctype="multipart/form-data">
                
                	<div class="form-group">
                    
                    	<label>Nazwa wyświetlana</label>
                        <input type="text" name="nazwa_wyswietlana" id="nazwa_wyswietlana" maxlength="100">
                    
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
                    
                    	<label>Numer telefonu</label>
                        <input type="tel" name="telefon" id="telefon" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Imię i nazwisko</label>
                        <input type="text" name="imie_i_nazwisko" id="imie_i_nazwisko" maxlength="100">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>O nas</label>
                        <textarea name="onas" id="onas" maxlength="10000"></textarea>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Oferta</label>
                        <textarea name="oferta" id="oferta" maxlength="10000"></textarea>
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Logo</label>
                        <img src="" alt="">
						<input name="max_file_size" type="hidden" value="2000000000">
                        <input type="file" name="logo" id="logo">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie tła</label>
                        <img src="../../public_img/default_background_image.png" alt="">
                        <input type="file" name="zdjecie_tla" id="zdjecie_tla">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie prezentacyjne 1</label>
                        <img src="http://www.upsidelearning.com/blog/wp-content/uploads/2013/01/building-eLearning-for-iPads1.jpg" alt="">
                        <input type="file" name="zdjecie_prezentacyjne_1" id="zdjecie_prezentacyjne_1">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie prezentacyjne 2</label>
                        <img src="http://www.upsidelearning.com/blog/wp-content/uploads/2013/01/building-eLearning-for-iPads1.jpg" alt="">
                        <input type="file" name="zdjecie_prezentacyjne_2" id="zdjecie_prezentacyjne_2">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie prezentacyjne 3</label>
                        <img src="http://www.upsidelearning.com/blog/wp-content/uploads/2013/01/building-eLearning-for-iPads1.jpg" alt="">
                        <input type="file" name="zdjecie_prezentacyjne_3" id="zdjecie_prezentacyjne_3">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie prezentacyjne 4</label>
                        <img src="http://www.upsidelearning.com/blog/wp-content/uploads/2013/01/building-eLearning-for-iPads1.jpg" alt="">
                        <input type="file" name="zdjecie_prezentacyjne_4" id="zdjecie_prezentacyjne_4">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie prezentacyjne 5</label>
                        <img src="http://www.upsidelearning.com/blog/wp-content/uploads/2013/01/building-eLearning-for-iPads1.jpg" alt="">
                        <input type="file" name="zdjecie_prezentacyjne_5" id="zdjecie_prezentacyjne_5">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<label>Zdjęcie prezentacyjne 6</label>
                        <img src="http://www.upsidelearning.com/blog/wp-content/uploads/2013/01/building-eLearning-for-iPads1.jpg" alt="">
                        <input type="file" name="zdjecie_prezentacyjne_6" id="zdjecie_prezentacyjne_6">
                    
                    </div>
                    
                    <div class="form-group">
                    
                    	<a id="register" href="#">ZAPISZ</a>
                    
                    </div>
                
                </form>
            
            </div>
        
        </div>
    
    </div> <!-- PAGE MAIN -->
    
    
    <footer>
    
    	<p class="copyright">&copy; 2015 elearn</p>
        
        <a class="logo" href="../../index.php" target="_blank"></a>
    
    </footer>

</div> <!-- CONTAINER -->

</body>
</html>