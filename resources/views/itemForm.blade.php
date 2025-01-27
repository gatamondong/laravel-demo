<html>
    @if(isset($id))
    <form method="POST" action="/items/{{ $id }}">
        @method('PUT')
    @else
    <form method="POST" action="/items">
    @endif

        @csrf

        @if(isset($id))
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="text" name="name" value="{{ $name }}" required>
        <input type="text" name="description" value="{{ $description }}" required>
        @else
        <input type="text" name="name" required>
        <input type="text" name="description" required>
        @endif
        
        <input type="submit" value="Submit">
    </form>
</html>
