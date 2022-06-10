<?php
    $order = [
            'na' => null,
            'hm' => null,
            'hob' => null,
    ];
    if(isset($_POST['bu']) && !empty($_POST['bu'])) {
        foreach ($_POST as $key => $value) {
            $order[$key] = $value;
        }
}

    include_once('formhtml.php ');