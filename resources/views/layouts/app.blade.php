<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        .state-group { margin-bottom: 20px; }
        .user { margin-bottom: 5px; }
    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>
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
</body>
</html>
