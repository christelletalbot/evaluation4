@extends('layouts.default')
@section('content')
	<div class="container">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title"><p>Nom de la chambre : {{ $hotels->name }}</p></h5>
				<div class="floor"><p>Etage : {{ $hotels->floor }}</p></div>
				<div class="bed"><p> Type de lit : {{ $hotels->bed_type_id }}</p></div>
				<div class="bath"><p> Type de salle de bain : {{ $hotels->bathroom_type_id }}</p></div>
				<div class="view"><p> Vue : {{ $hotels->view_id }}</p></div>
				<div class="standard"><p> Standard ou Suite :{{ $hotels->is_suite }}</p></div>
				<div class="price"><p> Prix : {{ $hotels->price }}</p></div>
				<div class="pmr"><p> Accessibilité : {{ $hotels->reduced_mobility_access }}</p></div>
				<div class="area"><p>Numéro : {{ $hotels->area }}</p></div>
				<div class="created"><p> Créée le : {{ $hotels->created_at }}</p></div>
				<div class="update_at"><p> Dernière mise à jour : {{ $hotels->updated_at}}</p></div>
				<a href="/room/{{ $hotels->id }}" class="col mt-2 mb-2" target="blank"><input type="button" value="Réservation"></a>
			</div>	
		</div>
	</div>
@endsection	