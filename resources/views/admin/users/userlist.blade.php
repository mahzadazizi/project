@extends('layouts.master')

@section('content')


<br>
<br>
@if(Session::has('message'))
     <div style="direction:rtl" class:"alert alert-success " >
          {{Session::get('message')}}
     <div>
@endif

<table   class="table table-striped ">

    <tr>
        <td >user_id</td>
        <td >role_id</td>
        <td >UserName</td>
        <td >delete</td>
        <td >edite</td>
    </tr>
   


    </tr>

   
      @if(count($Users))
        @foreach($Users  as $user)
            <tr>
            <tr>
                <td>{{$user->UserID}}</td>
                <td>{{$user->Role_ID}}</td>
                <td>{{$user->UserName}}</td>
                <td>
                    <form action="admin/users/delete{{$user->id}}" method="post">
                           @csrf
                           @method("delete")
                           <button class="btn btn-danger btn_sm" > delete </button>

                    </form>
                </td>
                <td>
                    <form action="admin/users/edit{{$user->id}}" method="post">
                           @csrf
                           @method("edite")
                           <button class="btn btn-danger btn_sm" > edite </button>

                    </form>
                </td>
            </tr>
        @endforeach 
     @endif


    </tbody>
</table>

   @if(count($Users))
       {{$Users->links()}}
    @endif 


@endsection