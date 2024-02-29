<?php

include_once ("../koneksi/koneksi.php");

if(isset($_POST['update']))
{
    $id = $_GET['UserID'];
    $name = $_POST['username'];
    $level = $_POST['level'];
    $password = md5($_POST['password']);

    $result = mysqli_query($koneksi, "UPDATE user SET Username='$name', Password='$password', Level='$level' WHERE UserID=$id");
    header("Location: index.php?page=user");
    echo "<script>alert('berhasil')</script>";
}
$UserID = $_GET['UserID'];

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE UserID=$UserID");

while($row = mysqli_fetch_array($result)){
    $name = $row['Username'];
    $password = $row['Password'];
}
?>

<div class="row well">
    <div class="col-md-4">
    <div class="card well">
        <div class="card-header">
            <h3 class="">Update User</h3>
</div>
<div class="card body">
    <form action=""method="POST">

    <div class="mb-3 mt-3">
    <label for"nama" class="form-label">Nama:</label>
    <input type="text" class="form-control" id="username" value="<?php echo $name; ?>"placeholder="Enter Name" name="username">
</div>
<div class="mb-3">
    <label for"nama" class="form-label">Password:</label>
    <input type="text" class="form-control" id="username" value="<?php echo $password; ?>"placeholder="Enter Password" password="password">
</div>
<div class="mb-3">
    <label for="pwd" class="form-label">level:</label>
    <select type="" class="form-control" id="pwd" name="level">
        <option value="Administrator">Administrator</option>
        <option value="Petugas">Petugas</option>
</select>
</div>


<button type="submit" name="update" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
