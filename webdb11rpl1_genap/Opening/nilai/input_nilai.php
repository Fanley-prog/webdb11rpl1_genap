<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input nilai</title>
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
    <form action="simpan_nilai.php" method="post">
        <center><h2>Input Nilai</h2></center>
        <br>
        <br>
        <table border="0">
            <tr>
                <td>ID</td>
                <td><Input type="number" name="id" id="id"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" id="nis"></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td><input type="number" name="kode_mapel" id="kode_mapels"></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td><input type="number" name="nip" id="nip"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="number" name="nilai" id="nilai"></td>
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