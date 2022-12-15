<!DOCTYPE HTML>
<html>

<head>
	<title>QRCode generator</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php
	if (empty($_GET["url"]))
		return false;
	?>

	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/qrcode.js"></script>
</head>

<body>
	<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>

	<script type="text/javascript">
		var qrcode = new QRCode(document.getElementById("qrcode"), {
			width: 100,
			height: 100
		});
		qrcode.makeCode("<?php echo $_GET["url"] ?>");
	</script>
</body>

</html>