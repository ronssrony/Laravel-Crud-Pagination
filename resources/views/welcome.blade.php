@extends('layout/masterlayout')

@section('title')
    Homepage
@endsection

@push('style')
<style>
    dialog{
        padding: 2rem ; 
        background-color: slategray ; 
    }
    dialog::backdrop{
       background-color: black;
       opacity: .4 ;
    }
    .information{
        display: flex; 
        gap: 20px; 
        align-items: center ;
         
    }
</style>
@endpush

@section('content')
  <h1>All Users</h1>
 <a class="btn btn-success" href="/add">Insert an user</a>
 <div class="container text-center">


  @foreach ($data as $element)
  <div class="information d-flex p-2 row ">
    <div class="col d-flex gap-3 align-items-center">
    <h3>ID: {{$element->student_id}}</h3>
    <p>Username: {{$element->username}}</p>
    <p>Email: {{$element->email}}</p>
    </div>
    
    <div class="col">
        <a href="{{route('Edituser' ,$element->student_id );  }}" class="btn btn-info">Edit</a>
        <a href="{{route('Deleteuser' ,$element->student_id );  }}" class="btn btn-danger">Delete</a>
      
    </div>
</div>
  @endforeach
</div>
  {{$data->links('pagination::bootstrap-5')}}
    <div id="root">
    </div>
   
@endsection



@push('script')
<script>
   var data = @json($data) ;
   console.log(data)
 </script>
@endpush