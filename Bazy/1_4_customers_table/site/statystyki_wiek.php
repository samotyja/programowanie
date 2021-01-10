
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <title>Klienci</title>
</head>
<body>
  <h1>Statystyki</h1>
  <form action="statystyki_wiek.php" method="get">
    Ilość osób:
    <input type="number" name="limit">
    <input type="submit" value="Wyświetl">
  </form>
  <hr>



  <?php
    require_once('../scripts/connect.php');
    require_once('../scripts/function.php');
    
    $limit = (!empty($_GET['limit'])) ? $limit = $_GET['limit'] : $limit = 3;
    
    $sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height, cities.city FROM `customers` INNER JOIN `cities` ON customers.cities_id=cities.id ORDER BY height DESC LIMIT $limit";

    $result = $connect->query($sql);S
 
    
    echo "<h3>Wzrost</h3> "
    while ($row = $result->fetch_assoc()) {
      echo <<<ROW
        <li>
        $row[name]
        $row[surname]
        $row[height]
        </li>
ROW;
}

  echo "<h3>Wiek</h3>";

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
    $connect->close();
    
    
    
    
  ?>
</body>
</html>