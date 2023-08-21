<script language="JavaScript">
	function selectAll(source) {
		checkboxes = document.getElementsByName('colors[]');
		for(var i in checkboxes)
			checkboxes[i].checked = source.checked;
	}
</script>

<input type="checkbox" id="selectall" onClick="selectAll(this)" />Select All
<ul>
	<li><input type="checkbox" name="colors[]" value="red" />Red</li>
	<li><input type="checkbox" name="colors[]" value="blue" />Blue</li>
	<li><input type="checkbox" name="colors[]" value="green" />Green</li>
	<li><input type="checkbox" name="colors[]" value="black" />Black</li>
</ul>