<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarkvara sõnad</title>
    <script src="tarvaraState.js"></script>
</head>
<body>
<h1>Tarkvara sõnad</h1>
<input type="button" value="juhuslik sõna" onclick="randomSyna()">
<div id="random-syna"></div>
<label for="kontroll">Kirjuta vene keeles</label>
<input type="text" id="kontroll" oninput="kontroll()">
<div id="vastus"></div>
</body>
</html>
