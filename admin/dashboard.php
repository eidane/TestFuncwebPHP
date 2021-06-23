<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<?php $countpublished=getNumberOfUnpublished(); ?>

	<title>Admin | Dashboard</title>
</head>
<body>

	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>Blogger.disk - Admin</h1>
			</a>
			<a href="<?php echo BASE_URL .'index.php' ?>">Home</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			<?php 
				if ($_SESSION['user']['role']=='Admin'){
					if ($countpublished!=0){
					echo "<br><span> You have unpublished posts: ".$countpublished."</span>"; 
				}}
			?>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<?php if ($_SESSION['user']['role']=='Admin'): ?>
			<a href="users.php" class="first">
				<span>Registered users</span>
			</a>
		<?php endif?>
			<a href="posts.php">
				<span>Administer posts</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<?php  if ($_SESSION['user']['role']=='Admin'): ?>

			<a href="users.php">Add Users</a>
			<?php endif; ?>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
</body>
</html>