<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<link rel="icon" href="1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="include/style.css">
	<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
</head>
<body>
	<section class="intro">
		<div class="inner">
			<div class="content">
				<h1>Hello World</h1>
				<br />
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log in</button>
			</div>			
		</div>
	</section>

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Please Log in</h4>
			</div>

			<div class="modal-body">
				<form action="action/redirect.php" method="post">
					<div class="form-group">
						<label for="usr">
							Username:
						</label>
						<input type="text" class="form-control" name="username" required>
					</div>
					<div class="form-group">
						<label>
							Password:
						</label>
						<input type="text" class="form-control" name="password" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-md">Login</button>
					</div>
					</div>				
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			
		</div>
	</div>
</div>
<script type="text/javascript" src="include/jquery.min.js"></script>
<script type="text/javascript" src="include/bootstrap.min.js"></script>
</script>
</body>
</html>