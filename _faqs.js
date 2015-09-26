//On the faqs.html page, need to unhide the answers when the button next to the question is pressed
//When clicking the button again (toggle), hide the question again.

//Set variables


////When a button is pressed next to a question
//

$("#faq_item button").click(function() {
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

    //Unhide the li immediately under the current li of the button

//When a button is pressed again
    //Hide the li immediately under the current li of the button