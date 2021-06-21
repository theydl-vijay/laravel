<div>
    <div class="container-fluid">
        <h4 class="my-4 text-center">CRUD Opration - Data list</h4>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show w-75 mx-auto" role="alert">
            <strong>Your data has been Deleted !</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="jumbotron px-1 my-4 shadow text-capitalize">
            <div class="row">
                <div class="col-auto d-flex py-3 justify-content-between">
                    <p class="mx-2"> {{$data->firstItem()}} to {{$data->lastItem()}}  out of {{$data->total()}} Data</p>
                    <a href="/user" type="submit" class="btn btn-secondary mx-3">Add Data</a>
                    <form class="d-flex">
                        <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <button type="button" id="hideShow" class="btn btn-primary mx-3">Filter</button>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" wire:click="sortBy('id')" style="cursor: pointer;">
                            Id <i class="fas fa-sort">
                        </th>
                        <th scope="col">Name </th>
                        <th scope="col">Email </th>
                        <th scope="col">Phone Number </th>
                        <th scope="col">Account Balance </th>
                        <th scope="col">Age </th>
                        <th scope="col">Gender </th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    <tr id="hideandShow" class="filter">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="col-auto d-flex justify-content-start">
                                <select wire:model="operatorSignForBalance" class="form-select" style="width:5rem">
                                    @foreach($operator as $oprators)
                                        <option value="{{$oprators}}">{{$oprators}}</option>
                                    @endforeach
                                </select>
                                <input wire:model="balance" type="text" class="form-control mx-2 w-25">
                            </div>
                        </td>
                        <td>
                            <div class="col-auto d-flex justify-content-start">
                                <select wire:model="operatorSignforAge" class="form-select" style="width:5rem">
                                    @foreach($operator as $oprators)
                                        <option value="{{$oprators}}">{{$oprators}}</option>
                                    @endforeach
                                </select>
                                <input wire:model.click.click="age" type="text" class="form-control mx-2 w-25">
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $getdata)
                    <tr>
                        <td>{{$getdata->id}}</td>
                        <td>{{$getdata->name}}</td>
                        <td>{{$getdata->email}}</td>
                        <td>{{$getdata->phone_number}}</td>
                        <td>{{$getdata->account_balance}}</td>
                        <td>{{$getdata->age}}</td>
                        <td>{{$getdata->gender}}</td>
                        <td>
                            <a href="/user" wire:click="edit({{$getdata->id}})"><i class="far fa-edit text-dark"></i></a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" wire:click="delete({{$getdata->id}})"><i class="far fa-trash-alt text-dark text-center"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$data->links()}}
        </div>
    </div>
</div>