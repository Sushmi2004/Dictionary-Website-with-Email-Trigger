<!DOCTYPE html>
<html>
<head>
  <title>Word Details</title>
 
  <style>
    @import url("https://fonts.googleapis.com/css?family=Raleway");
    * {
    box-sizing: border-box;
}
:root {
  --glow-color: hsl(186 100% 69%);
}
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Set the height of the body to full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: black; /* Set a background color */
        }



        #search {
          margin-right: 280px; /* Adjust the margin value to control the gap */

  display: grid;
  grid-area: search;
  grid-template:
    "search" 50px
    / 300px;
  opacity: 1;
  justify-content: center;
  align-content: center;
  justify-items: stretch;
  align-items: center;
  background: linear-gradient(#ffc0cB);
  padding: 10px 20px;
}


#search input {
  margin-left: 100;

  display: block;
  grid-area: search;
  -webkit-appearance: none;
  appearance: none;
  width:100%;
  height: 100%;
  background: none;
  padding: 10 20px;
  border: none;
  border-radius: 100px;
  font: 25px/1 system-ui, sans-serif;
  outline-offset: -8px;
  text-align: center; /* Center the text within the input field */
  cursor: text;
 
}



#search svg {
    grid-area: search;
    overflow: visible;
    color: hsl(215, 100%, 50%);
    fill: none;
    stroke: currentColor;
}

.spark {
    fill: currentColor;
    stroke: none;
    r: 15;
}

.spark:nth-child(1) {
    animation:
        spark-radius 2.03s 1s both,
        spark-one-motion 2s 1s both;
}

@keyframes spark-radius {
    0% { r: 0; animation-timing-function: cubic-bezier(0, 0.3, 0, 1.57) }
    30% { r: 15; animation-timing-function: cubic-bezier(1, -0.39, 0.68, 1.04) }
    95% { r: 8 }
    99% { r: 10 }
    99.99% { r: 7 }
    100% { r: 0 }
}

@keyframes spark-one-motion {
    0% { transform: translate(-20%, 50%); animation-timing-function: cubic-bezier(0.63, 0.88, 0, 1.25) }
    20% { transform: rotate(-0deg) translate(0%, -50%); animation-timing-function: ease-in }
    80% { transform: rotate(-230deg) translateX(-20%) rotate(-100deg) translateX(15%); animation-timing-function: linear }
    100% { transform: rotate(-360deg) translate(30px, 100%); animation-timing-function: cubic-bezier(.64,.66,0,.51) }
}

.spark:nth-child(2) {
    animation:
        spark-radius 2.03s 1s both,
        spark-two-motion 2.03s 1s both;
}

@keyframes spark-two-motion {
    0% { transform: translate(120%, 50%) rotate(-70deg) translateY(0%); animation-timing-function: cubic-bezier(0.36, 0.18, 0.94, 0.55) }
    20% { transform: translate(90%, -80%) rotate(60deg) translateY(-80%); animation-timing-function: cubic-bezier(0.16, 0.77, 1, 0.4) }
    40% { transform: translate(110%, -50%) rotate(-30deg) translateY(-120%); animation-timing-function: linear }
    70% { transform: translate(100%, -50%) rotate(120deg) translateY(-100%); animation-timing-function: linear }
    80% { transform: translate(95%, 50%) rotate(80deg) translateY(-150%); animation-timing-function: cubic-bezier(.64,.66,0,.51) }
    100% { transform: translate(100%, 50%) rotate(120deg) translateY(0%) }
}

.spark:nth-child(3) {
    animation:
        spark-radius 2.05s 1s both,
        spark-three-motion 2.03s 1s both;
}

@keyframes spark-three-motion {
    0% { transform: translate(50%, 100%) rotate(-40deg) translateX(0%); animation-timing-function: cubic-bezier(0.62, 0.56, 1, 0.54) }
    30% { transform: translate(40%, 70%) rotate(20deg) translateX(20%); animation-timing-function: cubic-bezier(0, 0.21, 0.88, 0.46) }
    40% { transform: translate(65%, 20%) rotate(-50deg) translateX(15%); animation-timing-function: cubic-bezier(0, 0.24, 1, 0.62) }
    60% { transform: translate(60%, -40%) rotate(-50deg) translateX(20%); animation-timing-function: cubic-bezier(0, 0.24, 1, 0.62) }
    70% { transform: translate(70%, -0%) rotate(-180deg) translateX(20%); animation-timing-function: cubic-bezier(0.15, 0.48, 0.76, 0.26) }
    100% { transform: translate(70%, -0%) rotate(-360deg) translateX(0%) rotate(180deg) translateX(20%); }
}




