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

    <div class="secondary-content">
 
        <div class="right-content">
            <img src="http://www.doctordisney.com/wp-content/uploads/2013/08/friendshipboat.jpg" alt="family pic">
        </div>
        
        <div class="left-content">
            <div id="article-header">
                <h2>Getting Around in Disney World</h2>
                <h3>What you need to know about selecting the right option for you</h3>
            </div>
            <div class="para-content">
                <p>When planning for your Disney World adventure, you find that transportation is definitely one of the more expensive aspects of your magical vacation.  But the cold, hard fact is that the complex is far to big to walk anywhere (unless you are staying at the Boardwalk).  So considering what option to choose ahead of time can help you find the right balance between budget and "pain-in-the-neck" inconvenience.  It's just like anything else at Disney World:  You get what you pay for.</p>
                <p>After staying there several years now, we've experienced all of the transportation options, and I've come up with some pros and cons for each of your transportation options.  It's important to note here that, most likely, your transportation decisions will NOT be made exclusive of other options.  Your transportation decisions will likely change day-to-day.</p>
                <p>First, let's consider the option of getting a rental car.</p>
                
                <div class="trans_option_list" id="rental_car_list">
                    <h2 class="trans_list_header">Renting a Car</h2>
                    <div class="trans_option_list_left">
                        <h3 class="trans_list_header">Pros</h3>
                        <ul>
                            <li>Getting back and forth to some of the places that have easy parking is much better.  Downtown Disney, miniature golf courses, etc. that are not a part of the parks are a little easier and cheaper to get to by rental car.</li>
                            <li>In a medical “emergency”, getting to the clinic might be a little faster as well. </li>
                            <li>In addition, we nearly ALWAYS find ourselves making at least 2 trips to Walmart (just down the road) during our stay, and having a rental car makes it very convenient.</li>
                        </ul>
                    </div>
                    <div class="trans_option_list_right">
                        <h3 class="trans_list_header">Cons</h3>
                        <ul>
                            <li>The price.  You will pay about $400 for the week for a standard car.</li>
                            <li>You won’t be taking it to the parks anyway, since parking costs as well, and parking in the park lots is a nightmare, anyway. </li>
                            <li>Getting into a Disney resort (like the Boardwalk) is almost impossible in your own car.  They definitely frown on you parking in their GATED resort lots if you aren’t staying there, and even if you have a dinner reservation.</li>
                        </ul>
                    </div>
                </div>
                <p>The next option to consider is via the bus system.  Disney has an enormous number of buses that run around the property all day long.  Sometimes I think that there are more buses than cars!:</p>
                <div class="trans_option_list" id="bus_system_list">
                    <h2 class="trans_list_header">Using the Bus System</h2>
                    <div class="trans_option_list_left">
                        <h3 class="trans_list_header">Pros</h3>
                        <ul>
                            <li>Once you get into the Disney bus system, it’s FREE.</li>
                            <li>The buses are well labeled, and you can get ANYWHERE on the Disney property. </li>
                            <li>It’s nice not to worry about where you put your car.</li>
                        </ul>
                    </div>
                    <div class="trans_option_list_right">
                        <h3 class="trans_list_header">Cons</h3>
                        <ul>
                            <li>It’s NOT free to take the Wyndham bus to the parks.  In 2014, the price was $5/person.  And there is NOT a Disney bus that comes to the resort (Wyndham is not Disney owned)</li>
                            <li>Figuring out how to get from place to place can be a bit confusing.</li>
                            <li>You get to ride with everyone else… for us, that’s a CON.</li>
                        </ul>
                    </div>
                </div>
                <p>Finally, you can take a taxi to just about anywhere you want.  We definitely recommend this option:</p>
                <div class="trans_option_list" id="taxi_list">
                    <h2 class="trans_list_header">Taking a Taxi*</h2>
                    <div class="trans_option_list_left">
                        <h3 class="trans_list_header">Pros</h3>
                        <ul>
                            <li>On-demand service.</li>
                            <li>The price isn’t too bad at roughly $20/trip </li>
                            <li>You are dropped off right at the entrance to the park.  That’s SUPER convenient if you’ve ever tried to park your car at one.</li>
                            <li>You can get into the Disney resorts (to do site-seeing/etc.) since you aren’t parking.</li>
                        </ul>
                    </div>
                    <div class="trans_option_list_right">
                        <h3 class="trans_list_header">Cons</h3>
                        <ul>
                            <li>$20/trip can add up, especially if you forget your tickets and have to go back to the resort (Been there, done that!)</li>
                            <li>You will need to plan ahead on each trip to ensure that you have enough time for the taxi to get there</li>
                            <li>The customer service isn't the best.  The dispatchers often have a hard time getting it right.  This can cause some extra wait at times.</li>
                            </ul>
                        </div>
                    <p style="padding: 20px; font-size: 1em;">* New from 2015:  The cab drivers HATE taking credit cards (I think it's because they have to report it, then).  They definitely let you know it, too.  Just be sure to make it clear WHEN YOU GET IN THE CAR that you are paying with a credit card.</p>
                </div> 
                    
                <p>Leaving the comfort of the resort to do some exploring can definitely be a bit stressful from the point of view of actually getting from place to place.  We find that the taxi option is the best balance of price vs. stress.  Last year's taxi driver experience was pretty bad for us, but at least you know what you are expecting, which is 90% of the battle.</p>

        </div>
    </div>
        
    
    </div>
<?php include 'php/footer.php';?>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="app.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/common.js"></script>
    
</body>

