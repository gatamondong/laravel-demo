<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Show Item</h1>
        <a href="{{ route('items.edit', $id) }}">Edit Item</a>
        <ul>
        
            <li>{{ $name }} - {{ $description }}</li>
        </ul>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>