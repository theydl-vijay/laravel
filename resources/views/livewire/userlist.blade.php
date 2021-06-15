<div>
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
                        <th scope="col">Phone Number</th>
                        <th scope="col">Account Balance</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>role</td>
                        <td>gender</td>
                        <td>
                            <a href="edit"><i class="far fa-edit text-dark"></i></a>
                        </td>
                        <td>
                            <a href="delete"><i class="far fa-trash-alt text-dark text-center"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
