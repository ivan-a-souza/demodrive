<?php

echo "<h1>Olá DemoDrive Final</h1> ";
echo $_SERVER['SERVER_ADDR'];

echo "<br><hr>";
echo "<h2>Cidades cadastradas no Banco de Dados:</h2>";

$conn = new mysqli("mysql", "redhat", "redhat", "demodrive");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT nome FROM cidade");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
