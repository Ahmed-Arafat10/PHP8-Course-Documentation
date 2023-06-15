````php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="GET">
        <label for="TitleName">Title</label>
        <input type="text" name="TitleName" id="TitleName" value="<?php if (isset($_GET['TitleName'])) echo $_GET['TitleName'];
                                                                    else echo "Enter Title Here"; ?>">
        <hr>
        <label for="TitleText">Title</label>
        <textarea name="TitleText" id="TitleText" cols="30" rows="10"><?php if (isset($_GET['TitleText'])) echo $_GET['TitleText'];
                                                                        else echo "Enter Title Here"; ?></textarea>
        <input type="submit" name="submit" value="Save Your Idea">
    </form>

    <?php

    print_r($_GET);
    // O/P --> Array ( [TitleName] => ahmed [TitleText] => BIS [submit] => Save Your Idea 1 ) ahmedBIS


    // Will Give An Error If This Key Is Not Exist
    echo $_GET['TitleName'];
    // Will Give An Error If This Key Is Not Exist
    echo $_GET['TitleText'];

    // isset() -> Function Check If This Key Is Associated With A Value Or Not 
    if (isset($_GET['TitleName'])) {
        echo $_GET['TitleName'];
    }

    if (isset($_GET['TitleText'])) {
        echo $_GET['TitleText'];
    }

    ?>
</body>

</html>
````