<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
	print '
	<h1>Rezervacija termina</h1>
	<div id="reservation">
	
	<form action="" id="reserevation_form" name="reservation_form" method="POST">
	<label for="teren">Odaberi teren:</label>
	<select name="tereni" id="tereni">
  	<option value="Vanjski teren">Vanjski teren - 1</option>
  	<option value="Teren za basket">Teren za basket - 2</option>
  	<option value="Mala dvorana">Mala dvorana - 3</option>
  	<option value="Velika dvorana">Velika dvorana - 4</option>
	</select>
	<label for="dan">Odaberi dan:</label>
	<select name="dan" id="dan">
  	<option value="ponedjeljak">Ponedjeljak</option>
  	<option value="utorak">Utorak</option>
  	<option value="srijeda">Srijeda</option>
  	<option value="cetvrtak">Četvrtak</option>
	<option value="petak">Petak</option>
	<option value="subota">Subota</option>
	<option value="nedjelja">Nedjelja</option>
	</select>
	<label for="vrijeme">Odaberi vrijeme:</label>
	<select name="vrijeme" id="vrijeme">
  	<option value="09:00 - 10:00">09:00 - 10:00</option>
  	<option value="10:00 - 11:00">10:00 - 11:00</option>
  	<option value="11:00 - 12:00">11:00 - 12:00</option>
  	<option value="12:00 - 13:00">12:00 - 13:00</option>
	<option value="13:00 - 14:00">13:00 - 14:00</option>
	<option value="14:00 - 15:00">14:00 - 15:00</option>
	<option value="15:00 - 16:00">15:00 - 16:00</option>
	<option value="16:00 - 17:00">16:00 - 17:00</option>
  	<option value="17:00 - 18:00">17:00 - 18:00</option>
	<option value="18:00 - 19:00">18:00 - 19:00</option>
	<option value="19:00 - 20:00">19:00 - 20:00</option>
	<option value="20:00 - 21:00">20:00 - 21:00</option>
	<option value="21:00 - 22:00">21:00 - 22:00</option>
	<option value="22:00 - 23:00">22:00 - 23:00</option>
	</select>
	<input type="submit" name="send" value="Pošalji">
	</form>';
	if(isset($_POST['send'])){
		$query  = "SELECT * FROM reservations";
		$query .= " WHERE teren='" .  $_POST['tereni'] . "'";
		$query .= " AND dan='" .  $_POST['dan'] . "'";
		$query .= " AND vrijeme='" .  $_POST['vrijeme'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		if ($row['teren'] == '' || $row['dan'] == '' || $row['vrijeme'] == '') {
			
			$query  = "INSERT INTO reservations (teren, dan, vrijeme)";
			$query .= " VALUES ('" . $_POST['tereni'] . "', '" . $_POST['dan'] . "', '" . $_POST['vrijeme'] . "')";
			$result = @mysqli_query($MySQL, $query);
			
			
			echo '<p>Uspješna rezervacija termina!</p>';
		}
		else {
			echo '<p>Termin je već rezerviran!</p>';
		}
		}
	print '
	</div>';
	print '
	<h1>Rezervirani termini</h1>
	<div id="termini">
	<table>
				<thead>
					<tr>
					<th width="14%">Ponedjeljak</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='ponedjeljak'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
				print'
				<table>
				<thead>
					<tr>
					<th width="14%">Utorak</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='utorak'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
				print'
				<table>
				<thead>
					<tr>
					<th width="14%">Srijeda</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='srijeda'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
				print'
				<table>
				<thead>
					<tr>
					<th width="14%">Četvrtak</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='cetvrtak'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
				print'
				<table>
				<thead>
					<tr>
					<th width="14%">Petak</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='petak'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
				print'
				<table>
				<thead>
					<tr>
					<th width="14%">Subota</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='subota'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
				print'
				<table>
				<thead>
					<tr>
					<th width="14%">Nedjelja</th>
					</tr>
				</thead>
				<tbody>';
				$query  = "SELECT * FROM reservations";
				$query .= " WHERE dan='nedjelja'";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '
				<tr>
				<td>';		
				
				print $row['vrijeme'] .  ' ' . $row['teren'] . '		
				</td>
				</tr>';
				}
				print '
				</tbody>
				</table>
				</div>';
?>