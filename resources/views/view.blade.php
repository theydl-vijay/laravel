<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>CRUD Operation : View</title>
    </head>
    <body>
        <div class="container">
            <h4 class="my-4 text-center">CRUD Opration</h4>
            <div class="jumbotron px-1 my-4 shadow text-capitalize">
                <div class="d-flex py-3 justify-content-between">
                    <h5 class="mx-3">Data View</h5>
                    <a href="/insert" type="submit" class="btn btn-secondary mx-3">Add Data</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->role}}</td>
                                <td>{{$data->gender}}</td>
                                <td>
                                    <a href="edit/{{$data->id}}"><i class="far fa-edit text-dark"></i></a>
                                </td>
                                <td>
                                    <a href="delete/{{$data->id}}"><i class="far fa-trash-alt text-dark text-center"></i>
                                </td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>