<link rel="stylesheet" type="text/css" href="../../eecs448-lab4/exercise3/style.css">

<?php

function users()
{
    echo "<h2>Exercise 5: View Users</h2>";
    $mysqli = new mysqli("mysql.eecs.ku.edu", "archanaramakri", "oohaiP3t", "archanaramakri");

    //check connection
    if ($mysqli->connect_errno)
    {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $users = "SELECT * FROM Users";

    echo "<table>";
    echo "<tr>";
    echo "<th><strong>" . "Users" . "</strong></th>";

    if ($result=$mysqli->query($users))
    {
     //fetch associative array
      while ($row = $result->fetch_assoc())
      {
        echo "<tr><td>" . $row["user_id"] . "</td></tr>";
      }
    }
    echo "</table>";

    // free result set
    $result->free();


  //close connection
  $mysqli->close();
}

echo users();

?>
