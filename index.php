<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<title>blogger.disk</title>
</head>
<body>
<header>
        <h1>Blogger.disk</h1>
</header>
<div>
        
<nav>
        <?php include 'includes/nav.php';?> 
</nav>
<div class="content">
        <h2 class="content-title">Recent Articles</h2>
        <?php include 'includes/artikelvisning.php';?> 
</div>
<?php include( ROOT_PATH . '/includes/banner.php') ?>
        <?php include 'includes/footer.php';?> 

