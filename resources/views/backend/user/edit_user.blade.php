@extends('backend.layouts.app')
@section('content')

<div class="card-body">
    <div class="row">

      <div class="col-md-2">

      </div>
                     <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier l'utilisateur pour   {{ $edit->name }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/update_user/'.$edit->id)}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
<div class="form-group">
@php 


if($edit->role==1)
{
       echo 'L\'autorisation actuelle est : <b>Administrateur</b>';
}
if($edit->role==2)
{
       echo 'L\'autorisation actuelle est : <b>Manager</b>';
}
if($edit->role==3)
{
       echo 'L\'autorisation actuelle est : <b>Utilisateur</b>';
}

@endphp
</div>
                <div class="form-group">
<label for="exampleInputEmail1">Changer la permission</label>
 


             <select class="form-control" id="exampleFormControlSelect1" name="role" required>
             <option  required> Veuillez selectionner</option>          
<option value="1" >Administrateur </option>
<option value="2" >Manager </option>
<option value="3" >Utilisateur </option>


</select>




</div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Valider</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>


 <div class="col-md-2">

      </div>


            </div>
            <!-- /.row -->
        </div>



@endsection