@extends('site.layouts.base')
<style>
/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin: 50px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
    </style>
@section('content')


<nav aria-label="breadcrumb ">
    <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item "><a href="/dashboard" class="text-dark">Home</a></li>
        <li class="breadcrumb-item "><a href="/events" class="text-dark">Notify</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
</nav>


<div class="alert">
    @foreach($items as $item)
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  {{$item->notify}}
  @endforeach
</div>

@endsection
