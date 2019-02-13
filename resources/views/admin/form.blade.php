<h2>Creation<h2>

<form method="POST" action="{{ route('store')}}">
    @csrf
  Libelle:<br>
  <input type="text" name="libelle">
  <br>
  Localisation:<br>
  <input type="text" name="localisation">
  <br>
  Description:<br>
  <input type="text" name="description">
  <br>
  Date de debut:<br>
  <input type="text" name="date_debut">
  <br>
  Date de fin:<br>
  <input type="text" name="date_fin">
  <br>
  Cout:<br>
  <input type="text" name="cout">
  <br>
  Photo:<br>
  <input type="text" name="photo">
  <br>
  Disponibilite:<br>
  <input type="text" name="disponibilite">
  <br><br>
  <input type="submit" value="Submit">
</form>