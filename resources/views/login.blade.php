<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
    </form>
    <button type="submit"> Login </button>
    <button>
        <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
    </button>
</body>
</html>
