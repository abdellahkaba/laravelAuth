@extends('backend.layouts.app')
@section('content')

       <div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">Liste des Utilisateurs</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
       
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nom</th>               
<th>Email</th>  
<th>Permission</th> 
<th>Action</th>                  
</tr>
</thead>
<tbody>
@foreach($list as $row)
<tr>
<td>{{ $row->id }}</td>
<td>{{ $row->name }}</td>
<td> {{ $row->email }} </td>
<td> 
       @php 


if($row->role==1)
{
       echo 'Administrateur';
}
if($row->role==2)
{
       echo 'Manager';
}
if($row->role==3)
{
       echo 'Utilisateur';
}

@endphp 

</td>
<td>
<a href="{{ URL::to('/edit_user/'.$row->id) }}" class="btn btn-sm btn-info">Modifier</a>
<a href="{{ URL::to('delete_user/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Supprimer</a>

</td>
</tr>
@endforeach

</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Nom</th>               
<th>Email</th>  
<th>Permission</th> 
<th>Action</th>
</tr>
</tfoot>
        </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        </div>

            @endsection