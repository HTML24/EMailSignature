<?php 
if($_POST['submit']){
$name = $_REQUEST['name'];
$phone= $_REQUEST['phone'];
$email =  $_REQUEST['email'];
$skype =  $_REQUEST['skype'];
$twitter =  $_REQUEST['twitter'];


if ($phone == ""){
	$phone = "4241 6160";
}

$contactInformationRows = "";
$emptyEndRows = 0;
if(strlen($_REQUEST['email']) == 0){
	$emptyEndRows++;
}else{
	//$contactInformationRows .= "<tr><td style=\"white-space:pre;\">E-mail:</td><td><a style=\"text-decoration: none; color: black;\" href=\"mailto:".$email."\">".$email."</a></td></tr>\n";
	$contactInformationRows .= "<a href=\"mailto:".$email."\" style=\"color:gray!important;text-decoration:none!important;\">".$email."</a><br/>\n";
}
if(strlen($_REQUEST['twitter']) == 0){
	$emptyEndRows++;
}else{
	//$contactInformationRows .= "<tr><td style=\"white-space:pre;\">Twitter:</td><td><a style=\"text-decoration: none; color: black;\" href=\"http://twiiter.com/".$twitter."\">@".$twitter."</a></td></tr>\n";
	$contactInformationRows .= "<a href=\"http://twitter.com/".$twitter."\" style=\"color:gray!important;text-decoration:none!important;\">twitter.com/".$twitter."</a><br/>\n";
}

	//$contactInformationRows .= "<tr><td style=\"white-space:pre;\">Telefon:</td><td><a style=\"text-decoration: none; color: black;\" href=\"tel:".$tele."\">".$tele."</a></td></tr>\n";
	$contactInformationRows .= "Phone: +45 " . $phone . "<br/>\n";

if(strlen($_REQUEST['skype']) == 0){
	$emptyEndRows++;
}else{
	//$contactInformationRows .= "<tr><td style=\"white-space:pre;\">Skype:</td><td>".$skype."</td></tr>\n";
	$contactInformationRows .= "Skype: ".$skype."<br/>\n";
}

$infoToPrint = "<br/>\n<br/>\n<div style=\"font-family: Verdana; font-size: 12px;color: gray;\">\n";
$infoToPrint .= "Best Regards,<br/>\n<br/>\n";
$infoToPrint .= "<strong style=\"color:black !important;\">".$name."</strong><br/>\n<br/>\n";
$infoToPrint .= $contactInformationRows;
$infoToPrint .= "Web: <a href=\"http://www.html24.dk\" style=\"color:gray!important;\">www.html24.dk</a><br/>\n";
$infoToPrint .= "Customers: <a href=\"http://twentyfour.html24.dk\" style=\"color:gray!important;\">twentyfour.html24.dk</a><br/>\n";
$infoToPrint .= "<br/>HTML24 ApS | Prags Boulevard 49, 3. sal - Opgang 10 | 2300 København S\n";
$infoToPrint .= "<br/>Subsupplier of beautiful HTML/CSS and web development in Scandinavia.<br/>\n";
$infoToPrint .= "<br/><a style=\"text-decoration:none !important;color:gray !important;\" href=\"http://html24.us2.list-manage1.com/subscribe?u=b32c92f9b30a1cdf5ecf6c96a&id=359218cc47\">Sign up for our <span style=\"text-decoration:underline !important;\">fantastic Danish newsletter</span> - click here!</a><br/>\n";

$infoToPrint .= "</div>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>HTML24 Mail Generator</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style>
		
			#info {
				font-face: Arial, sans-serif;
			}
			#info label {
				display: inline-block;
				width: 5em;
				text-align: right;
			}
			#copybox {
				display: inline-block;
				padding: 50px 100px;
				border: 1px solid #aaa;
			}
		
		</style>
	</head>
	<body>
	<h1>HTML24 Mailsignatur generator</h1>
	<p>Indtast de oplysninger nedenfor som ønskes indsat i signaturen</p>
	<form method="post" action="" id="info">
	<label for="name">Navn</label>
	<input type="text" id="name" name="name" value="<?=$name?>"/><br/>
	<label for="email">Email</label>
	<input type="email" id="email" name="email" value="<?=$email?>"/><br/>
	<label for="skype">Skype</label>
	<input type="skype" id="skype" name="skype" value="<?=$skype?>"/><br/>
	<label for="phone">Phone</label>
	<input type="phone" id="phone" name="phone" value="<?=$phone?>"/><br/>
	<label for="twitter">Twitter</label>
	<input type="twitter" id="twitter" name="twitter" value="<?=$twitter?>"/><br/>
	<input type="submit" name="submit" value="Generer"/>
	</form>
	<?php
	if($_POST['submit']){
	echo "<br/>Kopier nedenstående og indsæt signaturen i din mailklient<br/>";
	echo "<div id='copybox'";
	echo $infoToPrint;
	echo "</div>";
	echo "<br/>Eller kopier koden:<br/>";
	echo "<div id='copybox'>";
	echo "<xmp>".$infoToPrint."</xmp>";
	echo "</div>";
	}
	?>
	</body>
</html>
