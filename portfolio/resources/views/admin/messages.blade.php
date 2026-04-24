<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
</head>
<body>

<h1>Messages reçus</h1>

@foreach($messages as $m)
<div style="background:#fff;padding:10px;margin:10px;">
<p><b>{{ $m->nom }}</b> - {{ $m->email }}</p>
<p>{{ $m->message }}</p>
</div>
@endforeach

</body>
</html>