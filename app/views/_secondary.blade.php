@extends("_master");

@
<form method="PUT" action="lorem-impsum.php/{{{$path}}}">
<label for="number_paragraphs">Number of items </label><input type="number" name="path" value="5" min="4" max="100" id="number_paragraphs"/><br />
<input type="submit" name="sumbit" value="Fetch me mah passwurd!" />
</form>
