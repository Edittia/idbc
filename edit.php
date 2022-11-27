<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h2>SELAMAT DATANG!</h2>

<?php

include "koneksi.php";


$id =$_GET['id'];

$sql = "SELECT * FROM `syllabus` WHERE `id` = $id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  ?>
  <form action="edit-update.php" method="POST">

  <?php
    $row = $result->fetch_assoc();
  ?>

    <label>masukkan data id:<label><br>
    <input type="text" name="id" value="<?php echo $row["id"] ?>"><br>

    <label>masukkan data year:<label><br>
    <input type="text" name="year" value="<?php echo $row["year"] ?>"><br>

    <label>masukkan data month:<label><br>
    <input type="text" name="month" value="<?php echo $row["month"] ?>"><br>

    <label>masukkan data week:<label><br>
    <input type="text" name="week" value="<?php echo $row["week"] ?>"><br>

    <label>masukkan data date:<label><br>
    <input type="text" name="date" value="<?php echo $row["tanggal"] ?>"><br>

    <label>masukkan data mon:<label><br>
    <input type="text" name="mon" value="<?php echo $row["mon"] ?>"><br>

    <label>masukkan data tue:<label><br>
    <input type="text" name="tue" value="<?php echo $row["tue"] ?>"><br>

    <label>masukkan data wed:<label><br>
    <input type="text" name="wed" value="<?php echo $row["wed"] ?>"><br>

    <input type="submit" value="kirim">

</form>

<?php

} else {
    echo "0 result";
}
$conn->close();

?>

</body>
</html>