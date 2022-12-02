<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1>Register here </h1>
        <hr>

        <div class="container">
            <form action="" method="post">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <label for="name" class="col-form-label ">Name</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="name" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <label for="email" class="col-form-label ">Email</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="confirmpassword" class="col-sm-2 col-form-label"> Confirm Password</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" name= "confirmpassword" id="confirmpassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-5 d-flex justify-content-center">
                        <button type="button" class="btn btn-primary ">Register</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
