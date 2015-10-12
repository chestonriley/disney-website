//Handle several different pieces of different scripts



// --- Classifying menu items on load

var href = document.location.href;
var pageName = href.substr(href.lastIndexOf('/') + 1);

$("#menu-object a").each(function() {

    var href = $(this).attr('href');
    if (pageName == href) {
        $(this).closest('li').addClass('active');
    }

});


//-- FAQ page specifically

//On the faqs.html page, need to unhide the answers when the button next to the question is pressed
//When clicking the button again (toggle), hide the question again.

//Set variables


////When a button is pressed next to a question
//

$(".faq_item button").click(function() {
    //traverse to the next li, and change its display to block.
    $(this).closest("li").next().toggle("slow");
    //toggle the button text based on if its opened or closed answer.
    if ($(this).text() === "-") {
        $(this).text("+");
        //$(this).css("background-color","lightgrey");
    } else {
        $(this).text("-");
        $(this).css("background-color","lightgrey");
    }


});

//Function to manage the sub-menu slide down/up for when screen is wide

$(document).ready(function() {
    $( '.dropdown' ).hover(
        function(){
            $(this).children('.sub-menu').fadeToggle(400);
        },
        function(){
            $(this).children('.sub-menu').fadeToggle(400);
        }
    );
});


// end ready


//-- Index2 page specifically.  This is written just in case you want to have a sliding menu on the index (home) page

$("#home_menu").hover(function() {

//    $(this).css("margin-right","0px");
    $(this).animate(
        {
        'marginRight': '0px',
        }
    )

}, function() {
    
    $(this).animate(
        {
        "margin-right": "-245px",
//        "width": "0px"
        }
    );
    
});

//$("#menu_open_button").click(function() {
//    console.log("Hit it!");
//    $("#home_menu").css("margin-right","-195px");
//});

//-- Transportation page light-box control
var $light_box = $('<div id="lightbox"></div>');
$('body').append($light_box);
// Set up functions to return the html code for the lightbox

// Rental Car lightbox
function rental_car_lightbox() {
    var lightbox = 
        '<div class="trans_option_list" id="rental_car_list">' +
                    '<h2 class="trans_list_header">Renting a Car</h2>' +
                    '<div class="trans_option_list_left">' +
                        '<h3 class="trans_list_header">Pros</h3>' +
                        '<ul>' +
                            '<li>Getting back and forth to some of the places that have easy parking is much better.  Downtown Disney, miniature golf courses, etc. that are not a part of the parks are a little easier and cheaper to get to by rental car.</li>' +
                            '<li>In a medical “emergency”, getting to the clinic might be a little faster as well. </li>' +
                            '<li>In addition, we nearly ALWAYS find ourselves making at least 2 trips to Walmart (just down the road) during our stay, and having a rental car makes it very convenient.</li>' +
                        '</ul>' +
                    '</div>' +
                    '<div class="trans_option_list_right">' +
                        '<h3 class="trans_list_header">Cons</h3>' +
                        '<ul>' +
                            '<li>The price.  You will pay about $400 for the week for a standard car.</li>' +
                            '<li>You won’t be taking it to the parks anyway, since parking costs as well, and parking in the park lots is a nightmare, anyway. </li>' +
                            '<li>Getting into a Disney resort (like the Boardwalk) is almost impossible in your own car.  They definitely frown on you parking in their GATED resort lots if you aren’t staying there, and even if you have a dinner reservation.</li>' +
                        '</ul>' +
                    '</div>' +
        '</div>'
        ;
    return lightbox;
}

// Bus System lightbox
function bus_system_lightbox() {
            var lightbox = 
            '<div class="trans_option_list" id="bus_system_list">' +
                        '<h2 class="trans_list_header">Using the Bus System</h2>' +
                        '<div class="trans_option_list_left">' +
                            '<h3 class="trans_list_header">Pros</h3>' +
                            '<ul>' +
                                '<li>Once you get into the Disney bus system, it’s FREE.</li>' +
                                '<li>The buses are well labeled, and you can get ANYWHERE on the Disney property. </li>' +
                                '<li>It’s nice not to worry about where you put your car.</li>' +
                            '</ul>' +
                        '</div>' +
                        '<div class="trans_option_list_right">' +
                            '<h3 class="trans_list_header">Cons</h3>' +
                            '<ul>' +
                                '<li>It’s NOT free to take the Wyndham bus to the parks.  In 2014, the price was $5/person.  And there is NOT a Disney bus that comes to the resort (Wyndham is not Disney owned)</li>' +
                                '<li>Figuring out how to get from place to place can be a bit confusing.</li>' +
                                '<li>You get to ride with everyone else… for us, that’s a CON.</li>' +
                            '</ul>' +
                        '</div>' +
                    '</div>';
    return lightbox;
}

//Taxi lightbox
function taxi_lightbox() {
        var lightbox = 
            '<div class="trans_option_list" id="taxi_list">' +
                        '<h2 class="trans_list_header">Taking a Taxi*</h2>' +
                        '<div class="trans_option_list_left">' +
                            '<h3 class="trans_list_header">Pros</h3>' +
                            '<ul>' +
                                '<li>On-demand service.</li>' +
                                '<li>The price isn’t too bad at roughly $20/trip </li>' +
                                '<li>You are dropped off right at the entrance to the park.  That’s SUPER convenient if you’ve ever tried to park your car at one.</li>' +
                                '<li>You can get into the Disney resorts (to do site-seeing/etc.) since you aren’t parking.</li>' +
                            '</ul>' +
                        '</div>' +
                        '<div class="trans_option_list_right">' +
                            '<h3 class="trans_list_header">Cons</h3>' +
                            '<ul>' +
                                '<li>$20/trip can add up, especially if you forget your tickets and have to go back to the resort (Been there, done that!)</li>' +
                                '<li>You will need to plan ahead on each trip to ensure that you have enough time for the taxi to get there</li>' +
                                '<li>The customer service isnt the best.  The dispatchers often have a hard time getting it right.  This can cause some extra wait at times.</li>' +
                                '</ul>' +
                            '</div>' +
                        '<p style="padding: 20px; font-size: 1em;">* New from 2015:  The cab drivers HATE taking credit cards (I think its because they have to report it, then).  They definitely let you know it, too.  Just be sure to make it clear WHEN YOU GET IN THE CAR that you are paying with a credit card.</p>' +
                    '</div>';
    return lightbox;
}

$('#rental_car_thumbnail').click(function () {
    var a = rental_car_lightbox();
    console.log(a);
    $('#lightbox').empty().append(a).fadeIn(800);
});
        
$('#bus_system_thumbnail').click(function () {
    var a = bus_system_lightbox();
    $('#lightbox').empty().append(a).fadeIn(800);
});

$('#taxi_thumbnail').click(function () {
    var a = taxi_lightbox();
    $('#lightbox').empty().append(a).fadeIn(800);
});


//Hide the lightbox when it is clicked
$light_box.click(function() {
    $light_box.fadeOut(400);
});