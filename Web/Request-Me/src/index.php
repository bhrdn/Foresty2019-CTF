<?php
	$ini_apa =  strrev(strrev(strrev(strrev("1nI_@d4laH_fl4G??"))));
	$len = (strlen($ini_apa) - 1);
?>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['inputan'])){
		$input = $_POST['inputan'];
		if(strlen($input) >= strlen($ini_apa)){
			if($input[$len] == "?"){
				if($input[$len-1] == "?"){
					if($input[$len-2] == "G"){
						if($input[$len-3] == "4"){
							if($input[$len-4] == "l"){
								if($input[$len-5] == "f"){
									if($input[$len-6] == "_"){
										if($input[$len-7] == "H"){
											if($input[$len-8] == "a"){
												if($input[$len-9] == "l"){
													if($input[$len-10] == "4"){
												if($input[$len-11] == "d"){
											if($input[$len-12] == "@"){
										if($input[$len-13] == "_"){
									if($input[$len-14] == "I"){
								if($input[$len-15] == "n"){
							if($input[$len-16] == "1"){
								echo "Foresty2019{0v33R_th1nkIng_m@y_k1lL_U}";
							}}}}}}}}}}}}}}}}}
		} else {
			echo "masih kurang gan, kurang " . (strlen($ini_apa) - strlen($_POST['inputan'])) . " lagi";
		}
	}
}

?>

<html>
	<head>
		<title>Ini web saya lho !!</title>
	</head>
	<body>
		<h1>Apaa yaa ??</h1>
		<img src="https://ichef.bbci.co.uk/wwfeatures/live/976_549/images/live/p0/7x/3v/p07x3v9b.jpg" alt="hoak hoak hoak">
		<form action="index.php" method="post">
			<label for="inputan">isi aku ..</label><br/><br/>
			<input type="text" name="inputan" placeholder=""><br/><br/>
			<input type="submit" name="submit">
		</form>
			<!-- 
			 $input = $_POST['inputan'];
			 $len = strlen($input);
			 # comparation char per char
			 if($input[$len] == "?"){
				if($input[$len-1] == "?"){
					if($input[$len-2] == "G"){
						if($input[$len-3] == "4"){
							if($input[$len-4] == "l"){
								if($input[$len-5] == "f"){
									if($input[$len-6] == "_"){
										if($input[$len-7] == "H"){
											if($input[$len-8] == "a"){
												if($input[$len-9] == "l"){
													if($input[$len-10] == "4"){
												if($input[$len-11] == "d"){
											if($input[$len-12] == "@"){
										if($input[$len-13] == "_"){
									if($input[$len-14] == "I"){
								if($input[$len-15] == "n"){
							if($input[$len-16] == "1"){
								echo "flag";
							}}}}}}}}}}}}}}}}} -->
</body>
</html>
