@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($events as $event)
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ $event->name }}</div>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $event->user ? $event->user->name : 'senza autore' }}
                    </h6>

                    <div class="card-body">
                        <ul>

                            @foreach($event->locations as $location)
                            <li>

                                {{ $location->city_name }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection