<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multi-page template</title>
	<link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../favicon.ico">
	<script src="../js/jquery.js"></script>
	<script src="../_assets/js/index.js"></script>
	<script src="../js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

	<div data-role = "page">
		<div data-role = "header" data-position = "fixed">
			<a href="tartans.html" data-rel="back" data-icon="back" data-role="button">Back</a>
			<h1>The Tartanator</h1>
		</div>
		<div data-role="content">
			<form id="tartanator_form">
				<ul data-role="listview" id="tartanator_form_list">
					<li data-role="list-divider">tell us about your tartan</li>
					<li data-role="fieldcontain">
						<label for="tartan_name">Tartan Name</label>
						<input type="text" name="name" id="tartan_name" placeholder="Tartan Name" />
					</li>
					<li data-role="fieldcontain">
						<label for="tartan_info">Tartan Info</label>
						<textarea cols="40" rows="8" name="tartan_info" id="tartan_info" placeholder="optional tartan description or info"></textarea>
					</li>
					<li data-role="list-divider">build your colors</li>

					<?php for($i = 0; $i < 6; $i++):?>
					<li class="colorset">
						<div data-role="fieldcontain" class="color-input">
							<label class="select" for="color-<?php print $i ?>">Color<?php print $i ?></label>
							<select name="colors[]" id="color-<?php print $i ?>">
								<option value="">Select a Color</option>
								<option value="#000000">黑</option>
								<option value="#ffffff">白</option>
							</select>
						</div>
						<div data-role="fieldcontain" class="size-input">
							<label for="size-<?php print $i?>">Stitch Count</label>
							<input id="size-<?php print $i?>" type="range" min="2" step="2" max="72" autocomplete="off" name="sizes[]" value="2" />
						</div>
					</li>
					<?php endfor; ?>
				</ul>
			</form>


		</div>
		<div data-role = "footer" data-position = "fixed">
			<h4>Bring forrit the tartan !</h4>
		</div>
	</div>
</body>
</html>
