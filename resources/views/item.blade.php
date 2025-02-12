@extends('itemTemplate')

<a href="{{ url('/items/create') }}" class="btn btn-primary">Add New Item</a>
<ul>

@foreach($items as $item)
    <li>{{ $item->name }} - {{ $item->description }} <a href="{{ route('items.show', $item->id) }}">View Item</a>;</li>
@endforeach

</ul>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


