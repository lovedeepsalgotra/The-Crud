<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
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
    <style>
        body{
            font-family: mulish;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-3 px-2 text-center text-danger">Car Details</h2>
                {{-- <h3>Welcome {{Auth::user()->name}}</h3> --}}
                <form action="{{route('searchUser')}}" method="GET">
                    <input type="text" class="form-control mb-2" placeholder="Search By Name" name="search" value="{{@$search}}">
                    <button class="btn btn-primary mb-3">Search</button>
                </form>

                <table class="table table-dark table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Car_brand</th>
                        <th>Car_model</th>
                        <th>Top_speed</th>
                        <th>Horsepower</th>
                        <th>Torque</th>
                        <th>Action</th>
                    </tr>

                    @foreach($vehicleData as $data)
                    <tr>
                        
                        <td>{{$data ->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->car_brand}}</td>
                        <td>{{$data->car_model}}</td>
                        <td>{{$data->top_speed}}</td>
                        <td>{{$data->horsepower}}</td>
                        <td>{{$data->torque}}</td>
                        <td>
                            <a href="{{'update/'.$data->id}}" class="px-2 text-primary"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{'delete/'.$data->id}}" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>