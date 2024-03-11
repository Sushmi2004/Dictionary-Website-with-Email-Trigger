
<?php 
  session_start(); 

  $name = $_SESSION["name"];

?>

 





<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Lato|Roboto:400,900' rel='stylesheet' type='text/css'>
<style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('navitha.jpg.jpg'); /* Replace with
your image URL */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      margin: 0;
      padding: 0;
      
      
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
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      margin: 20px;
      border-radius: 10px;
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
    .greeting-box {
      border: 2px solid <?php echo $randomColor; ?>;
      padding: 20px;
      margin: 20px auto;
      width: 95%;
      background-color: rgba(0, 0, 0, 0.3);
      color:white;
      border-radius:15px;
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

    #audioButton {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
      backdrop-filter: blur(5px);
      margin-left: 10px;


    }

    #audioButton:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    #wordInput{
      margin-left:20px;
    }

    .logout
    {
      margin-left:20px;
      margin-top:40px;
    }

    .form1 {
         max-width: 400px;
         margin-left:50px;
         float:right;
         margin-bottom:90px;
         margin-top:-50px;

         padding: 20px;
         border-radius: 5px;
        
     }

     /* Style the heading */
     h1 {
         width: 100%;
         text-align: center;
         margin-bottom: 20px;
     }

     /* Style the input field */
     input[type="email"] {
         flex: 1;
         padding: 10px;
         margin-bottom: 10px;
         margin-right: 10px; /* Add margin to create space between
input and button */
         border: 1px solid #ccc;
         border-radius: 3px;
     }

     /* Style the submit button */
     button[type="submit"] {
         background-color: #d71e2a;
         color: #fff;
         border: none;
         padding: 10px 20px;
         border-radius: 3px;
         height:38px;
         cursor: pointer;
         transition: background-color 0.3s ease;
     }

     button[type="submit"]:hover {
         background-color: #119511;
     }

     /* Responsive adjustments */
     @media (max-width: 600px) {
         form {
             max-width: 100%;
         }
         input[type="email"] {
             margin-right: 0; /* Adjust margin for smaller screens */
             margin-bottom: 10px;
         }
     }

    

  </style>

</head>
<body>
<div class="greeting-box">
    <?php  
      // Assume $name contains the user's name

      // Define an array of colors
      $colors = array("red", "blue", "green", "orange");

      // Choose a random color from the array
      $randomColor = $colors[array_rand($colors)];

      // Define an array of emojis
      $emojis = array( "😎", "👋");

      // Choose a random emoji from the array
      $randomEmoji = $emojis[array_rand($emojis)];

      // Echo the greeting message with the dynamic values
      echo ("<p style=\"font-size: 25px;\"> <span style=\"color: white;\">Hi</span> <span style=\"color: $randomColor;\">$name</span>$randomEmoji</p>");
    ?>

    <p>Welcome to our digital realm of words—a sanctuary where letters come to life,<br> meanings weave stories, and language dances with imagination.<br> Whether you seek the definitions of the mundane or the exotic, the familiar or the unknown,<br> our dictionary is your passport to a world of linguistic exploration. Delve in, discover, and let words be your guides.</p>
  </div>





  <input type="text" id="wordInput" placeholder="Enter a word"
list="wordSuggestions">
  <datalist id="wordSuggestions"></datalist>
  <button id="searchButton">Search</button>
  <button id="audioButton">Audio</button>
  <button id="bookmarkButton">Bookmark</button>

  <div id="resultContainer">
    <p id="definition"></p>
    <p id="pronunciation"></p>
    <p id="examples"></p>
    <p id="synonyms"></p>
    <p id="antonyms"></p>
    <div id="searchHistory">
      <h3>Search History</h3>
      <ul id="searchHistoryList"></ul>
    </div>


    <div id="bookmarks">
      <h3>Bookmarked Words</h3>
      <ul id="bookmarkList"></ul>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  

  


<div class="content">

    
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
    </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email']) || $_SESSION["loggedin"] == true) : ?>
    	<div class="logout">
      <form action="login.php" method="POST">
            
            <button type="submit">Log out</button>
        </form>
        </div>
    <?php endif ?>

   
    <div class="form1">
    <form action="subscribe.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
    </div>
    
<script src="script.js"></script>
    


</body>
</html>