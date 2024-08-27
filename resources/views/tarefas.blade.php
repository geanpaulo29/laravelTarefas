<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Lista de Tarefas</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Criado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->nome }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>{{ $tarefa->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
