<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $words = explode(" ", "happy beautiful happy lines pear gin happy lines rock happy lines pear");
    $result = array_combine($words, array_fill(0, count($words), 0));
    
    foreach($words as $word) {
        $result[$word]++;
    }
    
    foreach($result as $word => $count) {
        echo "There are $count instances of $word.\n";
    }
    ?>
</body>
</html>