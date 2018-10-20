
<span>Brightness</span><input oninput="update()" id="brightness" type="range" name="brightness" min="0" max="255" value="0"><br>
<iframe src="submit.php" id="frame"></iframe>

<style type="text/css">
	iframe {
		opacity: 0;
		position: absolute;
	}	
</style>
<script type="text/javascript">
	function update() {
		var brightness = document.getElementById('brightness').value;
		document.getElementById('frame').src = "http://honigkuchenpups.de:81/led2/submit.php?brightness=" + brightness;
	}
</script>