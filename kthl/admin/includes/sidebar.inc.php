					<ul>
					<!--<li>
	
						<b>Login:</b><br> <input type="text">
						<br>
						<br>
						<b>Password:</b><br><input type"text">
					</li>-->
					<li>
						<h2>categories </h2>
						<ul>
						
<?php
$link=mysqli_connect("localhost","root","","riddhi")or die("can not connect");

    mysqli_select_db($link,"riddhi") or die("can not select database");

$q="select * from categories";
$res=mysqli_query($link, $q) or die("cant connect");
while($row=mysqli_fetch_assoc($res))
{
	/*echo '<li><a href="jobs_by_category.php">'.$row['cat_nm'].'</a></li>';*/
	echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.$row['cat_nm'].'</a></li>';

}
mysqli_close($link);
?>							
						

						</ul>
					</li>
					
				</ul>