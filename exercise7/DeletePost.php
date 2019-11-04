<?php

function deletePosts()
{
  $mysqli = new mysqli("mysql.eecs.ku.edu", "archanaramakri", "oohaiP3t", "archanaramakri");

  $posts = "SELECT content, author_id, post_id
            FROM Posts";

  echo "Posts deleted:" . "<br>";
  if ($result=$mysqli->query($posts))
  {
    while ($row = $result->fetch_assoc())
    {
      $check_box = $_POST[$row['post_id']];
      if($check_box=="on")
      {
        echo $row['post_id']."\t";
        echo "<br>";
      }
    }
  }

  $result->free();

  $mysqli->close();
}

echo deletePosts();

?>
