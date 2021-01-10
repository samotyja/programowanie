<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Klienci</title>
</head>
<body>
  <h1>Klienci</h1>
  <?php 
    require_once('../scripts/connect.php');
    
    
    $sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id ORDER BY height DESC";

    $result = $connect->query($sql);
    echo "<table>";
    echo "<tr>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
      <th>Wzrost</th>
      <th>Miasto</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
      echo <<<ROW
        <li>
        $row[name]
        $row[surname]
        $row[height]
        </li>
ROW;
    }
    echo "</table>";
    $connect->close();
    
    
    
  ?>
</body>
</html>