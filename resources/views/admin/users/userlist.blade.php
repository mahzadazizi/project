@extends('layouts.master')

@section('content')



<br>
<br>
<br>
<br>
<br>
<table border="6" bgcolor="#b22222" class="table table-striped ">
    <thead>
    <tr>
        <th scope="col">user_id</th>
        <th scope="col">role_id</th>
        <th scope="col">UserName</th>
    </tr>
    </thead>
    <tbody>


    </tr>

   
      @if(count($Users))
        @foreach($Users  as $user)
            <tr>
            <tr>
                <td>{{$user->UserID}}</td>
                <td>{{$user->Role_ID}}</td>
                <td>{{$user->UserName}}</td>
            </tr>
        @endforeach 
     @endif


    </tbody>
</table>

   @if(count($Users))
       {{$Users->links()}}
    @endif 

<br>
<br>
<br>
<br>
<br>
@endsection