<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
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
            <div class="col-md-12 main m-auto">
                <div class="cars">
                    <div class="title text-center">
                       <h2>Car Details</h2>
                    </div>


                    <form action="{{route('addUser')}}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                           <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <!-- name attribute in input field is required which we will use in PHP and after that this name attribute we will submit the data of input field in database -->
                                <input type="text" placeholder="" class="form-control" value="{{old('name')}}" name="name">
                                <p style="color: red">@error('name'){{$message}} @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="email" placeholder="" class="form-control" value="{{old('email')}}" name="email">
                                <p style="color: red">@error('email'){{$message}} @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="password" placeholder="" class="form-control" value="{{old('password')}}" name="password">
                                <p style="color: red">@error('password'){{$message}} @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Car Brand</label>
                                <input type="text" placeholder="" class="form-control" value="{{old('brand')}}" name="brand">
                                <p style="color: red">@error('brand'){{$message}} @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Car Model</label>
                                <input type="text" placeholder="" class="form-control" value="{{old('model')}}" name="model">
                                <p style="color: red">@error('model'){{$message}} @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Top Speed</label>
                                <input type="text" placeholder="" class="form-control" value="{{old('speed')}}" name="speed">
                                <p style="color: red">@error('speed'){{$message}}  @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Horsepower</label>
                                <input type="text" placeholder="" class="form-control" value="{{old('horsepower')}}" name="horsepower">
                                <p style="color: red">@error('horsepower'){{$message}}  @enderror</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Torque</label>
                                <input type="text" placeholder="" class="form-control" value="{{old('torque')}}" name="torque">
                                <p style="color: red"> @error('torque'){{$message}} @enderror</p>
                            </div>

                            <div class="btn col-md-12" style="display: flex; justify-content:end">
                            <!-- for submit the form data the  use input field instead of button -->
                                <button style="padding: 12px 22px; border:none; background-color: red; border-radius:      16px;   color:white;" type="submit" id="submit"  value="Register" name="register">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</body>
</html>