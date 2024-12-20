<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            $result = $num2 ? $num1 / $num2 : 'Деление на 0 невозможно';
            break;
    }
    echo "Результат: $result";
}
?>

<form method="post">
    <input type="number" name="num1" placeholder="Число 1" required>
    <input type="number" name="num2" placeholder="Число 2" required>
    <select name="operation">
        <option value="add">Сложить</option>
        <option value="subtract">Вычесть</option>
        <option value="multiply">Умножить</option>
        <option value="divide">Разделить</option>
    </select>
    <button type="submit">Посчитать</button>
</form>