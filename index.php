
<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "get_hint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Ajax Demo</b></p>
<form>
  <fieldset style="display: inline-block">
    <legend>Start typing a text in the input field below:</legend>
    Name: <input type="text" onkeyup="showHint(this.value)">
    <p>Suggestions:<br> <span id="txtHint"></span></p>
  </fieldset>
</form>

</body>
</html>
