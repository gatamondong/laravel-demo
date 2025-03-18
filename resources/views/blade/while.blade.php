<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Directive Example</title>
</head>
<body>
    <ul>
        @while($counter <= $limit)
            <li>Iteration {{ $counter }}</li>
            @php $counter++ @endphp
        @endwhile
    </ul>

</body>
</html>
