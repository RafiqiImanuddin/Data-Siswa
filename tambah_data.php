<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="tambah_data.php" method="post" name="form1">
        
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        
        // include database connection file
        include_once("config/Koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO users(nama,email,no_hp) VALUES('$nama','$email','$no_hp')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>