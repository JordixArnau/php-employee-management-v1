<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Employee Management v1</title>
</head>

<body class="d-flex justify-content-center align-items-center bg-secondary">
    <div>
        <form action="" id="login" class="d-flex flex-column p-4 mt-5">
            <img src="./assets/img/assembler_logo.png" alt="Assembler School" width="250" class="mb-4" />
            <input type="text" id="user" name="user" placeholder="User" class="form-control" required>
            <input type="password" id="pass" name="pass" placeholder="Password" class="mt-2 form-control" required>
            <input type="submit" value="Sign in" class="btn btn-primary mt-4">
            <p class="text-light mt-5 text-center">Ⓒ Assembler School 2020 - 2021</p>
        </form>
    </div>
</body>

</html>