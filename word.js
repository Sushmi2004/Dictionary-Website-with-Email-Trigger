"use strict"

/*******************************************
* Resize the image to fit the user's screen
********************************************/
function placeImage(w, h) {
    w = window.screen.availWidth;
    h = window.screen.availHeight;

    document.body.innerHTML += '<img src=' + '"https://source.unsplash.com/collection/347929/' + w + 'x' + h + '"' + ' id="bg" alt="">';
}

/**************************************
* Get the date and place it at the top
***************************************/
function getDate() {
    var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var date = new Date();
    var day = date.getDate();
    var monthIndex = date.getMonth();
    var year = date.getFullYear();

    var marker;
    if (day == 1 || day == 21) {
        marker = "st";
    } else if (day == 2 || day == 22) {
        marker = "nd";
    } else if (day == 3 || day == 23) {
        marker = "rd";
    } else {
        marker = "th";
    }

    document.getElementById('date').innerHTML = monthNames[monthIndex] + ' ' + day + marker + ' ' + year;
}

/*******************************************************************
* Use the Wordnik API to get the word of the day and its definition
********************************************************************/
function theWord(callback) {
    var baseUrl = "https://api.wordnik.com/v4/words.json/wordOfTheDay?api_key=";
    var apiKey = "1380d58b8b5c33325130c0e8f340be6bc6fba6f7bb65bfc6f";
    var apiUrl = baseUrl + apiKey;

    //A promise is needed here, as without it the second API call would return before pronounceIt() can execute the callback, and we would get, well, nothing, instead of the actual word.
    return new Promise(function(resolve, reject) {
        
      $.ajax({
          type: "GET",
          url: apiUrl,
          dataType: "json",
          success: function(data) {
              $("#word").append(data.word);
              $("#defin").append(data.definitions[0].text);
              resolve();
          }
      });

    });
}

/**********************************************************
* Use the Wordnik API to get the pronunciation of the word
***********************************************************/
function speakText(text) {
    // Create a new Audio object and set the source to the Google Text-to-Speech API
    var audio = new Audio();
    audio.src = "https://translate.google.com/translate_tts?ie=UTF-8&q=" + encodeURIComponent(text) + "&tl=en&client=tw-ob";

    // Play the audio
    audio.play();
}
function pronounceIt(word) {
    var baseUrl = "https://api.wordnik.com/v4/word.json/";
    var apiKey = "1380d58b8b5c33325130c0e8f340be6bc6fba6f7bb65bfc6f";
  
    var apiUrl = baseUrl + word + "/pronunciations?useCanonical=true&typeFormat=ahd&limit=50&api_key=" + apiKey;
  
    $.ajax({
        type: "GET",
        url: apiUrl,
        dataType: "json",
        success: function (data) {
            if (data.length > 0) {
                var input = data[0].raw;
                var output = "[" + input.slice(1, -1) + "]";
                $("#pronun").append(output);

                // Enable the mic icon
                $('#mic-icon').click(function () {
                    speakText(word);
                });
            }
        }
    });
}



/****************************
* Fade in the image and text
*****************************/
$(document).ready(function() {
    placeImage();
    getDate();
    theWord().then(function () {
        var word = $("#word").text();
        pronounceIt(word);
    });
    $('img').css('opacity', 1);
    $('body').css('opacity', 1);
});

$('#favorites').click(function() {
    $('#fave-panel').addClass('hide');
})


//store items in favorites by clicking a heart icon
// use localStorage
//https://developer.mozilla.org/en/docs/Web/API/Window/localStorage
//http://codepen.io/CrocoDillon/pen/pIlKB?editors=0010

