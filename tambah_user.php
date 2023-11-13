<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Registrasi</h3>
    <form action="proses_tambah_user.php" method="post">
        Nama User :
        <input type="text" name="nama_user" value="" class="form-control">
        Gender : 
        <select name="jk_user" class="form-control">
            <option></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat_user" class="form-control" rows="4"></textarea>
        No. Telepon  :
        <input type="text" name="telepon_user" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        Role : 
        <select name="role" class="form-control">
            <option></option>
            <option value="User">User</option>
            <option value="Admin">Admin</option>
        </select>
        <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
