<?php
if (!isset($_POST['val1'])) {
    include 'template/form.html.php';
} else {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $calc = $_POST['calc'];

    if (is_numeric($val1) && is_numeric($val2)) {
        $val1 = (float)$val1;
        $val2 = (float)$val2;

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
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operation";
        }

        $output = "The result of your calculation is: " . $result;
        include 'template/result.html.php';
    } else {
        $error = "Please enter valid numbers!";
        include 'template/error.html.php';
    }
}
?>