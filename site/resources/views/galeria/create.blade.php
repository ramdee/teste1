@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cadastro</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">category</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">image</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div> <!--md-8-->
        
    </div>
</div>
@endsection
