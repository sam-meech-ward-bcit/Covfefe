<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style.css">

  <title>Covfefe</title>
</head>
<body>

<?php
  require_once 'textyThing.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['texty_thing']) && strlen($_POST['texty_thing']) > 0) {
      echo "<h1 class='trump_quote'>".covfeferizer($_POST['texty_thing']). "</h1>";
    } else {
      $response = file_get_contents("https://api.whatdoestrumpthink.com/api/v1/quotes/random");

      $data = json_decode($response);
      echo "<h1 class='trump_quote'>".covfeferizer($data->message). "</h1>";
    }
  }
?>

<form action="index.php" method="post">
<label for="textything">Type something:</label>
<input type="text" id="textything" name="texty_thing">
<button>Submit</button>
</form>

<iframe width="560" height="315" src="https://www.youtube.com/embed/dfqZlMCcbdM?start=39" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
</body>
</html>