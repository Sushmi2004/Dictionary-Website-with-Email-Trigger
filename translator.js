const fromText = document.querySelector(".from-text");
const toText = document.querySelector(".to-text");
const translateBtn = document.getElementById("translate-btn");
const selectTag = document.querySelectorAll("select");
const speakInputButton = document.getElementById("speak-input-btn");
const speakTranslatedButton = document.getElementById("speak-translated-btn");

// Initialize the SpeechSynthesisUtterance object
const synth = window.speechSynthesis;

selectTag.forEach((tag, id) => {
  for (let country_code in countries) {
    let selected =
      id == 0 ? (country_code == "en-GB" ? "selected" : "") : country_code == "hi-IN" ? "selected" : "";
    let option = `<option ${selected} value="${country_code}">${countries[country_code]}</option>`;
    tag.insertAdjacentHTML("beforeend", option);
  }
});

translateBtn.addEventListener("click", () => {
  let word = fromText.value.trim(),
    translateFrom = selectTag[0].value,
    translateTo = selectTag[1].value;
  if (!word) return;
  toText.setAttribute("placeholder", "Translating...");

  // Translate the entered word
  const apiUrl = `https://api.mymemory.translated.net/get?q=${word}&langpair=${translateFrom}|${translateTo}`;
  fetch(apiUrl)
    .then((res) => res.json())
    .then((data) => {
      toText.value = data.responseData.translatedText;
      toText.setAttribute("placeholder", "Translation");

      // Do not speak the translated word here
    })
    .catch((error) => {
      console.error("Translation error:", error);
      toText.value = "Translation Error";
      toText.setAttribute("placeholder", "Translation Error");
    });
});

speakInputButton.addEventListener("click", () => {
  const inputText = fromText.value.trim();
  if (!inputText) return;

  speakText(inputText);
});

speakTranslatedButton.addEventListener("click", () => {
  const translatedText = toText.value.trim();
  if (!translatedText) return;

  speakText(translatedText);
});

function speakText(text) {
  if (synth.speaking) {
    console.error("SpeechSynthesisUtterance is already speaking.");
    return;
  }

  const utterance = new SpeechSynthesisUtterance(text);
  utterance.lang = selectTag[1].value; // Set the language for the translated text
  synth.speak(utterance);
}
