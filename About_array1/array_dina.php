<?php
$m_fruits = [
  ["name" => "Durian", "color" => "kuning", "stock" => 15, "price" => 35000, "description" => "Durian dengan rasa manis"],
  ["name" => "Apple", "color" => "merah", "stock" => 20, "price" => 25000, "description" => "Buah berwarna merah yang segar"],
  ["name" => "mangga", "color" => "hijau", "stock" => 10, "price" => 30000, "description" => "Buah hijau yang manis dengan biji yang besar"]
];

foreach ($m_fruits as $fruit) {
  echo '<li>'.$fruit["name"].'</li>';
  echo '<li>'.$fruit["color"].'</li>';
  echo '<li>'.$fruit["stock"].'</li>';
  echo '<li>'.$fruit["price"].'</li>';
  echo '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Data Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama Buah</th>
          <th>Buah</th>
          <th>Stock</th>
          <th>Harga</th>
          <th>Description</th>
        </tr>
      </thead>

      <tbody>
        <?php
         $nomor = 1;

         foreach($m_fruits as $fruit) {
            echo "<tr><td>" .$nomor."</td>";
            echo "<td>" .$fruit["name"]."</td>";
            echo "<td>" .$fruit["color"]."</td>";
            echo "<td>" .$fruit["stock"]."</td>";
            echo "<td>" .$fruit["price"]."</td>";
            echo "<td>" .$fruit["description"]."</td>";
            $nomor++;
         }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>