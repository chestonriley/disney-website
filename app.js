//Problem:  No current way to change the video to some other video on the video page
//Solution:  Make the video on the page change based on what is selected in the drop down

//1.  Define a JS function to chose the right URL based on the input

function returnVideoURL(videoClip) {
    
    switch (videoClip) {
        case "riley2013": 
            return "https://www.youtube.com/embed/YWbCANvduBg";
        case "riley2014": 
            return "https://www.youtube.com/embed/n83AzGAbjWg";
        case "riley2015": 
            return "https://www.youtube.com/embed/XQ1SFGbgaG8";
        default: 
            return "Not found";
    }
}

//2.  On the change event for the drop down, change to the new URL in the DOM iframe
                
$("#selected-video").on("change", function() {
    console.log(this.value);
    var videoClip = this.value;
    var videoURL = returnVideoURL(videoClip);
    console.log(videoURL);
    $("iframe").attr("src",videoURL)
});

//-----------------------------------------------
//             OLD CODE
//-----------------------------------------------

//This was the old way that I did it.  Now see above for the switch way

//1.  Define functions which set the youtube video based on the drop down value


//function riley2013() {
//    return "https://www.youtube.com/embed/YWbCANvduBg";
//}
//
//function riley2014() {
//    return "https://www.youtube.com/embed/n83AzGAbjWg";
//}
//
//function riley2015() {
//    return "https://www.youtube.com/embed/XQ1SFGbgaG8";
//}

//2.  Define an event on select of new drop down item that
    //Select the new video
//$("#selected-video").select(function() {
//   if (($this) == "riley2013") {
//       console.log("worked");
//   }
//});

//$("#selected-video").on("change", function() {
//    console.log(this.value);
//    var videoClip = this.value;
    //Set the value of the src video url to new video source
//    if (videoClip == "riley2013") {
        //Change the iframe src to return value
//        videoURL = riley2013();
//        console.log(videoURL);
//        console.log(videoClip);
//        $("iframe").attr("src",videoURL)
//    } else if (videoClip == "riley2014") {
//        console.log(videoClip);
//        videoURL = riley2014();
//        $("iframe").attr("src",videoURL)
//    } else {
//        console.log(videoClip);
//        videoURL = riley2015();
//        $("iframe").attr("src",videoURL)
//    
//    }
//});



    


