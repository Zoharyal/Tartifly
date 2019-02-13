<h2>Edition<h2>
@if(Session::has('message'))
  <p>{{Session::get('message')}}</p>
  @endif
<form method="POST" action="{{ route('edit', ['voyage'=>$voyage->id]) }}">
    @method("PUT")
    @csrf
  Libelle:<br>
  <input type="text" name="libelle" value="{{$voyage->libelle}}">
  <br>
  Localisation:<br>
  <input type="text" name="localisation" value="{{$voyage->localisation}}">
  <br>
  @if($errors->has('localisation'))
  <p>{{$errors->first('localisation')}}</p>
  @endif
  Description:<br>
  <input type="text" name="description" value="{{$voyage->description}}">
  <br>
  Date de debut:<br>
  <input type="text" name="date_debut" value="{{$voyage->date_debut}}">
  <br>
  Date de fin:<br>
  <input type="text" name="date_fin" value="{{$voyage->date_fin}}">
  <br>
  Cout:<br>
  <input type="text" name="cout" value="{{$voyage->cout}}">
  <br>
  Photo:<br>
  <input type="text" name="photo" value="{{$voyage->photo}}">
  <br>
  Disponibilite:<br>
  <input type="text" name="disponibilite" value="{{$voyage->disponibilite}}">
  <br><br>
  <input type="submit" value="Submit">
</form>