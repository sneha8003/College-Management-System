<?php 
$pdo = new PDO("mysql:host=localhost;dbname=sabuassign", 'root', '');
if(isset($_GET['query']))
{
$query = $_GET['query'];
$min_length = 3; //setting the length of the query as 3

if(strlen($query) >= $min_length){
$query = htmlspecialchars($query);
//changes to for example: < to &gt;
$stmt = $pdo->prepare("SELECT * FROM products WHERE (`title` LIKE '%".$query."%')");
$stmt->execute();

$data = $stmt->fetchAll();
foreach ($data as $row)
{ ?>
<img height="200" width="200" src="<?php echo $row['prodimage'] ?>"/> <!-- fixing image size -->
<h3><u><?php echo $row['title']; ?></u></h3>
<p><?php echo $row['description']; ?></p>
<div class="price"><?php echo "$". $row['price']; ?></div>
<br><hr /><br>
<?php 
}


}

else{
echo "INVALID SEARCH!!";
}
}
?>

<!doctype html>
<html>
<head>
<title>Ed's Electronics</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />

</head>
<body>
<header>
<h1>SEARCH</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="">Products</a>

<!-- Product list from the database -->
<ul>
<?php
$stmt=$pdo->prepare("SELECT * FROM categories");
$stmt->execute();
foreach($stmt as $row)
{?>
<li><a href="currentproduct.php?cpid=<?php echo $row['id'];?>"><?php echo $row['name']; ?></a></li><!--link of the currentproduct.php in the index of the user view-->
<?php
}
?>
</ul>
</li>
<li><a href="search.php">Search</a></li>

</ul>
<address>
<p>We are open 9-5, 7 days a week. Call us on
<strong>01604 11111</strong>
</p>
</address>
</header>
<section></section>
<main>
<h1>Welcome to Ed's Electronics Control Panel</h1>

<p>We stock a large variety of electrical goods including phones, tvs, computers and games. Everything comes with at least a one year guarantee and free next day delivery.</p>

<hr />

<form action="search.php" method="GET">
<input type="text" name="query" />
<input type="submit" value="Search" />
</form>
</main>
<?php
$stmt=$pdo->prepare("SELECT * FROM products WHERE fd_pd ='YES'");//selecting prepared statement from the products
$stmt->execute();
?>
<?php foreach ($stmt as $row){//helps to loop the array
?>

<h3><u><?php echo $row['title']; ?></u></h3>
<p><?php echo $row['description']; ?></p>
<?php }?>

</aside>

<footer>
&copy; Ed's Electronics <?php echo Date("Y");?>

</footer>

</body>
</html>
