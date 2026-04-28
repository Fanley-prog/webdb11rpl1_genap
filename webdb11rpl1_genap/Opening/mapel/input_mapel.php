<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data mapel</title>
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
    <form action="simpan_mapel.php" method="post">
        <center><h2>Input Data Mapel</h2></center>
        <br>
        <br>
        <table border="0">
            <tr>
                <td>Kode Mapel</td>
                <td><Input type="number" name="kode_mapel" id="kode_mapel"></td>
            </tr>
            <tr>
                <td>Nama Mapel</td>
                <td><input type="text" name="nama_mapel" id="nama_mapel"></td>
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