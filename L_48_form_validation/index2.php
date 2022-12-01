<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?
        $errors = [];
        if(!empty($_POST)) {
            if(empty($_POST['first'])) {
                $errors[] = 'Текстовое поле не заполнено';
            }
            if(empty($errors)) {
                echo htmlspecialchars($_POST['first']);
                exit();
            }
        }
        if(!empty($errors)) {
            foreach($errors as $err) {
                echo "<span style='color: red'>$err</span><br>";
            }
        }
    ?>
    <form method="POST">
        <input type="text" name="first" value="<?htmlspecialchars($_POST['first'], ENT_QUOTES)?>"><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>