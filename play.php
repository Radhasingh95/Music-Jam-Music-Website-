<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play audios</title>
</head>
<body>
    

    <script>
        let song = new Audio('<?php echo $_GET[$row['filename']];?>');
        song.play();
        
    </script>


</body>
</html>