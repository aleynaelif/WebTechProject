<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
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
                    Giriş Yap
                </h1>
			</div>
		</div>

	</header>
	
	<main>

		<div class="container">
			
			<div class="row">

            <div class="container">
			
			<form action="giris.php" method="POST">

				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" name="email" class="form-control" placeholder="E-mail giriniz" required="required">
				</div>

				<div class="form-group">
					<label for="password">Şifre</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre giriniz" required="required">
				</div>

				<button class="btn btn btn-dark" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>
			</div>
		</div>

	</main>



    <div class="footer">
        <footer class="py-2 bg-dark text-white text-center">
            Web-Teknolojileri-Projesi © Aleyna Elif ÖZKAN 2021
        </footer>
    </div>



	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>