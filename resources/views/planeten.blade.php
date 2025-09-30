<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeten</title>
</head>
<body>
    <h1>Planeten</h1>

    @if(count($planeten) > 0)
        <ul>
            @foreach($planeten as $planeet)
            <li>
                <h2>{{ $planeet['name']}}</h2>
                <p>{{ $planeet['description']}}</p>
            </li>
            @endforeach
        </ul>
    @else
        <p>Geen planeet gevonden.</p>
    @endif
</body>
</html>
 