
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form2soal1a.php"  method="POST">
        <table>
        <tr>
            <td>Inputkan Jumlah Baris :</td>
            <td><input type="text" name="start" id="" onkeypress="return event.charCode >= 48 && event.charCode <=57" required=""></td>

        </tr>
        <tr>
            <td>Inputkan Jumlah Kolom :</td>
            <td><input type="text" name="stop" id=" "onkeypress="return event.charCode >= 48 && event.charCode <=57" required=""></td>
        </tr>
        <tr>
            <td rowspan="3" ><input type="submit" value="submit"></td>
        </tr>
        </table>
        
    </form>


</body>
</html>