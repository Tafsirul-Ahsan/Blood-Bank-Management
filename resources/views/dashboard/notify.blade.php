@extends('dashboard.layouts.base')

@section('content')


<nav aria-label="breadcrumb ">
    <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item "><a href="/dashboard" class="text-dark">Home</a></li>
        <li class="breadcrumb-item "><a href="/events" class="text-dark">Events</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
</nav>


<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h5 class="card-title text-center">Add New Event Form</h5>

                <form action="notify/store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title" class="bmd-label-floating">Text</label>
                        <input name="notify" required type="text" class="form-control" id="title">
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
                    <th scope="col">Text Notify</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($items))
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$item['notify']}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
