<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data siswa</title>
    <style>
        form {
            border-radius: 5px;
            background-color: #ddd;
            padding: 20px;
            width: 20%;
        }
        body {
            height: 100%;       
            margin: 30;
            padding: 0;
            font-family: "Lexend", sans-serif;
            background-color: #f0f2f5;

            display: flex;        
            justify-content: center; 
            align-items: center;   
            flex-direction: column;  
        }
    </style>
</head>
<body>
    <form action="simpan_siswa.php" method="post">
        <center><h2>Input Data Siswa</h2></center>
        <br>
        <br>
        <table border="0">
            <tr>
                <td>NIS</td>
                <td><Input type="number" name="nis" id="nis"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_siswa" id="nama_siswa"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_siswa" id="alamat_siswa"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan" name="simpan"></td>
            </tr>
            <tr>
                <td>
                    <a href="http://localhost/webdb11rpl1_genap/Opening/opening.php">Back</a>
                </td>
            </tr>
        </table>
    </form>

    
</body>
</html>