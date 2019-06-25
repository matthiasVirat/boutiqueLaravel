@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mon compte </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            <div>

                            </div>
                        @endif
                        <p>
                            Bonjour , {{$info->Customer->last_name}}<br>
                            Votre email: {{$info->email}} <a href="{{route('email')}}">Modifier</a><br>
                            vous êtes inscrit depuis le {{$info->created_at}}<br>
                            vos adresses de livraison sont :<br>
                            <ul>
                                @foreach($info->customer->adress as $adresse)
                                    <li>{{ $adresse->first_name }} {{ $adresse->last_name }} <a href="{{ route('detailsAdresse',$adresse->id) }}">détails</a></li>
                                @endforeach
                            </ul>

                            Statut: {{$info->qualité}}
                        </p>
                        <div>

                        </div>
                        <div></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
