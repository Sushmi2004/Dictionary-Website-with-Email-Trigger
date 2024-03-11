<?php
function getWordOfTheDay() {
    $apiKey = "1380d58b8b5c33325130c0e8f340be6bc6fba6f7bb65bfc6f";
    $apiUrl = "https://api.wordnik.com/v4/words.json/wordOfTheDay?api_key=" . $apiKey;

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    return $data;
}

function getPronunciation($word) {
    $apiKey = "1380d58b8b5c33325130c0e8f340be6bc6fba6f7bb65bfc6f";
    $apiUrl = "https://api.wordnik.com/v4/word.json/" . $word . "/pronunciations?useCanonical=true&typeFormat=ahd&limit=50&api_key=" . $apiKey;

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    
}

$wordData = getWordOfTheDay();
$word = $wordData['word'];
$definition = $wordData['definitions'][0]['text'];


$response = [
    'word' => $word,
    'definition' => $definition,
   
];

header('Content-Type: application/json');
echo json_encode($response);
?>
