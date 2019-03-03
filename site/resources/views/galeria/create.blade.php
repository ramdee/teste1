@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
      <div class="alert alert-success">
        {{ \Session::get('success') }}
      </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cadastro</div>

                <div class="card-body">
                    <form method="post" action="{{ action('GaleriaItemController@store') }}">
                        @csrf
                        <div class="form-group">
                          <label>category</label>
                          <input type="text" class="form-control" name="category" aria-describedby="emailHelp" >
                          
                        </div>
                        <div class="form-group">
                          <label>image</label>
                          <input type="text" class="form-control" name="image" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div> <!--md-8-->
        
    </div>
</div>
@endsection
