<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-auto">
                <h2>Login</h2>
                <form action="/loginMatch" method="post">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="text" placeholder="Enter Your Email" class="form-control" name="email" id="">
                        <p style="color: red">@error('email'){{$message}} @enderror</p>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter Your Password" class="form-control" name="password" id="">
                        <p style="color: red">@error('password'){{$message}} @enderror</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
