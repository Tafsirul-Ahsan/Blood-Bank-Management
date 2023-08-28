@extends('dashboard.layouts.base')

@section('content')


<nav aria-label="breadcrumb ">
    <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item "><a href="/dashboard" class="text-dark">Home</a></li>
        <li class="breadcrumb-item "><a href="/events" class="text-dark">Blood</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bank</li>
    </ol>
</nav>


<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h5 class="card-title text-center">Add New Blood Bank Form</h5>

                <form action="/blood_store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title" class="bmd-label-floating">Name</label>
                        <input name="name" required type="text" class="form-control" id="title">
                    </div>

                    <div class="form-group">
                        <label for="desc" class="bmd-label-floating">Address</label>
                        <input name="address" required class="form-control" id="desc" rows="5"></input>
                    </div>

                    <div class="form-group">
                        <label for="location" class="bmd-label-floating">Contact</label>
                        <input name="contact" required type="number" class="form-control" id="location">
                    </div>

                    <div class="form-group">
                        <label for="location" class="bmd-label-floating">Available Blood Group</label>
                        <input name="blood_group" required type="text" class="form-control" id="location">
                    </div>
                    <div class="form-group pt-2">
                        <label for="Image" class="bmd-label-floating">Image File</label>
                        <input name="image" type="file" class="form-control-file" id="Image">
                    </div>
                    <button type="submit" class="btn btn-primary btn-raised mt-4">Add Rewards</button>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="card mt-5">

    <div class="card-body">
        <h5 class="card-title">Rewards Share</h5>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image File</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Available Blood Group</th>
                    <th scope="col">Confirm</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($items))
                @foreach ($items as $item)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td><img src="{{asset('/uploads/'.$item->image)}}" class="img-fluid d-block m-auto" style="max-height: 50px;">
                    </td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['address']}}</td>
                    <td>{{$item['contact']}}</td>
                    <td>{{$item['blood_group']}}</td>
                    <td><a href="{{url('blood_store/'.$item->id)}}" class="btn btn-outline-success btn-sm rounded shadow btn btn-link"> Complete</a>
                    </td>
                    <td>
                        @if($item->avilable==0)
                        <b class="text-danger">Pending</b>
                        @else
                        <b class="text-success">Completed</b>
                        @endif
                    </td>
                    @if (Auth::user()->type == 'admin')

                    <td>
                        <a href="/rewards/remove"><i class="material-icons text-danger">delete</i></a>
                    </td>
                    @endif
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection