<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <h1>お問合せフォーム</h1>
   <form action="./check.php" method="POST">
    <div>
        <label for="">名前</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="">メールアドレス</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="">お問い合わせ内容</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="submitBtn">
        <input type="submit" value="送信">
    </div>
   </form>
</body>
</html>