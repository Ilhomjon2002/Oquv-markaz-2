<?php
function renderView($view, $params = [])
{
    foreach ($params as $key => $value) {
        $$key = $value;
    }

    if ($view === 'register/login' || $view === 'register/register') {

        // ob_start();
        // include_once __DIR__ . "../Resources/Views/layouts/head.php";
        // $head = ob_get_clean();
        // die(__DIR__);
        include_once __DIR__."/../Resources/Views/$view.php";
    } else {
        ob_start();
        include_once __DIR__."/../Resources/Views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__."/../Resources/Views/index.php";
    }
}