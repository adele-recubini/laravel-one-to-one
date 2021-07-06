@extends('tasks.template.base')

@section('title', 'indice')

@section('content')

<table class="table table-sm table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->detail->dettagli }}</td>
            </tr>
        @endforeach

    </tbody>
 </table>
@endsection

