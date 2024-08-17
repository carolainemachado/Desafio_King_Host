@extends('layouts.app')

@section('content')
    <h1>Lista de Usuários</h1>
    
    @if(!empty($usersByState))
        @foreach ($usersByState as $state => $stateUsers)
            <div class="state-group">
                <h2>{{ $state }}</h2>
                <ul>
                    @foreach ($stateUsers as $user)
                        <li class="user">
                            {{ $user['fullName'] }} ({{ $user['username'] }})
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @else
        <p>Não há usuários disponíveis.</p>
    @endif
@endsection
