<?php

     while ($course = mysql_fetch_assoc($records)){

           echo "<tr>";
               echo "<td class="product-name">".$course['courseID']."</td>";
               echo "<td class="product-price">".$course['CourseTitle']."</td>";
               echo "<td class="product-subtotal">".$course['Duration']."</td>";
           echo "</tr>";

     }
?>

<?php
$records = mysqli_query($conn,"SELECT * FROM cart");

  while ($records1 = mysqli_fetch_assoc($records)){

    echo "<tr>";
               echo "<td class="product-name">".$records1['name'];."</td>";
               echo "<td class="product-price">".$records1['price'];."</td>";
           echo "</tr>";
  }
      ?>