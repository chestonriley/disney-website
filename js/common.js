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


//-- Index2 page specifically

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
        "margin-right": "-175px",
//        "width": "0px"
        }
    );
    
});

//$("#menu_open_button").click(function() {
//    console.log("Hit it!");
//    $("#home_menu").css("margin-right","-195px");
//});



