<?php
$name = "fani alfirdaus";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>belajar php - struktur kendali</title>
  <style>
    .warna-baris {
      background-color:silver;
    }
  </style>
</head>
<body>
  <p>hi nama saya <?php echo $name ?></p>

  <?php 
  // perulangan
  // for
  // while
  // do...while
  // foreach

  // perulangan for
  for($i = 1; $i <= 5;$i++){
    echo "<p>perulanan for ke $i</p>";
  };

  echo "</br>";
  // perulangan while
  $i = 1;
  while ($i <= 5) {
    echo "<p>perulangan while ke $i</p>";
    $i++;
  }

  echo "</br>";
  $i = 6;
  do{
    echo "<p>perulangan do while ke $i</p>";
    echo "<p>perulangan do while dijalankan sekali meskipun kondisi bernilai false</p>";
    $i++;
  }while($i <= 5);
  ?>

  <table border="1" cellpadding="10" cellspacing="0">
    <?php 
      for($i = 1;$i <= 5; $i++){
        echo "<tr>";
          for($j = 1;$j <= 10;$j++){
            echo "<td>$i,$j</td>";
          }
        echo "</tr>";
      }
    ?>
  </table>
      <br>
  <table border="1" cellpadding="10" cellspacing="0">
      <?php for($i = 1; $i <= 3;$i++) : ?>
        <?php if($i % 2 ==0) : ?>
          <tr class="warna-baris">
        <?php else : ?>
        <tr>
        <?php endif ?>
          <?php for($j = 1; $j <= 5;$j++) : ?>
            <td><?= "$i,$j"; ?></td>
          <?php endfor ?>
        </tr>
      <?php endfor?>
  </table>
  <br>
  <?php 
    // pengkondisian / branching
    // if else
    // if else if else
    // switch
    // ternary
    $x = 10;
  ?>
  <?php if($x >= 5) : ?>
    <p>nilai yang dimasukkan lebih dari 5</p>
    <p>nilai itu adalah <?= $x ?></p>
  <?php  elseif($x >= 10) : ?>
    <p>nilai yang dimasukkan lebih dari 10</p>
    <p>nilai itu adalah <?= $x ?></p>
  <?php endif ?>

  <table border="1" cellpadding="10" cellspacing="0">
    <?php for($i = 1;$i <= 5;$i++) : ?>
      <?php if($i % 2 == 0) : ?>
        <tr class="warna-baris">
      <?php else : ?>
        <tr>
      <?php endif ?>
        <?php for($j = 1; $j <= 5;$j++) : ?>
          <td><?= "$i,$j" ?></td>
        <?php endfor ?>
        </tr>
    <?php endfor ?>
  </table>
</body>
</html>