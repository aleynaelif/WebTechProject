<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css">

	<title>Web Teknolojileri Projesi</title>
</head>

<body>

	 <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
		<div class="container"> <!--- içeriği ortalar -->
			<a href="/" class="navbar-brand">
				Aleyna Elif ÖZKAN
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="hakkimda.html" class="nav-link active">
							Hakkımda
						</a>
					</li>
					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active">
							Özgeçmiş
						</a>
					</li>
					<li class="nav-item">
						<a href="ilgi.html" class="nav-link active">
							İlgi Alanlarım
						</a>
					</li>
					<li class="nav-item">
						<a href="artvin.html" class="nav-link active">
							Artvin
						</a>
					</li>
					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active">
							Mirasımız
						</a>
					</li>
                    <li class="nav-item">
						<a href="iletisim.html" class="nav-link active">
							İletişim
						</a>
					</li>
                    <li class="nav-item">
						<a href="login.php" class="nav-link active">
							Giriş Yap
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header>
		<div class="jumbotron " style="background-color: rgb(239, 255, 218)">
			<div class="text-center">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
			</div>
		</div>
	</header>

	<main>
    <div class="container">
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("Siteye başarıyla giriş yaptınız.");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış<br>";
			            echo "Tekrar deneyiniz.";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

    </main>

	<div class="footer">
	<footer class="py-2 bg-dark text-white text-center">
		Web-Teknolojileri-Projesi © Aleyna Elif ÖZKAN 2021
	</footer>
    </div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
