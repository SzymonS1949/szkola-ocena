<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$login = mysqli_connect("localhost", "root", "", "szk");
if (!$login) {
    echo "Błąd połączenia z bazą danych" . mysqli_connect_error();
}
echo '<header><h1>Dziennik</h1></header>';
echo '<main>';
$result = mysqli_query($login, "SELECT * FROM uczen");
echo"<h1>Matematyka</h1>";
echo "<table border='1' >";
echo "<tr>";
echo "<th>nr</th>";
echo "<th>Imie</th>";
echo "<th>Nazwisko</th>";
echo "<th>Ocena</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>".$row['id']. "</td>";
    echo "<td>" . $row['imie'] . "</td>";
    echo "<td>" . $row['nazwisko'] . "</td>";
    echo "<td>" . $row['ocena'] . "</td>";
    echo "</tr>";
}

echo "</table>";

echo '</main>';
echo '<aside>';
echo "<li> matematyka </li>";
echo "<li> j.polski </li>";
echo "<li> j.angielski </li>";
echo "</aside>";
echo '<footer>';
echo "<h1>ZSZ BOBOWA</h1>";
echo "</footer>";

mysqli_close($login);


?>

</main>
</body>
</html>
