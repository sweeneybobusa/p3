<form method="GET" action="index.php">

<h2><?php echo($final_password) ?></h2>
<h3>Optshnal:</h3>
<label for="word_count_1">Number of wurds for yur passwurd: </label><input type="number" name="word_count" value="5" min="4" max="10" id="word_count_1"/><br />
<label for="max_length">Whatcha figuring fur yur maximum length? </label><input type="number" name="maximum_length" value="10" min="6" maxlength="100" id="max_length" /><br />
Want any high-fallutin' North'rner karters fer sep'raters?&nbsp;&nbsp;<label for="saparators_yes">Yes</label>&nbsp;<input type="radio" name="separators" value="yes" id="saparators_yes"/>&nbsp;&nbsp;<label for="saparators_no">No</label>&nbsp;<input checked="checked" type="radio" name="separators" value="no" id="saparators_no"/><br />
<input type="submit" name="sumbit" value="Fetch me mah passwurd!" />
</form>
