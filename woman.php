<!DOCTYPE html>
<html>
    <head>
	<?php require_once "Blocks/head.php"; ?>
    </head>
    <body>
	<?php require_once "Blocks/header.php"; ?>
		<table border="0" width="1000" cellpadding="5" cellpaccing="0" align="center">
			<h1 align="center">наши товары</h1>
			<div class="product-gallery">
				<div class="product" onclick="window.location.href='Outerwear.php'">
					<img src="Images/outerwear.jpg" alt="верхняя одежда" width="75%" height="75%">
					<h3>верхняя одежда</h3>
				</div>
				<!-- <div class="product" onclick="window.location.href='#'">
					<img src="Images/jeans.jpg" alt="джинсы" width="75%" height="75%">
					<h3>джинсы</h3>
				</div>-->
				<!-- <div class="product" onclick="window.location.href='#'">
					<img src="Images/sweeter.jpg" alt="свитеры и кардиганы" width="75%" height="75%">
					<h3>свитеры и кардиганы</h3>
				</div>
				<div class="product" onclick="window.location.href='#'">
					<img src="Images/shoes.jpg" alt="обувь" width="75%" height="75%">
					<h3>обувь</h3>
				</div> -->
				<div class="product" onclick="window.location.href='dress.php'">
					<img src="Images/dress.jpg" alt="платья" width="75%" height="75%">
					<h3>платья</h3>
				</div>
				<!-- <div class="product" onclick="window.location.href='#'">
					<img src="Images/hat.jpg" alt="шапки" width="75%" height="75%">
					<h3>шапки</h3>
				</div> -->
			</div>
		</table>
		<br>
		<?php require_once "Blocks/feedback.php"; ?>
    </body>
    <footer>
        <?php require_once "Blocks/footer.php"; ?>
    </footer>
</html>