<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cash Management | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="flex-item">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="div-icon d-flex justify-content-center align-items-center">
                        <img src="{{asset("images/icon/save-money.png")}}" class="img-fluid rounded-start icon-login">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label card-text fs-6">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label card-text fs-6">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-bg text-light">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
