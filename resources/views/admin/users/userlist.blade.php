@extends('layouts.master')

@section('content')


<br>
<br>
@if(Session::has('message'))
     <div style="direction:rtl" class:"alert " >
          {{Session::get('message')}}
     <div>
@endif

<table   class="table table-striped ">

    <tr>
        <td >user_id</td>
        <td >role_id</td>
        <td >UserName</td>
    </tr>
   


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


@endsection