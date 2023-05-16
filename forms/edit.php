<style type="text/css">
  .body{
  background-image: url(cat1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Open Sans", sans-serif;
}

.nu{
  margin: 100px auto;
  width: 1000px;
  padding: 10px;
  border: 1px solid #ccc;
  background-color: #f5e0c1;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #ef7f4d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #b09840;
}

div {
  border-radius: 5px;
  background-color: #dfd6a0;
  padding: 20px;
}

#p{
    width: 100%;
    background-color: #ef7f4d;
    color: white;
    padding: 14px 20px;
    margin: 10px 10px 10px 10px ;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    font-size:30px;
    }

  #p:hover {
  background-color: #b09840;
  }

</style>

<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama= $_POST['nama'];
    $jenis= $_POST['jenis'];
    $alamat= $_POST['alamat'];
    $own= $_POST['own'];
    $hp= $_POST['hp'];
    $masuk = $_POST['masuk'];
    $keluar= $_POST['keluar'];
    $ket = $_POST['ket'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE groom SET nama='$nama',jenis='$jenis',alamat='$alamat',own='$own', hp='$hp',masuk='$masuk',keluar='$keluar',ket='$ket' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: tabel.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM groom WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama= $user_data['nama'];
    $jenis= $user_data['jenis'];
    $alamat= $user_data['alamat'];
    $own= $user_data['own'];
    $hp= $user_data['hp'];
    $masuk = $user_data['masuk'];
    $keluar= $user_data['keluar'];
    $ket = $user_data['ket'];
}
?>
<html>
<head>
    <title>Edit User Data</title>
</head>

<body class="body">
<br><br><a id="p" href="http://localhost/Ninestars/index.html">Home</a>
<br/><br/>
<div class="nu">
    <form name="update_user" method="post" action="edit.php">
        <label >Name </label>
        <input type="text" name="nama" placeholder="Pet name..." value=<?php echo $nama;?>>

        <label for="jen">Fur Type </label>
        <select id="jen" name="jenis">
          <option value="#"<?php echo $jenis;?>>Whats your cat's fur type..</option>
          <option value="Thick Fur"<?php echo $jenis;?>>Thick Fur</option>
          <option value="Thin Fur"<?php echo $jenis;?>>Thin Fur</option>
          <option value="No Fur"<?php echo $jenis;?>>No Fur</option>
        </select>

        <label for="al">Adress </label>
        <textarea id="al" name="alamat" placeholder="Your adress.." rows="8" col="200" value=<?php echo $alamat;?> ></textarea>

        <label for="fname">Pawrent </label>
        <input type="text" id="fname" name="own" placeholder="Your name.."value=<?php echo $own;?>>

        <label for="fname">Telephone </label>
        <input type="text" id="fname" name="hp" placeholder="telephone number.."value=<?php echo $hp;?>>

        <label for="fname">Come</label>
        <input type="text" id="fname" name="masuk" placeholder="the time when you will put your pet.."value=<?php echo $masuk;?>>
      
        <label for="lname">Picked up</label>
        <input type="text" id="lname" name="keluar" placeholder="the time when you will pick up your pet.."value=<?php echo $keluar;?>>
      
        <label for="country">Treatments</label>
        <select id="status" name="ket" value=<?php echo $ket;?>>
        <option value="#"<?php echo $ket;?>>-choose the best treatment for your cat-</option>
        <option value="Grooming only"<?php echo $ket;?>>Grooming only</option>
        <option value="Grooming  and Pet Massage"<?php echo $ket;?>>Grooming  and Pet Massage</option>
        <option value="Flea Treatment"<?php echo $ket;?>>Flea Treatment</option>
        <option value="Fungal Treatment"<?php echo $ket;?>>Ticks Treatment</option>
        <option value="Flea and Fungal Treatment"<?php echo $ket;?>>Flea and Fungal Treatment</option>
        <option value="Complete Treatment"<?php echo $ket;?>>Complete Treatment</option>
        </select>

        <label for="up"></label>
        <input type="hidden" id="up" name="id" value=<?php echo $_GET['id'];?>>
        <input type="submit" id="up" name="update" value="Update">
        </form>
      </div>
</body>
</html>