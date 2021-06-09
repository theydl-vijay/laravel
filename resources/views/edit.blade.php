<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>CRUD Operation</title>
    </head>
    <body>
        <div class="container">
            <h4 class="my-4 text-center">CRUD Opration</h4>
            <div class="jumbotron py-3 px-3 my-4 shadow text-capitalize">
                <h5 class="mx-1">Edit Data</h5>
                <form method="post" action="{{route('store',$post->id)}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">name</label>
                            <input type="text" value="{{$post->name}}" name="name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">email</label>
                            <input type="email" value="{{$post->email}}" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">role</label>
                            <select class="form-select" value="{{$post->role}}" name="role">
                                <option selected disabled>Select Your Role</option>
                                <option value="admin"{{$post->role == "admin" ?'selected':''}}>Admin</option>
                                <option value="client"{{$post->role == "client" ?'selected':''}}>Client</option>
                                <option value="user"{{$post->role == "user" ?'selected':''}}>User</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">gender</label>
                            <div class="d-flex justify-content-start">
                                <div class="form-check">
                                    <input class="form-check-input" value="male" {{$post->gender == 'male' ?'checked':''}} name='gender' type="radio">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check mx-3">
                                      <input class="form-check-input" value="female" {{$post->gender == 'female' ?'checked':''}} name='gender'name="gender" type="radio">
                                    <label class="form-check-label">Female</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-around py-3">
                        <button type="submit" class="btn btn-primary w-50">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>