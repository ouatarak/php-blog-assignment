<?php
  include './Article.Class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial_scale=1.0">
    <title>PHP Blog Assignment</title>
</head>
<body>
    <h1>PHP Blog Assignment</h1>
    <?php

function __article ( $jsonFilePath = './article.json' )
$article = array();
{ // Check if the file exists.
  if ( file_exists( $jsonFilePath ) )
  { // Will retrieve the file contents as a string.
    $jsonString = file_get_contents( $jsonFilePath );
    // Convert the JSON string to a PHP object.
    $jsonObject = json_decode( $jsonString );
    // Check if the "snacks" are an array.
    if ( is_array( $jsonObject->article ) )
    { // Store the array in our property.
      $this->allArticles = $jsonObject->article;
    }
    // If snacks are NOT an array.
    else
    { // Show a warning in the browser.
      echo '<p>WARNING: The articles do not show </p>';
    }
  }
  // If file doesn't exist.
  else
  { // Show a warning in the browser.
    echo '<p>WARNING: Your file doesn\'t exist!</p>';
  }
}
?>
</body>
</html>