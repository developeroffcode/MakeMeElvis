<html>
<head>
    <title>MakeMeElvis</title>
</head>
<body>

<?php
$dbc = mysqli_connect('127.0.0.1', 'root1', '', 'elvis_store')
or die('Ошибка соединения с сервером');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$query = "INSERT INTO email_list (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

mysqli_query($dbc, $query)
or die('Ошибка запроса к базе данных');
echo 'Customer added.';
mysqli_close($dbc);
?>
</body>
</html>