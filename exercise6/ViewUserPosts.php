<link rel="stylesheet" type="text/css" href="../../eecs448-lab4/exercise3/style.css">

<?php

function userPosts()
{
  $name = $_POST["selectUser"];

  $mysqli = new mysqli("mysql.eecs.ku.edu", "archanaramakri", "oohaiP3t", "archanaramakri");

  $posts = "SELECT content
            FROM Posts
            WHERE author_id='$name'";

  echo "<table>";
  echo "<th><strong>" . "Posts made by " . $name . "</strong></th>";
  if ($result=$mysqli->query($posts))
  {
    while ($row = $result->fetch_assoc())
    {
      echo "<tr><td>" . $row["content"] . "</td></tr>";
    }
  }
  echo "</table>";

  // free result set
  $result->free();

  //close connection
  $mysqli->close();
}

echo userPosts();

?>
