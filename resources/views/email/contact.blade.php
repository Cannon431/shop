<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $request->subject }}</title>
</head>
<body>
    <h1>Обратная связь</h1>
    <p>
        <h3>Тема: {{ $request->subject }}</h3>
        <h3>Имя: {{ $request->name }}</h3>
        <h3>E-mail: {{ $request->email }}</h3>
        <h3>Сообщение: </h3>
        <p>{{ $request->message }}</p>
    </p>
</body>
</html>