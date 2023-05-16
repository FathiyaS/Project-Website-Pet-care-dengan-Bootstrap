<html>
<head>
    <title>Add Alat</title>
    <style>#p{
    width: 100%;
    background-color: #ef7f4d;
    color: white;
    padding: 14px 20px;
    margin:0px ;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    font-size:30px;
    }

    #p:hover {
    background-color: #b09840;
    }</style>
</head>

<body>
<br><br><a id="p" href="tabel.php">View Ordered</a>
<br/><br/>


<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama= $_POST['nama'];
    $jenis= $_POST['jenis'];
    $alamat= $_POST['alamat'];
    $own= $_POST['own'];
    $hp= $_POST['hp'];
    $masuk = $_POST['masuk'];
    $keluar= $_POST['keluar'];
    $ket = $_POST['ket'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO groom(nama,jenis,alamat,own,hp,masuk,keluar,ket) VALUES('$nama','$jenis','$alamat','$own','$hp','$masuk','$keluar','$ket')");

    // Show message when user added
    echo "You order successfully.";
}
?>
</body>
</html>