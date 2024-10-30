<?php
$buah1 = ["name"=> "Durian", "color"=>"kuning","stock"=>15,"price"=>35000,"description"=>"Durian dengan rasa manis"];
$buah2 = ["name"=> "Apple", "color"=>"Merah","stock"=>20,"price"=>25000,"description"=>"Buah berwarna merah yang besar"];
$buah3 = ["name"=> "Mangga", "color"=>"Hijau","stock"=>10,"price"=>30000,"description"=>"Buah hijau yang manis dengan biji yang besar"];

$ar_data = [$buah1, $buah2, $buah3];

foreach($ar_data as $data_buah) {
echo $data_buah["name"]."<br>";
echo $data_buah["color"]."<br>";
echo $data_buah["stock"]."<br>";
echo $data_buah["price"]."<br>";
echo $data_buah["description"]."<br>"
;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Document</title>
</head>
<body>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>Name</th><th>Color</th> <th>Stock</th><th>Price</th><th>Description</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;
foreach($ar_data as $data_buah){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$data_buah["name"].'</td>';
echo '<td>'.$data_buah["color"].'</td>';
echo '<td>'.$data_buah["stock"].'</td>';
echo '<td>'.$data_buah["price"].'</td>';
echo '<td>'.$data_buah["description"].'</td></tr>';
$nomor++;
}
?>
</tbody>
</table>
</body>
</html>