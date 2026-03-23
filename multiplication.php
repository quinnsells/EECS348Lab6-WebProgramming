<?php
  if (!isset($_GET['number'])) {
      echo "<p style='color: var(--muted); font-size: 14px;'>No input received. <a href='practice4.html' style='color: var(--accent);'>Go back</a> and enter a number.</p>";
  } else {
      $num = $_GET['number'];

      if (!is_numeric($num) || $num <= 0) {
          echo "<p class='error-msg'>Invalid input. Please enter a positive integer.</p>";
      } else {
          $num = (int) $num;

          echo "<table>";
          echo "<tr><th></th>";
          for ($i = 1; $i <= $num; $i++) {
              echo "<th>$i</th>";
          }
          echo "</tr>";

          for ($i = 1; $i <= $num; $i++) {
              echo "<tr><th>$i</th>";
              for ($j = 1; $j <= $num; $j++) {
                  echo "<td>" . ($i * $j) . "</td>";
              }
              echo "</tr>";
          }

          echo "</table>";
      }
  }
?>