@extends('site.layouts.base')



@section('content')
@if(count($searchpro) > 0)
<h3>{{count($searchpro)}} search result</h3>
<div class="column">
<div class="card text-center">
@foreach($searchpro as $key)
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Available</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">{{$key->address}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">{{$key->contact}}</a>
      </li>
    </ul>
  
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$key->name}}</h5>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#">Blood Group: {{$key->blood_group}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gender: {{$key->gender}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Age: {{$key->age}}</a>
      </li>
    </ul>
    <a href="#" class="btn btn-primary">Manage</a>
  </div>
  @endforeach
</div>
</div>
	 
              @else
              <h1>Search result not found!</h1>
              @endif

</div>



@endsection
