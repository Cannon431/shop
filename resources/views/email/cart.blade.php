<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <style>
        * {
            font-family: Arial;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid silver;
            padding: 7px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Детали заказа</h1>
    <ul>
        <li>ID пользователя: {{ $userId }}</li>
        <li>E-mail пользователя: {{ $userEmail }}</li>
        <li>Имя пользователя: {{ $userName }}</li>
    </ul>

    <table>
        <tr>
            <th>ID корзины</th>
            <th>ID товара</th>
            <th>Название</th>
            <th>Код</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Стоимость</th>
            <th>Создано</th>
        </tr>

        @foreach($carts as $cart)
            <tr>
                <td>{{ $cart->id }}</td>
                <td>{{ $cart->good->id }}</td>
                <td>{{ $cart->good->name }}</td>
                <td>{{ $cart->good->code }}</td>
                <td>{{ $cart->good->price }}</td>
                <td>{{ $cart->quantity }}</td>
                <td>{{ $cart->quantity * $cart->good->price }}</td>
                <td>{{ $cart->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>