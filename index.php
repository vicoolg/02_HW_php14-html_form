<?php
 
$name= null;
$surname = null;
$age = null;

if (!empty($_POST)) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : null;
    $age = isset($_POST['age']) ? $_POST['age'] : null;
}
 
if (!empty($_GET)) {
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $surname = isset($_GET['surname']) ? $_GET['surname'] : null;
    $age = isset($_GET['age']) ? $_GET['age'] : null; 
}
 
var_dump($_POST);
var_dump($_GET);
 
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h5><?= $_GET['test']; ?></h5>
<form method="post">
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputName1" required size="20">
    </div>
    <div class="mb-3">
        <label for="exampleInputSurname1" class="form-label">Surname</label>
        <input type="text" name="surname" class="form-control" id="exampleInputSurname1">
    </div>
    <div class="mb-3">
        <label for="exampleInputAge1" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="exampleInputAge1" required > 
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
<div>
    <p> <strong>Name: </strong><?= $name ?></p>
    <p><strong>Surname: </strong><?= $surname ?></p>
    <p><strong>Age: </strong><?= $age ?></p>
</div>
 
</body>
</html>