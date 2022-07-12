<h1>Register</h1>
<form action="register_proses.php" method="post">
    Username:
    <input type="text" name="uname" /><br />
    Password:
    <input type="password" name="upass" /><br />
    Role:
    <select name="role">
        <option value="dosen">Dosen</option>
        <option value="mahasiswa">Mahasiswa</option>
    </select>
    <button type="submit">Register</button>
</form>