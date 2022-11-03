<!--session link-->
<?php include '../../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customize Design</title>
		
	<!--<link href="css/normalize.css" rel="stylesheet">
	
    <!-- Bootstrap core CSS  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../userCustomization.css?v=<?php echo time(); ?>">

    
		<script src="js/jquery-1.10.2.js">	</script>
		<script src="js/bootstrap.js">		</script>
		
		<style>

</style>

</head>

<body>
	<!--Header and divider
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../../image/logo.png" alt="">
            </a>
        </div>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>-->
	<main>
		<div class="container">
            <section class="custo-cont">
				<div class="choices-head">
					back
				</div>
                <div class="choices">
					<?php
						include 'tdesignAPI/new_applit.php';
					?>
                </div>
            </section>
            <script src="userCustomization.js"></script>
        </div>
	</main>
</body>
		
</html>
