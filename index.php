<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
</head>

<style>
    #jumbotron {
        min-height: 800px;
        background-image: url('images/IMG_20150508_142628552.jpg');
    }
    #jumbotron h1, #jumbotron h2 {
        color: red;
        text-shadow: -2px 2px yellow;
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
<!--        Menu from PHP file-->
        <?php include "php/menu.php"; ?>
    </div>
<!--

//This section was active, and was the slide out menu.
    <div id="jumbotron" class="vignette">
        <div id="header-title">
        <h1>Disney 2016</h1>
        <h2>A Mudge-Riley adventure</h2>
        <?php include "php/menu.php"; ?>
        </div>
        
        <div id="home_menu">
            <div id="menu_open_button">
                <p>Menu  <p>
            </div>
            <div id="home_menu_items">
            <ul>
                <li><a href="index2.php"><b>Home</b></a></li>
                <li><a href="resort.php">Resort</a></li>
                <li><a href="parkday.php">Park Day</a></li>
                <li><a href="transportation.php">Transportation</a></li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="videos.php">Videos</a></li>
            </div>
        
            </ul>
        
        </div>
    -->
    </div>
    
    <div class="secondary-content">
 
        <div class="right-content">
            <img src="IMG_1856_larger.jpg" alt="family pic">
        </div>
        
        <div class="left-content">
            <div id="article-header">
                <div class="h2_article_title">
                <h2>Kickin' it Riley Style at Walt Disney World.</h2>
                </div>
                <div class="h3_article_subtitle">
                <h3>Everything you need to know that you don't have to figure it out on your own</h3>
                </div>
            </div>
            <div class="para-content">
                <p>Our family is always very excited about our annual Disney excursion.  Over the last several years, we have been able to hone our Disney World knowledge, and it has come to be a really great tool in optimizing our time together as a family.</p>
                <p>This year, we are super-excited about being able to spend time with Adrienne and Wyatt.  It is intended to be a fun experience for all.  But knowing that it can be a bit daunting if you haven’t been there in a while, we compiled a lot of our knowledge here so that you can take advantage of the lessons that we have learned so far.  And given that the personalities are generally aligned within our entire group, I’m confident that you will find that we have captured much of what you will be concerned about, and why.</p>
                <p>Of course, this is not everything that you could ever know about vacationing in Disney World.  You should also plan to spend some time doing searches on the internet for tips/secrets/etc.  There is a wealth of knowledge available that can help prepare you for the big day.  Here’s a few good ones:</p>
                <ul id="wdwlinks">
                    <a href="http://allears.net/"><li>AllEars.net</li></a>
                    <a href="http://wdwprepschool.com"><li>WDWprepschools.com</li></a>
                    <a href="http://mousesavers.com"><li>Mousesavers.com</li></a>
                </ul>
                    
                <p>Finally, if you feel like this newsletter is overkill, then you are probably right.  But hey… We are excited about it!
</p>
            </div>
        </div>
        
    
    </div>
    
<?php include 'php/footer.php';?>
        

<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/common.js"></script>
    
</body>

