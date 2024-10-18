<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    @if($tasks->isEmpty())
        <p>Nenhuma tarefa encontrada.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <strong>Título:</strong> {{ $task->titulo }}<br>
                    <strong>Estado:</strong> {{ $task->estado ? 'Concluída' : 'Pendente' }}<br>
                    <strong>Responsável:</strong> {{ $task->responsavel }}
                </li>
                <hr>
            @endforeach
        </ul>
    @endif
</body>
</html>
