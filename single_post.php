<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php $rating = getRating($post['id']); ?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | blogger.disk</title>
<link rel="stylesheet" type="text/css" href="static/css/rating_style.css">
  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").value=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="static/images/star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="static/images/star1.png";
      }
   }
</script>

</head>
<body>

  

<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/nav.php'); ?>
	<!-- // Navbar -->
	
	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">

			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
				</div>
			<?php endif ?>
			</div>
			<!-- // full post div -->
			
			<!-- comments section -->
			<!--  coming soon ...  -->
		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['tid'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
		<div class="post-wrapper">
			<p>Rate post</p>
  			<p id="total_votes">Total Votes: <?php echo $rating[0]['votes'];?></p>
			<p>PHP <?php echo $rating[0]['points'];?></p>

			<div class="stars">
			<form method="post" action="insert_rating.php">
				<div class="div">
					  <input type="hidden" id="php1_hidden" value="1">
					  <img src="static/images/star1.png" onmouseover="change(this.id);" id="php1" class="php">
					  <input type="hidden" id="php2_hidden" value="2">
					  <img src="static/images/star1.png" onmouseover="change(this.id);" id="php2" class="php">
					  <input type="hidden" id="php3_hidden" value="3">
					  <img src="static/images/star1.png" onmouseover="change(this.id);" id="php3" class="php">
					  <input type="hidden" id="php4_hidden" value="4">
					  <img src="static/images/star1.png" onmouseover="change(this.id);" id="php4" class="php">
					  <input type="hidden" id="php5_hidden" value="5">
					  <img src="static/images/star1.png" onmouseover="change(this.id);" id="php5" class="php">
					  <br>
				</div>
				<!-- // tar med id og videre for å sende posten videre og lagre -->
				<input type="hidden" name="id"value=<?php echo $post['id'];?>>
				<input type="hidden" name="votes"value=<?php echo $rating[0]['votes'];?>>
				<input type="hidden" name="points"value=<?php echo $rating[0]['points'];?>>
				<input type="hidden" name="phprating" id="phprating" value="0">
				<input type="submit" value="Submit" name="submit_rating">
			</form> 
			</div>
			
		</div>
	</div>
</div>
<!-- // content -->

<?php include( ROOT_PATH . '/includes/footer.php'); ?>