var storedNumber;//this is a variable that stores the previous number user clicked on;
var button = $(".button");//Jquery selector for the filled buttons;
var emptyButton = $(".emptyButton");//Jquery selector for the empty buttonsl
var subIdArray = [];//an array that stored the numbers of the ID's of the buttons that are clicked on;
var doneArray = [];//an array that gets values added, if it hits 16 the game is done;

button.click(function(event) {
    alert('please try clicking on another button')//if you click a flipped button you get this error msg;
});

emptyButton.click(function(event) {//if you click on an empty button;
    var id = $(this).attr('id');//gets the ID attr from the button that user clicked on;
    var subId = id.substring(11);//collects the final numbers of the ID attr;
    subIdArray.push(subId);//pushes the subid to the subIdArray;
    var flippedButton = $("#button"+subId);//var flipped button equals the flipped button+id;

    $(this).hide();//hides the empty button;
    flippedButton.show();//shows the button beneath it that shows a number;

    if (typeof storedNumber == 'undefined') {//if the stored number is undefined;
        storedNumber = flippedButton.text();//set the internal text of the button as var storedNumber;
    }

    else if (storedNumber !== flippedButton.text()) {//if the clicked emptyButton doesn't match the text of the previous number;
        subIdArray = [];//reset subIdArray;
        storedNumber = undefined;//sets storedNumber back to undefined;

        setTimeout(function () {
            //after the buttons are flipped which will always happen as the if statement regarding undefined always returns true first time, then it flips the empty button back up and the filled button down;
            $(".button:not('.done')").hide();
            $(".emptyButton:not('.done')").show();
        }, 200);//delay of 200ms, enough time to see the new card that was under it;
    }

    else {
        doneArray.push(1,1);//pushes 2 values to the doneArray stating a pair has been created;
        for (var i = 0; i < subIdArray.length; i++) {//for the length of the subIdArray;
            $("#button"+subIdArray[i]).css('background-color', 'green').addClass('done');//change all the stored ID's background color to green;
            $("#emptybutton"+subIdArray[i]).addClass('done');//adds the class done;
        }
        subIdArray = [];//resets the subIdArrayl
        storedNumber = undefined;//resets the storedNumber;
    }

    if (doneArray.length == 16) {//if the done array is filled to 16;
        alert('YOU WIN!');//alert the player he won;

        setTimeout(function () {//after 2000ms reload the webpage;
            location.reload();
        }, 2000);
    }
});
