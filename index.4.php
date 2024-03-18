<?php

// Массив с блюдами и их ценами
$menu = array(
    1 => array("name" => "Пицца", "price" => 10),
    2 => array("name" => "Паста", "price" => 8),
    3 => array("name" => "Салат", "price" => 6),
    4 => array("name" => "Стейк", "price" => 15),
    5 => array("name" => "Рыба", "price" => 12)
);

$totalPrice = 0;

echo "Меню ресторана:\n";
foreach ($menu as $key => $item) {
    echo "$key. {$item['name']} - {$item['price']} долларов\n";
}

while (true) {
    $choice = readline("Выберите блюдо (или введите '0' для завершения заказа): ");

    // Проверка на выход из программы
    if ($choice == 0) {
        break;
    }

    // Проверка на корректность выбора
    if (!isset($menu[$choice])) {
        echo "Пожалуйста, выберите номер из меню.\n";
        continue;
    }

    // Добавляем цену выбранного блюда к общей стоимости заказа
    $totalPrice += $menu[$choice]['price'];
}

echo "Итоговая стоимость заказа: $totalPrice долларов\n";

?>