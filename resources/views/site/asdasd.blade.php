<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<?php
$color = 'black';
$ips=[
		'freezerscoolers.com',
		'kobi.tv',
		'etkinweb.org',
		'freestandinggasoven.com',
		'smoketroutfish.com',
		'allfreshfruitsvegetables.com',
		'officefurnitureishere.com',
		'industrial-air-dryers.com',
		'pressuredaircompressors.com',
		'clothing-underwear-cosmetics.com',
		'concreteblocksmachinery.com',
		'allconstructionchemicals.com',
		'saticilari.org',
		'saticilari.net',
		'industrialnails.com',
		'embossedsteeldoors.com',
		'buildinghardwarematerials.com',
		'buildinginsulationmaterials.com',
		'householdtextilesturkey.com',
		'jibcranesturkey.com',
		'hoisttrolleysturkey.com',
		'girdergantrycranesturkey.com',
		'overheadcranesturkey.com',
		'cranesturkey.com',
		'discploughprofession.com',
		'laceembroideryitems.com',
		'allindustrialclamps.com',
		'agrifarmmachinery.com',
		'turkishorigin.com'
		/*'findemand.org',
		'findemand.com'*/

	];
	foreach ($ips as $ip) {
	
		$host = gethostbyname($ip);
		($host == "78.111.98.153") ? $color = "red" : $color = "black" ?>
		<div class="col-md-6">
			<p><a href="<?= "http://" . $ip  ?>" target="_blank" style="color: <?= $color ?>"> <?= $ip . " --> ". $host?></a> </p>
		</div>
		<div class="col-md-6">
			<p><?= $ip ?></p>
		</div>

	<?php } ?>
</body>
</html>