.burst {
    stroke-width: 3;
}

.burst :nth-child(2n) { color: #ff783e }
.burst :nth-child(3n) { color: #ffab00 }
.burst :nth-child(4n) { color: #55e214 }
.burst :nth-child(5n) { color: #82d9f5 }

.circle {
    r: 6;
}

.rect {
    width: 10px;
    height: 10px;
}

.triangle {
    d: path("M0,-6 L7,6 L-7,6 Z");
    stroke-linejoin: round;
}

.plus {
    d: path("M0,-5 L0,5 M-5,0L 5,0");
    stroke-linecap: round;
}




.burst:nth-child(4) {
    transform: translate(30px, 100%) rotate(150deg);
}

.burst:nth-child(5) {
    transform: translate(50%, 0%) rotate(-20deg);
}

.burst:nth-child(6) {
    transform: translate(100%, 50%) rotate(75deg);
}

.burst * {}

@keyframes particle-fade {
    0%, 100% { opacity: 0 }
    5%, 80% { opacity: 1 }
}

.burst :nth-child(1) { animation: particle-fade 600ms 2.95s both, particle-one-move 600ms 2.95s both; }
.burst :nth-child(2) { animation: particle-fade 600ms 2.95s both, particle-two-move 600ms 2.95s both; }
.burst :nth-child(3) { animation: particle-fade 600ms 2.95s both, particle-three-move 600ms 2.95s both; }
.burst :nth-child(4) { animation: particle-fade 600ms 2.95s both, particle-four-move 600ms 2.95s both; }
.burst :nth-child(5) { animation: particle-fade 600ms 2.95s both, particle-five-move 600ms 2.95s both; }
.burst :nth-child(6) { animation: particle-fade 600ms 2.95s both, particle-six-move 600ms 2.95s both; }

@keyframes particle-one-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(-20deg) translateX(8%) scale(0.5, 0.5) } }
@keyframes particle-two-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(0deg) translateX(8%) scale(0.5, 0.5) } }
@keyframes particle-three-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(20deg) translateX(8%) scale(0.5, 0.5) } }
@keyframes particle-four-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(-35deg) translateX(12%) } }
@keyframes particle-five-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(0deg) translateX(12%) } }
@keyframes particle-six-move { 0% { transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001) } 100% { transform: rotate(35deg) translateX(12%) } }



.bar {
    width: 100%;
    height: 100%;
    ry: 50%;
    stroke-width: 10;
    animation: bar-in 900ms 3s both;
}

@keyframes bar-in {
    0% { stroke-dasharray: 0 180 0 226 0 405 0 0 }
    100% { stroke-dasharray: 0 0 181 0 227 0 405 0 }
}

.magnifier {
    animation: magnifier-in 600ms 3.6s both;
    transform-box: fill-box;
}

@keyframes magnifier-in {
    0% { transform: translate(20px, 8px) rotate(-45deg) scale(0.01, 0.01); }
    50% { transform: translate(-4px, 8px) rotate(-45deg); }
    100% { transform: translate(0px, 0px) rotate(0deg); }
}

