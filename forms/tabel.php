<style type="text/css">

    .body{
    background-repeat: no-repeat;
    background-size: cover;
    font-family: "Open Sans", sans-serif;
    color : #7a6960;
    text-align: justify;
    Text-transform: capitalize;
    width:auto;
    background-color:#f5e0c1;
    }


    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin: 70px auto;
    width: 1000px;
    padding: 10px;
    }

    #customers td, #customers th {
    border: 3px solid #e8a643;
    padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #ef7f4d;
    color: white;
    }

    #p{
    width: 100%;
    background-color: #ef7f4d;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    width: 1000px;
    }

    #p:hover {
    background-color: #b09840;
    }

    a{
    width: 100%;
    background-color: #ef7f4d;
    color: white;
    padding: 5px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    width: 1000px; 
    align:center;  
    }

    a:hover {
    background-color: #b09840;
    }


</style>
<h1 align="center" style="font-size:40px;">Order lists</h1>
<hr>
    
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM groom ORDER BY id ASC");
?>

<html>
<head>
    <title>update or cancel</title>
</head>

<body class="body">
<b class="body"> 
    Please Click the update button to change your data if there are mistakes, and click the cancel button if you want to cancel the order, because when you back to home page you cant change your personal data or cancel your order.
    <p>We really hope you enjoy our service</p>
</b><br><br>
<a align="center" id="p" href="http://localhost/Ninestars/index.html">GO TO HOME</a><br>
<table width="100%" id="customers" >

    <tr >
        <th>No</th><th>Name (cat)</th> <th>Fur Type</th><th>Address</th><th>Pawrent</th><th>Telephone</th><th>Come (WIB)</th><th>Picked up (WIB)</th><th>Treatment Type</th><th>Update/Cancel</th>
    </tr>
    <?php
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['own']."</td>";
        echo "<td>".$user_data['hp']."</td>";
        echo "<td>".$user_data['masuk']."</td>";
        echo "<td>".$user_data['keluar']."</td>";
        echo "<td>".$user_data['ket']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Update</a><br> <br><a href='delete.php?id=$user_data[id]'>Cancel</a></td></tr>";
        $i++;
    }
    ?>
</table><br>

</body>

</html>