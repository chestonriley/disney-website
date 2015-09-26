<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
</head>

<body>

    <header id="main-header">
    
    </header>
    
    <div id="jumbotron">
        <div id="header-title">
        <h1>Disney 2016</h1>
        <h2>A Mudge-Riley adventure</h2>
        </div>
<!--        Menu from PHP file-->
        <?php include "php/menu.php"; ?>
    </div>
    
        <div id="calendar-selector">
            <iframe src="https://www.google.com/calendar/embed?showTabs=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=shrmudge4%40gmail.com&amp;color=%13500C57&amp;ctz=America%2FNew_York&dates=20160514%2F20160514" style=" border-width:0 " width="1024" height="800" frameborder="0" scrolling="no">
            </iframe>
        </div>

    
<?php include 'php/footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
    
    
</body>

