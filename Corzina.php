<?php
session_start();
?>

<?php
include "database.php";
$result = mysqli_query($induction, "SELECT * FROM `Product_1`");
?>

<?php
require 'header.php'
?>
<link rel="stylesheet" href="Style\Style.css" type="text/css">
<link rel="stylesheet" href="Style\Corzina.css" type="text/css">

<div class = 'block_1'>
Ваш заказ
</div>


<div id = 'tovar'>
<?php 
	 
		if(isset($_SESSION['cart'])){ 
			$sql="SELECT * FROM Product_1 WHERE Id_product IN ("; 
			foreach($_SESSION['cart'] as $id => $value) { 
			$sql.=$id.","; 
			} 
			$sql=substr($sql, 0, -1).") ORDER BY name ASC";
			 $tovar = $_GET['id'];
			$query=mysqli_query($induction, "SELECT * FROM Product_1 WHERE Id_product = $tovar"); 
			while($row=mysqli_fetch_array($query)){ 
			?> 
			<div id="Text">
			<p><?php echo $row['Name' ] ?>  
			</div>
			<div id="Text">
			<p><?php echo $row['Price' ] ?>  
			</div>

			<div class="container">
        <div class="counter">
            <button id="increment-btn">+</button>
            <div id="counter-value">1</div>
            <button id="decrement-btn">-</button>
        </div>
        <button id="reset">Reset</button>
	</div>
    <script src="js/Corzina.js"></script>
		<div id="Text">
			<p><?php echo $row['Price' ] ?>  
			</div>
			<?php 
				 
			} 
		?> 

		<?php 
			 
		}else{ 
			 
			echo "<p>Your Cart is empty. Please add some products.</p>"; 
			 
		} 
	 
	?>


	
	</div>
	</div>
</div>
	
	</div>
	<div class="footer">
	 Весь графический дизайн © 2024. Все права защищены.
Вся информация, размещенная на сайте, является интеллектуальной собственностью. Любое копирование и использование информации без письменного разрешения запрещено.
	</div>
	</div>
</body>
</html>
