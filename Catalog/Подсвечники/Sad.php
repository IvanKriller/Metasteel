<?php
require 'header.php'
?>

<?php
include "../../database.php";
$metalprod = $_GET['food'];
$result = $induction->query("SELECT * FROM Product_1 WHERE Id_product = $metalprod");
?>

<link rel="stylesheet" href="Style\Catalog.css" type="text/css">


<div class = 'block'>

<?php
if ($row = $result->fetch_assoc()) {
?>

<div class = 'image_1' id ='image_1'>
<img src="<?php echo $row['Photo_1']; ?>">
</div>
<div class = 'image_1_1' id ='image_1_1'>
<img src="<?php echo $row['Photo_2']; ?>">
</div>
<div class='image_2' id='image_2'>
<img src="<?php echo $row['Photo_1']; ?>">
</div>

<div class='image_3' id='image_3'>
<img src="<?php echo $row['Photo_2']; ?>">
</div>

	<div class='opisanie'>

				<div class='Info'>
					<button id='Opisanie' class='Opisanie' >Описание</button>
					<button id='State' class='State'>Характеристики</button>
				</div>
				<div class = 'Opisanie_d' id ='Opisanie_d'>
				</p><?php echo $row['Description']; ?>
				</div>
				<div class = 'State_d' id ='State_d'>
				</p><?php echo $row['Specifications']; ?>
				</div>
	</div>
<button class='add' ><a href="../../Corzina.php?&id=<?php echo $row['Id_product'] ?>">Добавить в корзину</button></a>



</div>
<?php
}
?>


	</div>


</div>
	<script src = "js\Svet_1.js"></script>
	</div>
	<?php
require '../../footer.php'
?>
	</div>
</body>
</html>