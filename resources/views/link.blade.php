@extends('layout')

@section('content')
<div class = "container">



  <div class = "row">

    <!-- # get_url -->
    @foreach ($links as $link)
    <div class = "col-sm-4 col-sm-offset-4 jumbotron">
       <ul class="list-group">
          <li class="list-group-item">
            <span class="badge badge-{{$col}}">.</span>
            <a href = "{{ url('/redirect') }}?view={{$link->randset}}">{{ url('/') }}/{{$link->randset}}</a>
          </li>
       </ul>
       <form class="form-inline" action="{{ url('/redirect') }}" method = "GET">
         <div class="form-group">
           <input type="password" name = 'password' class="form-control" placeholder="Password">
         </div>
         <button type="submit" name = "view" value = "{{$link->randset}}" class="btn btn-default">Submit</button>
       </form>
    </div>
    @endforeach
    <!-- / get_url -->
  </div>
</div>
@stop
