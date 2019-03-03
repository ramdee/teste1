@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                @if(isset($carros) && count($carros)>0)
        
                {{-- @foreach ($variavel as $item) --}}
                {{-- @foreach ($variavel as $key => $item) --}}
                @foreach ($carros as $index => $img)
                    
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">Lojas de Carros{{$index}}</div>
                        
                        <div class="card-body">
                            <h1></h1>
                            <img src="{{$img}}" alt="" class="img-fluid">
                            <a href="{{$img}}" class="card-link">imagens originais</a>
                        </div>
                    </div>
                </div> <!--md-8-->
                
                @endforeach
                
                
                @else
                nada
                @endif
            </div>
</div>
@endsection
