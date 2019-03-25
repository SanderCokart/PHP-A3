var storedNumber;
var button = $(".button");
var emptyButton = $(".emptyButton");
var subIdArray = [];
var doneArray = [];

button.click(function(event) {
    alert('please try clicking on another button')
});

emptyButton.click(function(event) {
    var id = $(this).attr('id');
    var subId = id.substring(11);
    subIdArray.push(subId);
    var flippedButton = $("#button"+subId);

    $(this).hide();
    flippedButton.show();

    if (typeof storedNumber == 'undefined') {
        storedNumber = flippedButton.text();
    }

    else if (storedNumber !== flippedButton.text()) {
        subIdArray = [];
        storedNumber = undefined;

        $(this).hide();
        flippedButton.show();

        setTimeout(function () {
            $(".button:not('.done')").hide();
            $(".emptyButton:not('.done')").show();
        }, 200);
    }

    else {
        doneArray.push(1,1);
        for (var i = 0; i < subIdArray.length; i++) {
            $("#button"+subIdArray[i]).css('background-color', 'green').addClass('done');
            $("#emptybutton"+subIdArray[i]).addClass('done');
        }
        subIdArray = [];
        storedNumber = undefined;
    }

    if (doneArray.length == 16) {
        alert('YOU WIN!');

        setTimeout(function () {
            location.reload();
        }, 2000);
    }
});
