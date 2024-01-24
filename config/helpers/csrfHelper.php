<?php
function csrfa_token()
{
    // Formni to'ldirganda CSRF tokenni tekshirish
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    //         die("CSRF ataka qayd etildi!");
    //     }

    //     // CSRF tokenni yangilash
    //     $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    // }
    return bin2hex(random_bytes(32));
}