.magnifier .glass {
    cx: 27;
    cy: 27;
    r: 8;
    stroke-width: 3;
}
.magnifier .handle {
    x1: 32;
    y1: 32;
    x2: 44;
    y2: 44;
    stroke-width: 3;
}



    h1 {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
      border-radius: 10px;
      backdrop-filter: blur(10px);
    }

    #resultContainer {
    background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
    padding: 0px; /* Add padding to create space between text and border */
    margin: auto; /* Center horizontally */
    border-radius: 10px; /* Rounded corners */
    position: absolute; /* Position it relative to the viewport */
    top: 75%; /* Move it down by 50% of the viewport height */
    left: 51.5%; /* Center it horizontally by 50% of the viewport width */
    transform: translate(-50%, -50%); /* Center it precisely */
    z-index: 999; /* Ensure it's above other elements */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    margin-bottom:10px;
            
           

}

    p {
      margin-bottom: 10px;
    }

    h2 {
      background-color: #333;
      color: #fff;
      padding: 5px;
      border-radius: 5px;
      margin-top: 15px;
    }

    h3 {
      background-color: #444;
      color: #fff;
      padding: 5px;
      border-radius: 5px;
      margin-top: 10px;
    }

    .white-box {
      background-color: #fff;
      padding: 10px;
      border-radius: 5px;
      margin-top: 10px;
    }

    button {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
       button {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
      backdrop-filter: blur(5px);
    }

    button:hover {
      background: rgba(255, 255, 255, 0.3);
    }
    }

    button:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    input {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
      color:white;
    }

    input:focus {
      border-color: #666;
    }

    #wordSuggestions {
      margin-top: 10px;
      font-size: 16px;
      list-style: none;
      padding: 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      max-height: 120px;
      overflow-y: auto;
    }

    #wordSuggestions option {
      padding: 5px 10px;
      cursor: pointer;
    }

    #searchButton{
      margin-left: 230px; /* Adjust the margin value to control the gap */
      position: relative;
      justify-content: center;
      margin-top: -55.2px; /* Adjust this value to move it up */
  color: var(--glow-color);
  cursor: pointer;
  padding: 10 20px;
  border:  0.15em solid var(--glow-color);
  border-radius: 0.15em;
  background: none;
  cursor: pointer;
  transition: background-color 0.3s;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 15px;
  font-weight: 900;
  letter-spacing: 0.25em;
  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
    }
    .searchButton-txt {
  float: left;
  margin-right: -0.4em;
  -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  -moz-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  animation: text-flicker 3s linear infinite;
}

.faulty-letter {
  opacity: 0.5;
  animation: faulty-flicker 2s linear infinite;
}
#searchButton::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.7;
  filter: blur(1em);
  transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
  background: var(--glow-color);
  pointer-events: none;
}

#searchButton::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  z-index: -1;
  background-color: var(--glow-color);
  box-shadow: 0 0 2em 0.2em var(--glow-color);
  transition: opacity 100ms linear;
}

#searchButton:hover {
  color: rgba(0, 0, 0, 0.8);
  text-shadow: none;
  animation: none;
}

#searchButton:hover .glowing-txt {
  animation: none;
}

#searchButton:hover .faulty-letter {
  animation: none;
  text-shadow: none;
  opacity: 1;
}

#searchButton:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

#searchButton:hover:after {
  opacity: 1;
}
.back-video {
  position: absolute;top: 0;left: 0;width: 100%; height: auto; /* Adjust the height as needed */ z-index: -1;
}

/* Add these styles for the "Audio" button */
#audioButton {
      margin-left: 530px; /* Adjust the margin value to control the gap */
      justify-content: center;
      margin-top: -43.5px; /* Adjust this value to move it up */

      position: relative;
      color: var(--glow-color);
      cursor: pointer;
      padding: 10 20px;
      border: 0.15em solid var(--glow-color);
      border-radius: 0.15em;
      background: none;
      perspective: 2em;
      font-family: "Raleway", sans-serif;
      font-size: 15px;
      font-weight: 900;
      letter-spacing: 0.25em;
            
           


      -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
    }
 
    .audioButton-txt {
  float: left;
  margin-right: -0.4em;
  -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  -moz-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  animation: text-flicker 3s linear infinite;
}

.faulty-letter {
  opacity: 0.5;
  animation: faulty-flicker 2s linear infinite;
}
#audioButton::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.7;
  filter: blur(1em);
  transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
  background: var(--glow-color);
  pointer-events: none;
}

#audioButton::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  z-index: -1;
  background-color: var(--glow-color);
  box-shadow: 0 0 2em 0.2em var(--glow-color);
  transition: opacity 100ms linear;
}

#audioButton:hover {
  color: rgba(0, 0, 0, 0.8);
  text-shadow: none;
  animation: none;
}

#audioButton:hover .glowing-txt {
  animation: none;
}

#audioButton:hover .faulty-letter {
  animation: none;
  text-shadow: none;
  opacity: 1;
}

#audioButton:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

#audioButton:hover:after {
  opacity: 1;
}
.back-video {
  position: absolute;top: 0;left: 0;width: 100%; height: auto; /* Adjust the height as needed */ z-index: -1;
}

   
@keyframes faulty-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 0.1;
  }
  4% {
    opacity: 0.5;
  }
  19% {
    opacity: 0.5;
  }
  21% {
    opacity: 0.1;
  }
  23% {
    opacity: 1;
  }
  80% {
    opacity: 0.5;
  }
  83% {
    opacity: 0.4;
  }

  87% {
    opacity: 1;
  }
}

