<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
</head>

<style>
    #jumbotron {
        background-image: url('images/IMG_6609.jpg');
}
</style>

<body>

    <header id="main-header">
    
    </header>
    
    <div id="jumbotron">
        <div id="header-title">
        <h1>Disney 2016</h1>
        <h2>A Mudge-Riley adventure</h2>
        </div>
<!--Menu from PHP file-->
        <?php include "php/menu.php"; ?>
    </div>
    
<!--This is the player div    -->
    <div id="YourPlayerID"></div>
    
    
<?php include 'php/footer.php';?>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/common.js"></script>

    <link href="src/ytv.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="src/ytv.js"></script>
		<script>
			window.onload = function(){
				
				window.controller = new YTV('YourPlayerID', {
					user: 'fiestcheston',
                    playlist: 'PLKkTsXiNDEzprhkI0y4lZJdYLN_1ozsVJ',
					accent: 'orange',
					autoplay: true,
					controls: true
				});
		
			};
		</script>
    
</body>

