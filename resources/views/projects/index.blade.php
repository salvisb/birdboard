<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birdboard</title>
</head>
<body>
    <h1>Birdboard</h1>

    @foreach ($projects as $project)
        <h2>{{ $project->title }}</h2>
    @endforeach
</body>
</html>
