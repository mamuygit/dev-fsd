<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    Hello World !!!!
    FSD
    <?php
      require_once 'config.php';
      // require_once 'config.php';
      try {
          $oConn = new PDO('mysql:host='.$sHost.';dbname='.$sDb, $sUsername, $sPassword);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // sql to create table
          // $sql = "CREATE TABLE MyGuests (
          // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          // firstname VARCHAR(30) NOT NULL,
          // lastname VARCHAR(30) NOT NULL,
          // email VARCHAR(50),
          // reg_date TIMESTAMP
          // )";
          $sql = "SELECT LastName FROM MyGuests";
          // use exec() because no results are returned
          $conn->exec($sql);
          echo "Table MyGuests created successfully";
          //echo($oConn)
          // $oStmt = $oConn->prepare('SELECT data FROM `hello_world`');
          // $oResult = $oStmt->fetchAll();
          //
          // foreach ($oResult as $aRow) {
          //     print_r($aRow['data']);
          // }

      } catch(PDOException $e) {
          echo 'ERROR: ' . $e->getMessage();
      }
    ?>
  </body>
</html>
