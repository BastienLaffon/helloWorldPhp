
        <?php
//CONF BDD local
$db="helloWorld";
$dbhost="localhost";
$dbport=8889;
$dbuser="bas";
$dbpasswd="bast";
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");
$stmt = $pdo->prepare("SELECT helloWorld FROM testHW WHERE id = 1 ");
$stmt->execute();
$res = $stmt->fetch();

?>
<html>
<head>
    <title>Test PHP</title>
</head>
<body>
<h1>Test</h1>
<h1> <?php echo $res[0]; ?></h1>


</body>
</html>