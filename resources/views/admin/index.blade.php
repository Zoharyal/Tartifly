<h2>Recherche</h2>
<form method="POST" action="{{ route('search')}}">
 @csrf
<input type="text" name="search">
<input type="submit" value="Submit">
</form>

