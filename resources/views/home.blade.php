@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    

                    <form method="post" action="{{ route('msj.store') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="job_title">mensaje:</label>
                            <input type="text" class="form-control" name="msj"/>
                        </div>                         
                        <button type="submit" class="btn btn-primary-outline">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
