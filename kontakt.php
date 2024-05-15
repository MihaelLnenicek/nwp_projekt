<?php 
	print '
	<h1>Kontakt</h1>
	<div id="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.6290878832115!2d17.22140395917947!3d45.59478044495123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476798b1f312d557%3A0xe458d0ce7aad658a!2sDru%C5%A1tveno-kulturni%20centar%20Daruvar!5e0!3m2!1shr!2shr!4v1672669297340!5m2!1shr!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<form action=" " id="contact_form" name="contact_form" method="POST">
			<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Ime.." required>
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Prezime.." required>
				
			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" placeholder="E-mail.." required>
			<label for="country">Država</label>
			<select name="country" id="country">
				<option value="">molimo odaberite</option>';
				
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
			<label for="subject">Komentar</label>
			<textarea id="subject" name="subject" placeholder="Napišite nešto.." style="height:200px"></textarea>
			<input type="submit" value="Pošalji">
		</form>
	</div>';
?>