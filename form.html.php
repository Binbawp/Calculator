<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form</title>
</head>
<body>
    <h1>Basic Calculator</h1>
    <form action="" method="post">
        <label for = "val1">First number: </label>
        <input type = "text" id = "val1" name = "val1"><br><br>

        <label for = "val2">Second number: </label>
        <input type = "text" id = "val2" name = "val2"><br><br>

        <label>Choose Operation</label><br>
        <input type="radio" name="calc" value="add" checked>Add<br>
        <input type="radio" name="calc" value="sub" checked>Subtract<br>
        <input type="radio" name="calc" value="mul" checked>Multiply<br>
        <input type="radio" name="calc" value="div" checked>Divide<br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>