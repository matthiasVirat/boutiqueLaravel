@extends('master')

@section('title')
    Formulaire création d'utilisateur
@endsection

@section('content')
{{--    @dd($userComplet)--}}
    @php($user = $userComplet[0])
    @php($customer = $userComplet[1])
    @php($adress = $userComplet[2])

    <h1>Formulaire</h1>
    <form method="post" class="form-prd" action={{route('userUpdating', $user->id)}}>
        @csrf
        <h3 class="entry">User</h3>
        <div class="entry">
            <label for="last_name">votre pseudo : </label>
            <input type="text" id="name" name="name" value="{{$user->name}}"/><br/>
        </div><br/>

        <h3 class="entry">Client :</h3>
        <div class="entry">
            <label for="last_name">votre nom : </label>
            <input type="text" id="last_name" name="last_name" value="{{$customer->last_name}}"/><br/>
        </div>
        <div class="entry">
            <label for="first_name">votre prenom : </label>
            <input type="text" id="first_name" name="first_name" value="{{$customer->first_name}}"/><br/>
        </div><br/>

        <h3 class="entry">Adresse</h3>

        <div class="entry">
            <label for="num_street">numéro : </label>
            <input type="text" id="num_street" name="num_street" value="{{$adress->num_street}}"/><br/>
        </div>
        <div class="entry">
            <label for="street">rue : </label>
            <input type="text" id="street" name="street" value="{{$adress->street}}"/><br/>
        </div>
        <div class="entry">
            <label for="comp">complement : </label>
            <input type="text" id="comp" name="comp" value="{{$adress->comp}}"/><br/>
        </div>
        <div class="entry">
            <label for="zip_code">code postal : </label>
            <input type="text" id="zip_code" name="zip_code"value="{{$adress->zip_code}}"/><br/>
        </div>
        <div class="entry">
            <label for="city">ville : </label>
            <input type="text" id="city" name="city" value="{{$adress->city}}"/><br/>
        </div>
        <div class="entry">
            <label for="country">Pays : </label>
            <input type="text" id="country" name="country" {{$adress->country}}/><br/>
        </div>

        <button type="submit" name="user_id" value="{{$user->id}}" class="btn btn-primary entry">Mettre à jour</button>

    </form>


@endsection