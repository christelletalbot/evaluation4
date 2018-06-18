@extends('layouts.default')
@section('content')
	 <form action="{{ url('hotels') }}" method="POST">
        {{ csrf_field() }}
        <p class="customer">Information client</p>
        <label for="lastname">Votre nom : </label><input type="text" name="lastname" id="lastname">
        <label for="firstname">Votre prénom : </label><input type="text" name="firstname" id="firstname">
        <label for="address">Votre adresse : </label><input type="text" name="address" id="address">
        <label for="phone">Votre téléphone : </label><input type="number" name="phone" id="phone">
        <label class="arrival_date">Date d'arrivée : </label><input type="date" name="arrival" id="arrival">
        <label class="departure_date">Date de départ : </label><input type="date" name="departure" id="departure">
        <label class="room">Nom de la chambre : </label><p>{{ $hotels->name}}</p>

        
        <input type="submit" value="Envoyer !">
    </form>
@endsection	