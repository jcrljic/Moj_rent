<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Kontakt_rent_a_car</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<?php
			include('includes/navbar.php');
	?>
	<div>
					<h1>Rentanje automobila u Zagrebu</h1>
		<p><br>Dubrava<br>10 040 Zagreb<br>Tel:01/123-4567<br>E-mail:info_auti.rent@gmail.com</br></p>
		</div>
		<hr></hr>
		<div>
		<p>
			<h2>Djelatnici i njihovi kontakt mailovi:</h2></p>
		<p><h2> Ivana Ivić:</h2>
			i.ivic@gmail.com</p>
		<p><h2>	Mladen Marković:</h2>
			m.markovic@gmail.com</p>
		<p>	<h2>Mario Marić:</h2>
			m.maric@gmail.com</p>
		</div>
		<div>
		<iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11120.136146929544!2d16.04859284498394!3d45.830600815710426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4766780f1670236d%3A0x12b7f412cf041ce!2sDubrava%2C+10040%2C+Zagreb!5e0!3m2!1sen!2shr!4v1563693569138!5m2!1sen!2shr"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br>

        <form style="text-align:center">
            <h3>Ime:</h3>
            <input size="30" type="text"></input>
            <h3>Prezime:</h3>
            <input size="30" type="text"></input>
            <h3>Email adresa:</h3>
            <input size="30" type="mail"></input>
            <h3>Država</h3>
            <select name="Država">
                <option value="Hrvatska">Hrvatska</option>
                <option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
                <option value="Srbija">Srbija</option>
                <option value="Slovenija">Slovenija</option>
            </select><br>
            <h3>Opis</h3>
            <textarea name="Opis" cols="60" rows="10"></textarea>
            <br><br>
            <input type="submit">


        </form>
</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Posljednje vijesti</h4>
				<p>
					U našim novostima pogledajte posebne pogodnosti za naše vjerne korisnike
				</p>
			</div>
			<div class="section contact">
				<h4>Kontaktirajte nas:</h4>
				<p>
					<span>Adresa:</span> Dubrava 
				</p>
				<p>
					<span>Telefon:</span> 01/123-4567
				</p>
				<p>
					<span>Email:</span> info_auti.rent@gmail.com
				</p>
			</div>
			<div class="section">
				<h4>POŠALJITE NAM PORUKU</h4>
				<p>
					Ako imate problema sa korištenjem ove stranice ne oklijevajte nego pitaj te za pomoć na forumu
				</p>
				<a href="dojmovnik.html" class="subscribe">Stisni te za slanje email-a</a>
			</div>
		</div>
		<?php
				include('includes/footer.php');
		?>
	</div>
</body>
</html>