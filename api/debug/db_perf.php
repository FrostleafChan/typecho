<?php
$start_time = time(); // 记录执行起始时间戳
echo "Script started at " . date('Y-m-d H:i:s', $start_time) . "<br>";

$host = $_POST['host'];
$port = $_POST['port'];
$username = $_POST['username'];
$password = $_POST['password'];
$dbname = $_POST['dbname'];

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $connect_time = time(); // 记录与数据库成功建立连接时的时间戳
    echo "Successfully connected to database at " . date('Y-m-d H:i:s', $connect_time) . "<br>";

    $query = urldecode($_POST['query']);
    $queries = explode(";", $query);

    $query_start_time = $connect_time; // 将查询开始时间设置为连接成功的时间

    foreach ($queries as $q) {
        if (!empty($q)) {
            $pdo->query($q);
        }
    }

    $query_end_time = time(); // 记录查询完成后的时间戳

    echo "Query executed successfully at " . date('Y-m-d H:i:s', $query_end_time) . "<br>";
    echo "Time taken to connect to database: " . ($connect_time - $start_time) . " seconds<br>";
    echo "Time taken to execute query: " . ($query_end_time - $query_start_time) . " seconds<br>";
    echo "Total time taken: " . ($query_end_time - $start_time) . " seconds<br>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
