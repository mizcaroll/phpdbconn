<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="styles.css">
  <title>PHPdatabase</title>
</head>
<body>
<?php
//Multidimensional arrays
$data = array(array(1, 2, 3), "Jackie", "Kefa");

echo $data[0][1];

?>
</body>
</html>

