<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
</head>
<body>
	<button id="btn1"><strong>+</strong></button>
	<button id="dis">Display Var</button><br>
	
	<form name="form_append" method="post" action="index.php">
		<script>
			$(document).ready(function(){
				var name = 1;
				$("#placing").val(name);
				console.log(name);	
				$("#btn1").click(function(){
					name++;
					$("#coba").append("<tr><td><label>Input "+name+" </label></td><td><input type='text' name='input"+name+"' id=inputcoba></td></tr>");    
					console.log(name);
					$("#placing").val(name);
				});

				$("#dis").click(function(){
					alert(name);
				});

			});
		</script><label>Count
			<input type="text" name="placingname" id="placing" value=""></label><br>
			<br>
			<table id="coba">
				<tr>
					<td>
						<label>Input 1 </label>
					</td>
					<td>
						<input type='text' name="input1" id=inputcoba>
					</td>
				</tr>
			</table>
			<button type="submit" name="kirim">Kirim</button>
		</form>
	</body>
	</html>

	<?php 
	// if (isset($_POST['kirim'])) {
	// 	$count = $_POST['placingname'];
	// 	echo "bayaknya = ".$count;  echo "<br>";
	// 	$temp	= "";
	// 	if ($count > 1) {
	// 		for ($i=1; $i <= $count; $i++) {
	// 			$temp .= $_POST['input'.$i].", ";
	// 		}
	// 		$temp = substr_replace($temp, "", -1);
	// 	}
	// 	else{
	// 		$temp = $_POST['input1'];
	// 	}	

	// 	echo $temp;
	// }

	if (isset($_POST['kirim'])) {
		$count = $_POST['placingname'];
		echo "bayaknya = ".$count;  echo "<br>";
		$temp	= array();
		if ($count > 1) {
			for ($i=1; $i <= $count; $i++) {
				$temp[$i-1] = $_POST['input'.$i];
			}
		}
		else{
			$temp = $_POST['input1'];
		}			
		var_dump($temp);echo "<br>";
		echo $temp;
	}

	?>

