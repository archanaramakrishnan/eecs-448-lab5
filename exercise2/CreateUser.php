<?php

function create() {
  $name = $_POST["userName"];

  if(empty($name))
  {
    echo "You did not fill out a user name.";
  }
  else
  {
    echo "<br> Your user name: " . $name;
  }
}

echo create();


?>
