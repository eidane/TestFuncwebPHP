<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php require( 'test.php') ?>
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
                
                <h2 class="content-title">Artikler</h2>
        <?php $posts = getPublishedPosts(); ?>

        <hr>
        <!-- gåpr igjennom hver post i listen ... -->
        <?php foreach ($posts as $post): ?>
        <div class="post" style="margin-left: 0px;">
                        <img src="<?php echo BASE_URL . 'static/images/' . $post['image']; ?>" class="post_image" alt="">
                        <!-- Added this if statement... -->
                        <?php if (isset($post['topic']['name'])): ?>
                <a 
                        href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['tid'] ?>"
                        class="btn category">
                        <?php echo $post['topic']['name'] ?>
                </a>
                <?php endif ?>

                <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                        <div class="post_info">
                        <h3><?php echo $post['title'] ?></h3>
                                <div class="info">
                                        <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                        <span class="read_more">Read more...</span>
                                </div>
                        </div>
                </a>
        </div>
        <?php endforeach ?>
</div>
<?php include( ROOT_PATH . '/includes/banner.php') ?>
        <?php include 'includes/footer.php';?> 

