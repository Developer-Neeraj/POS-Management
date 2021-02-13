<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS MANAGEMENT</title>
    <link rel="stylesheet" href="{{ asset('cssFile/style.css') }}">
    <link rel="stylesheet" href="{{ asset('cssFile/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
</head>
<body>
    <nav class="navbar bg-white">
        <button class="btn">Login</button>
    </nav>
    <div class="container-fluid mainDiv">
        <div class="container loginDiv">
            <div class="card" style="width: 68%;">
                <h4 class="bg-dark text-white text-center py-2">login</h4>
                <div class="card-body">
                    <div class="loginImg"></div>
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">E-mail Address</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-9 offset-sm-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                  Remember Me
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
    <script src="{{ asset('jsFile/bootstrap.bundle.min.js') }}"></script>
</body>
</html>