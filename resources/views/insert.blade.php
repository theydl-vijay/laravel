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
                <h5 class="mx-1">Insert Data</h5>
                <form method="post" action="{{route('store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">role</label>
                            <select class="form-select" name="role">
                                <option selected disabled>Select Your Role</option>
                                @foreach($dropdown as $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">gender</label>
                            <div class="d-flex justify-content-start">
                                <div class="form-check">
                                    <input class="form-check-input" name="gender" type="radio" name="exampleRadios" id="exampleRadios1" value="male">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check mx-3">
                                      <input class="form-check-input" name="gender" type="radio" name="exampleRadios" id="exampleRadios2" value="female">
                                    <label class="form-check-label">Female</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-around py-3">
                        <button type="submit" class="btn btn-primary w-50">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>