<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holidays Packs</title>
</head>
<body>

    <ul>
        @foreach ($packs as $pack)
            <li><strong>{{$pack->title}}</strong></li>
            <li>{{$pack->address}}, {{$pack->city}} ({{$pack->postal_code}}) - {{$pack->country}}</li>
            <li>Per quante persone: {{$pack->person}}</li>
            <li>Per quante notti: {{$pack->nights}}</li>
            <li>Validità: {{$pack->validity_time}} mesi</li>
            <li>Prezzo: {{$pack->validity_time}}$</li><br>
        @endforeach
    </ul>
    
</body>
</html>