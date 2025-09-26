<?php
if (!isset($_POST['val1'])) {
    include 'template/form.html.php';
} else {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $val3 = $_POST['val3'];

    if (is_numeric($val1) && is_numeric($val2)) {
        switch ($calc) {
            case 'add':
                $result = $val1 + $val2;
                break;
            case 'sub':
                $result = $val1 - $val2;
                break;
            case 'mul':
                $result = $val1 * $val2;
                break;
            case 'div':
                if ($val2 != 0) {
                    $result = $val1 / $val2;
                } else {
                    $error = "Division by zero is not allowed!";
                    include 'templates/error.html.php';
                    exit();
                }
                break;
            default:
                $result = "Unknown operation";
        }

        $output = "The result of your calculation is: " . $result;
        include 'templates/result.html.php';
    } else {
        $error = "Please enter valid numbers!";
        include 'templates/error.html.php';
    }
}
?>