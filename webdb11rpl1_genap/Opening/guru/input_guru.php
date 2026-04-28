<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data guru</title>
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
    <form action="simpan_guru.php" method="post">
        <center><h2>Input Data Guru</h2></center>
        <br>
        <br>
        <table border="0">
            <tr>
                <td>NIP</td>
                <td><Input type="number" name="nip" id="nip"></td>
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td><input type="text" name="nama_guru" id="nama_guru"></td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td><input type="date" name="tgl_lahir" id="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id="alamat"></td>
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