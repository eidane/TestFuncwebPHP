<?php
 
    $sql="select id,votes,points from posts where id=$id"
    $select_rating=mysql_query($conn,$sql);
    $total=mysql_num_rows($select_rating);
  
    while($row=mysql_fetch_array($select_rating))
    {
	   
    }
    $total_php_rating=(array_sum($phpar)/$total);
    $total_asp_rating=(array_sum($aspar)/$total);
    $total_jsp_rating=(array_sum($jspar)/$total);
  
?>