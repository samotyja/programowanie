<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Klienci</title>
</head>
<body>
<form action="statystyki_wiek.php" method="get">
Ilość osób:
<input type="number" name="limit">
<input type="submit" value="Wyświetl">
</form>
  <h1>Statystyki</h1>

  
  <?php
    require_once('../scripts/connect.php');
    require_once('../scripts/function.php');

  /*if (!empty($_GET['limit'])) {
    $limit = $_GET['limit'];
  } else {
    $limit = 3;
  }
  */
  $limit = (!empty($_GET['limit'])) ? $limit = $_GET['limit'] : $limit = 3;
  echo "<h3> Ilość osób</h3>";

    $sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id ORDER BY birthday DESC LIMIT $limit  ";

    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()) {
      $year = year($row['birthday']);
      echo <<<ROW
        <li>
        $row[name]
        $row[surname]
        Data urodzenia: $row[birthday],
        Rok urodzenia: $year
        </li>
ROW;
    }
    echo "</table>";
    $connect->close();
    
    
    
    
  ?>
</body>
</html>