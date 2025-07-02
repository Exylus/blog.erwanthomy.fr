<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="shadow p-4 mb-5 mt-5 bg-body-tertiary rounded" style="width: 600px;">
            <h2 class="text-center">Sign in</h2>
            <form enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="text-black">Username</label>
                    <input type="text" class="text-black form-control mt-1" id="loginUsrname" required>
                </div>
                <div class="mb-4">
                    <label class="text-black">Password</label>
                    <input type="password" class="text-black form-control mt-1" id="loginPsswd" required>

                    <!-- À ajouter : hide/show password -->
                     
                </div>
                <div class="text-center">
                    <p><a class="link" href="#">Forgot your password?</a></p>
                    <button type="submit" onclick="login()" class="btn btn-primary">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>