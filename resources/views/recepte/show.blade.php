@extends('layouts.app')

@section('template_title')
    {{ $recepte->name ?? 'Show Recepte' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Recepte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('receptes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Titol:</strong>
                            {{ $recepte->titol }}
                        </div>
                        <div class="form-group">
                            <strong>Temps Cocció:</strong>
                            {{ $recepte->temps_cocció }}
                        </div>
                        <div class="form-group">
                            <strong>Fotografia:</strong>
                            <img src="{{ $recepte->fotografia }}" width="100px" alt="img">
                        </div>
                        <div class="form-group">
                            <strong>Ingredients:</strong>
                            {{ $recepte->ingredients }}
                        </div>
                        <div class="form-group">
                            <strong>Passos:</strong>
                            {{ $recepte->passos }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $recepte->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
