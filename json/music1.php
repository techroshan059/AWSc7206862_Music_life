<!DOCTYPE html>
<html>
<body>

<h2>Get data as JSON from a PHP file on the server.</h2>

<p>The JSON received from the PHP file:</p>

<p id="demo"></p>

<script>
var obj, dbParam, xmlhttp;
obj = { "table":"films", "limit":5 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
    }
};
xmlhttp.open("GET", "json_db?x=" + dbParam, true);
xmlhttp.send();

</script>

</body>
</html>