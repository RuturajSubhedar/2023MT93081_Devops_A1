<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $name = $_POST["name"];
    echo "<p style='text-align: center; margin-top: 20px; font-size: 24px; color: #007bff;'> Hello, <span style='color: orange;'>$name</span> welcome to First folder/directory </p>";
} else {
    echo "<p style='text-align: center; margin-top: 20px; font-size: 24px; color: #007bff;'> Hello, Soldier! welcome to First folder/directory </p>";
}
?>
