<?php
	$page_title = "Task Management System";
    include_once "header.php";
	include("db_conn.php");
	
	$sql = "SELECT * FROM `user";
?>
		<header>
		<div class="container">
			<div class="row">
				<hr>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Task Management System</h4>
						</div>
                </div>
				<div class="panel panel-default">
						<div class="panel-heading">
							<h4>"To Be Updated"</h4>
							<h4></i>Administrator</h4>
						</div>
		</header>
		<div class="container">
			<div class="row">
				<hr>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-check"></i>Tasks</h4>
						</div>
						<div class="panel-body">
							<p>View and Create Tasks.</p>
							<a href="task.php" class="btn btn-default btn-block">Tasks</a>
						</div>
					</div>
                </div>
                <div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-user"></i>Users</h4>
						</div>
						<div class="panel-body">
							<p>View And Add New Users.</p>
							<a href="" class="btn btn-default btn-block">Users</a>
						</div>
					</div>
				</div>
			</div>
<?php include_once "footer.php";?>