@keyframes text-flicker {
  0% {
    opacity: 0.1;
  }

  2% {
    opacity: 1;
  }

  8% {
    opacity: 0.1;
  }

  9% {
    opacity: 1;
  }

  12% {
    opacity: 0.1;
  }
  20% {
    opacity: 1;
  }
  25% {
    opacity: 0.3;
  }
  30% {
    opacity: 1;
  }

  70% {
    opacity: 0.7;
  }
  72% {
    opacity: 0.2;
  }

  77% {
    opacity: 0.9;
  }
  100% {
    opacity: 0.9;
  }
}

@keyframes border-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 1;
  }
  4% {
    opacity: 0.1;
  }

  8% {
    opacity: 1;
  }
  70% {
    opacity: 0.7;
  }
  100% {
    opacity: 1;
  }
}

@media only screen and (max-width: 600px) {
  #searchButton{
    font-size: 1em;
  }
}
#google_translate_element {
            position: fixed;
            top: 20px; /* Adjust the top value as needed */
            right: 20px; /* Adjust the right value as needed */
            z-index: 9999; /* Ensure it's on top of other elements */
            width: 250px; /* Adjust the width as needed */
            height: 150px; /* Adjust the height as needed */
        }
#container{
  
}
        
  </style>
</head>
<body>
  <video autoplay loop muted playsinline class="back-video"><source src="blackbg7.mp4" type="video/mp4"></video>
   
  <div id="search">
  <datalist id="wordSuggestions"></datalist>
    <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
        <rect class="bar"/>
       
        <g class="magnifier">
            <circle class="glass"/>
            <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
        </g>

        <g class="sparks">
            <circle class="spark"/>
            <circle class="spark"/>
            <circle class="spark"/>
        </g>

        <g class="burst pattern-one">
            <circle class="particle circle"/>
            <path class="particle triangle"/>
            <circle class="particle circle"/>
            <path class="particle plus"/>
            <rect class="particle rect"/>
            <path class="particle triangle"/>
        </g>
        <g class="burst pattern-two">
            <path class="particle plus"/>
            <circle class="particle circle"/>
            <path class="particle triangle"/>
            <rect class="particle rect"/>
            <circle class="particle circle"/>
            <path class="particle plus"/>
        </g>
        <g class="burst pattern-three">
            <circle class="particle circle"/>
            <rect class="particle rect"/>
            <path class="particle plus"/>
            <path class="particle triangle"/>
            <rect class="particle rect"/>
            <path class="particle plus"/>
        </g>
    </svg>
    <input type="text " id="wordInput"list="wordSuggestions"/>
