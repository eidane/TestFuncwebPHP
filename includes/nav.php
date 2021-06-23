	
<div class="navbar">

<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
    <?php 
    if (array_key_exists("user",$_SESSION)){
    if (in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
        echo "<li><a href='admin/dashboard.php'>Dashboard</a></li>";
    }}
     ?>
</ul>


</div>