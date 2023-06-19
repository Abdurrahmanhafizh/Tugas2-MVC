<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            background-color:#4cd137;
            width:180px;
            height:45px;
            border-top-right-radius: 50px ;
            border-bottom-right-radius: 50px;
            padding-top:20px;
            padding-left:20px;
        }
        p{
            font-weight:bold;
        }
        form{
            margin-left:100px;
            border-radius:50px;
            padding-left:200px;
            margin-bottom:100px;
        }
        input{
            height:25px;
            width: 400px;
            border:1px solid gray;
            border-radius:3px;
            padding-left:10px;
        }
        .btn_update{
            margin-top:30px;
            border:0px;
            height:35px;
            border-radius:50px;
            background-color:#fbc531;
            font-weight: bold;
        }
        p{
            font-size:15px;
            font-family:;
        }
    </style>
</head>
<body>
<h3>Edit Golongan</h3>
<form action="<?php echo URL; ?>/golongan/update" method="post">
            <input type="hidden" name="gol_id"value="<?php echo $data['row']['gol_id']; ?>">
            <p>Kode Golongan</p>
            <input type="text" name="gol_kode"value="<?php echo $data['row']['gol_kode']; ?>" required>
            <p>Nama Golongan</p>
            <input type="text" name="gol_nama"value="<?php echo $data['row']['gol_nama']; ?>" required>
            <input type="submit" name="btn_update" class="btn_update" value="Update">
</form>
</body>
</html>