<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    // Verbinde dich mit der Datenbank (Beispiel mit MySQLi)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDatabase";

    // Verbindung erstellen
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verbindung überprüfen
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL-Befehl zum Einfügen
    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "Neuer Beitrag erfolgreich erstellt";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Verbindung schließen
    $conn->close();
}
?>
