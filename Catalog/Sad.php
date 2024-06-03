<?php
require_once(realpath('header.php')) 
?>



<?php
include "../database.php";
$metalprod = $_GET['id'];
$result = $induction->query("SELECT * FROM Product_1 WHERE Product_cat = $metalprod");
?>




<link rel="stylesheet" href="Style\Style.css" type="text/css">
<link rel="stylesheet" href="Style\Fon_style.css" type="text/css">
<link rel="stylesheet" href="Style\Catalog.css" type="text/css">

<script src = "sad_js.js"></script>
		<div class="container">

<?php
while($food = mysqli_fetch_assoc($result))
{
	?>
	<div class="block">
				<img src="<?php echo $food['Photo']; ?>" id='img_1'>
				</p><?php echo $food['Name']; ?>
				<p>
				<button class='Podsvecnic' > <a href= "Подсвечники\Sad.php?food=<?php echo $food['Id_product'] ?>">Открыть</button></a>
			</div>
			<?php
}
?>
		
	

		</div>
	</div>
<?php
require '../footer.php'
?>
		
</body>
</html>