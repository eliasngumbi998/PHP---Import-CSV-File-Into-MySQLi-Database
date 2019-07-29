<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
 
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href = "<a href="https://eliasngumbipro.com">Eliasngumbipro</a>
" rel="nofollow">https://eliasngumbipro.com">eliasngumbipro</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class = "text-primary">PHP - Import CSV File Into MySQLi Database</h3>
		<hr style = "border-top:1px dotted #ccc;"/>
		<div class="col-md-4" style='overflow:hidden;'>
			<form action="upload.php" class="form-inline" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Upload CSV file here:</label>
					<br />
					<input type="file" name="file"/>
					<br />
					<center><button name="upload" class="btn btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button></center>
				</div>
			</form>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						$query=mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $fetch['firstname']?></td>
							<td><?php echo $fetch['lastname']?></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