</div>


 
<button id='searchButton'><span class='searchButton-txt'>S<span class='faulty-letter'>E</span>ARCH🔍</span></button>
  <button id="audioButton"><span class='searchButton-txt'>A<span class='faulty-letter'>UDIO🔊</span></span></button>
      
  <div id="resultContainer">
    <p id="definition"></p> 
    <p id="examples"></p>
    <p id="synonyms"></p>
    <p id="antonyms"></p>
   
   

  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
   
    const API_KEY = '777ff721-8d49-4f22-96e1-be50fd3a1596';
    const BASE_URL = 'https://www.dictionaryapi.com/api/v3/references/thesaurus/json/';
    const DATAMUSE_BASE_URL = 'https://api.datamuse.com/sug';
    const wordInput = document.getElementById('wordInput');
    const searchButton = document.getElementById('searchButton');
    const audioButton = document.getElementById('audioButton');
    const definitionOutput = document.getElementById('definition');
    const pronunciationOutput = document.getElementById('pronunciation');
    const synonymsOutput = document.getElementById('synonyms');
    const antonymsOutput = document.getElementById('antonyms');
    const examplesOutput = document.getElementById('examples');
    const resultContainer = document.getElementById('resultContainer');
    const wordSuggestions = document.getElementById('wordSuggestions');

    searchButton.addEventListener('click', () => {
      const wordToLookup = wordInput.value.trim();
      let wordData;
      if (wordToLookup === '') {
        resultContainer.innerHTML = '<p>Please enter a word.</p>';
        return;
      }
     
      const url = `${BASE_URL}${wordToLookup}?key=${API_KEY}`;
      examplesOutput.textContent = '';
      axios.get(url)
        .then(response => {
          const data = response.data;

          if (Array.isArray(data)) {
            const wordData = data[0];
           
            if (wordData.fl) {
              pronunciationOutput.textContent = `Category: ${wordData.fl}`;
            }
            if (wordData.shortdef) {
              definitionOutput.textContent = `Definition: ${wordData.shortdef[0]}`;
            }
           
            if (wordData.meta && wordData.meta.syns) {
              const synonyms = wordData.meta.syns[0];
              const antonyms = wordData.meta.ants[0];

              synonymsOutput.textContent = `Synonyms: ${synonyms.join(', ')}`;
              if (antonyms) {
                antonymsOutput.textContent = `Antonyms: ${antonyms.join(', ')}`;
              } else {
                antonymsOutput.textContent = ''; // Clear any previous antonyms
              }
            } else {
              resultContainer.innerHTML = '<p>No synonyms or antonyms found for the given word.</p>';
            }
           
            getExampleSentences(wordToLookup); // Fetch and display example sentence
          } else {
            resultContainer.innerHTML = '<p>Word not found in the dictionary.</p>';
          }
          if (wordData.def[0].sseq[0][0][1].rel_list) {
        const relatedWords = wordData.def[0].sseq[0][0][1].rel_list[0].map(rel => rel.w);
        relatedOutput.textContent = `Related: ${relatedWords.join(', ')}`;
      } else {
        relatedOutput.textContent = 'No related words found.';
      }
        })
       
    });

    function getExampleSentences(word) {
        const exampleUrl = `${BASE_URL}${word}?key=${API_KEY}`;
        axios.get(exampleUrl)
          .then(response => {
            const data = response.data;
            const exampleSentences = extractExampleSentences(data);
            if (exampleSentences.length > 0) {
              const examplesHTML = exampleSentences.map((example, index) => `<p>${index + 1}. ${example}</p>`).join('');
              examplesOutput.innerHTML = `Examples:${examplesHTML}`;
            } else {
              examplesOutput.textContent = 'No example sentences found for the given word.';
            }
          })
          .catch(error => {
            console.error('Error fetching example sentence:', error);
          });
      }
     
      function extractExampleSentences(data) {
        const exampleSentences = [];
     
        data.forEach(item => {
          if (item.def && item.def[0].sseq && item.def[0].sseq[0] && item.def[0].sseq[0][0] && item.def[0].sseq[0][0][1] && item.def[0].sseq[0][0][1].dt) {
            const example = item.def[0].sseq[0][0][1].dt[1][1][0].t;
            const cleanedExample = example.replace(/{\/?it}/g, '');
            exampleSentences.push(cleanedExample);
          }
        });
     
        return exampleSentences;
      }
     
    // Input suggestions
    wordInput.addEventListener('input', () => {
      const inputText = wordInput.value.trim();
      if (inputText !== '') {
        axios.get(`${DATAMUSE_BASE_URL}?s=${inputText}`)
          .then(response => {
            const suggestedWords = response.data.map(entry => entry.word);
            wordSuggestions.innerHTML = ''; // Clear previous suggestions
            suggestedWords.forEach(word => {
              const option = document.createElement('option');
              option.value = word;
              wordSuggestions.appendChild(option);
            });
          })
          .catch(error => {
            console.error('Error fetching suggested words:', error);
          });
      } else {
        wordSuggestions.innerHTML = ''; // Clear suggestions when input is empty
      }
    });

    // Audio functionality
    audioButton.addEventListener('click', () => {
      const wordToSpeak = wordInput.value.trim();
      if (wordToSpeak === '') {
        return;
      }

      if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(wordToSpeak);
        speechSynthesis.speak(utterance);
      } else {
        alert('Text-to-speech is not supported in this browser.');
      }
    });
  </script>
 </div>    <!--To translate the page into any language, provided by Google-->    <div id="google_translate_element"></div><script>function google_translate_elementInit(){    new google.translate.TranslateElement({ pageLanguage: 'en'}, 'google_translate_element');}</script><script src="//translate.google.com/translate_a/element.js?cb=google_translate_elementInit"></script>
 
</body>
</html>
