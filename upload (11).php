<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/"; // Убедитесь, что этот каталог существует и доступен для записи
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Файл ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " был загружен.";
    } else {
        echo "Извините, произошла ошибка при загрузке вашего файла.";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    Выберите файл для загрузки:
    <input type="file" name="fileToUpload" required>
    <input type="submit" value="Загрузить файл">
</form>

