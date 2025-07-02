<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="shadow p-4 mb-5 mt-5 bg-body-tertiary rounded" style="width: 600px;">
            <h2 class="text-center">Create account</h2>
            <form enctype="multipart/form-data">
                <div class="row mt-4">
                    <div class="col-7 mb-3">
                        <label class="text-black">Name</label>
                        <input type="text" class="text-black form-control mt-2" id="name" required>
                    </div>
                    <div class="col-5 mb-3">
                        <label for="dob" class="form-label text-black">Date of birth</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                </div>

                <!--Add phone number -->
                

                <div class="mb-3">
                    <label class="text-black">Username</label>
                    <input type="text" class="text-black form-control mt-1" id="usrname" required>
                </div>
                <div class="mb-4">
                    <label class="text-black">Password</label>
                    <input type="password" class="text-black form-control mt-1" id="psswd" required>

                    <!-- À ajouter : hide/show password -->

                </div>
                <div class="mb-4">
                    <label class="text-black">Repeat password</label>
                    <input type="password" class="text-black form-control mt-1" id="repeaPsswd" required>

                    <!-- À ajouter : hide/show password -->

                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">
                        I agree agree all statements in <a class="link" href="#">Terms of service</a>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" onclick="register()" class="btn btn-primary mt-4">
                        Register
                    </button>
                    <p class="mt-5"><a class="link" href="login.php">I already have an account</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>