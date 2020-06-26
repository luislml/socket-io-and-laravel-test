@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">mensajes</div>

                <div class="card-body">
                    <div>
                        @foreach($contacts as $contact)
                        <div class="alert alert-danger" role="alert">
                            
                            {{$contact->msj}}
                        </div>
                        @endforeach
                    </div>
                    <div id="msj"></div>
                </div>
                
            </div>
        </div>
    </div>
   
</div>

@endsection


