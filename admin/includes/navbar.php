<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Blogger.disk - Admin</h1>
		</a>
		<a href="<?php echo BASE_URL .'index.php' ?>">home</a>
	</div>
	<div class="user-info">
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
		
	</div>
</div>

