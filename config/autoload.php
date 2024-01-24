<?php
spl_autoload_register(function ($className) {
    // Klass fayllarini topish uchun boshqa kataloglarni qo'shish kerak
    $directories = [ '../routes/'];

    foreach ($directories as $dir) {
        $classFile = $dir . $className . '.php';
        if (file_exists($classFile)) {
            require($classFile);
            return;
        }
    }
});

