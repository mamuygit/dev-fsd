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
      define('DB_NAME', getenv('DBNAME'));
      /** MySQL database username */
      define('DB_USER', getenv('DBUSER'));
      /** MySQL database password */
      define('DB_PASSWORD', getenv('DBPASSWORD'));
      /** MySQL hostname */
      define('DB_HOST', getenv('DBHOST'));
      $conn_str = getenv("MYSQLCONNSTR_consfsd");
      echo($DB_NAME);
      // try {
      //     $oConn = new PDO('mysql:host='.$sHost.';dbname='.$sDb, $sUsername, $sPassword);
      //     $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //     //echo($oConn)
      //     // $oStmt = $oConn->prepare('SELECT data FROM `hello_world`');
      //     // $oResult = $oStmt->fetchAll();
      //     //
      //     // foreach ($oResult as $aRow) {
      //     //     print_r($aRow['data']);
      //     // }
      //
      // } catch(PDOException $e) {
      //     echo 'ERROR: ' . $e->getMessage();
      // }
    ?>
  </body>
</html>
