<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" href="semantic/dist/semantic.css" media="screen">
	<link rel="stylesheet" href="assets/css/edits.css" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<!-- <script type="text/javascript" src="images.php"></script> -->
<script src="images.php"></script>
</head>
<body>

	<div class="ui modal">
		<div class="header">Header</div>
		<div class="ui six column center aligned grid">
			<div class="column">
				<div class="item">
					<div class="image content">
						<div class="hard-code-centered image">
							<div class="ui centered big bordered stackable image">
								<img id="picture" src="">
							</div>
						</div>
						<div onclick="prev()" id="prev" class="ui left floated left labeled icon button">
							<i class="left arrow icon"></i>
							Previous
						</div>
						<div onclick="next()" id="next" class="ui right floated right labeled icon button">
							<i class="right arrow icon"></i>
							Next
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<button class="pic ui button" onclick="refreshImage('coding-workshop')">
		test
	</button>
	<button class="pic ui button" onclick="refreshImage('core-hacks')">
		test2
	</button>

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>
	<script type="text/javascript">
		$('.ui.modal')
		.modal('attach events', '.pic', 'show')
		;

	</script>


</body>
</html>

