<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputIndex">Masukkan Index</label>
        <input type="text" name="inputIndex" id="inputIndex">
        <button type="submit" name="proses" id="proses">Proses</button>
    </form>
    <?php
        if(isset($_POST['proses'])){
            $index =["S","A","F","I","R","A","","S","A","L","S","A","B","I","L","L","A"];
            $inputIndex = $_POST['inputIndex'];

            if(array_key_exists($inputIndex,$index)){
                echo $index[$inputIndex];
            } else{
                echo "index tidak tersedia";
            }
        }
        ?>
</body>
</html>