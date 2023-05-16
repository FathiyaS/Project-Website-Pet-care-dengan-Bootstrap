<style type="text/css">

    .body{
    background-image: url(pawa.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: "Open Sans", sans-serif;
    color : #7a6960;
    text-align: justify;
    }

    #ne{

    }

    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin: 70px auto;
    width: 1000px;
    padding: 10px;
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
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
  
</style>
<h1 align="center" style="font-size:40px;">Ordered lists</h1>
<hr>  
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM groom ORDER BY id ASC");
?>

<html>
<head>
    <title>ordered list</title>
</head>

<body class="body">
<B>We hide your phone number and address for your Privacy and Convenience.</B>
<br><br>
<a align="center" id="p" href="http://localhost/Ninestars/index.html">GO TO HOME</a><br>
<table width="100%" id="customers" >

    <tr >
        <th>No</th><th>Name (cat)</th><th>Fur Type</th><th>Pawrent</th><th>Come (WIB)</th><th>Picked up (WIB)</th><th>Treatment Type</th>
    </tr>
    <?php
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis']."</td>";
        echo "<td>".$user_data['own']."</td>";
        echo "<td>".$user_data['masuk']."</td>";
        echo "<td>".$user_data['keluar']."</td>";
        echo "<td>".$user_data['ket']."</td>";
        $i++;
    }
    ?>
</table><br>

</body>

</html>