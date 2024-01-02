<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTempName = $file['tmp_name'];
    $fileSize = $file['size'];
    $uploadDirectory = 'uploads/';

    // Проверка, что файл был успешно загружен
    if (move_uploaded_file($fileTempName, $uploadDirectory . $fileName)) {
        $downloadLink = $uploadDirectory . $fileName;

        // Генерация ссылки для скачивания
        echo 'Файл успешно загружен. <a href="'.$downloadLink.'">Скачать</a>';
    } else {
        echo 'Ошибка при загрузке файла.';
    }
}

// Удаление файла
if (isset($_GET['filename'])) {
    $filenameToRemove = $_GET['filename'];
    $filePath = 'uploads/' . $filenameToRemove;

    // Проверка, что файл существует и удаление его
    if (file_exists($filePath)) {
        unlink($filePath);
        echo 'Файл успешно удален.';
    } else {
        echo 'Файл не найден.';
    }
}
?>


