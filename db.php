<?php
  $host    = 'localhost';
  $db      = 'gyilkosos';
  $user    = 'gyilkosos';
  $pass    = 'Who has the lighter?';
  $charset = 'utf8mb4';
  $dsn     = "mysql:host=$host;dbname=$db;charset=$charset";
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false
  ];
  try {
    $dbh = new PDO($dsn, $user, $pass, $options);
  } catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }
  $sth = $dbh->query('SELECT uid FROM users');
  while ($row = $sth->fetch()) {
    echo $row['uid'] . "\n";
  }
  $sth = null;
  $dbh = null;
?>
