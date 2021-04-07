<!-- GAMMAL LOOP FÖR ATT VISA ALLA TASKS.
SKULLE KUNNA VISAS PÅ DEN GRÖNA RUTAN I DASHBOARD MED ENS EGNA DATA?
(är inte extended i någon annan fil just nu) -->

@section('tasks')
<ul>
    @foreach($user->tasks as $task)
    <li>
    @if ($task->completed)
        <s>{{ $task->description }} </s>
        @else
        @else
        <form action="tasks/{{ $task->id }}/complete" method="post">
            @csrf
            @method('patch')
            {{ $task->description }}
            <button type="submit">Complete</button>
        </form>
        @endif
    </li>
    @endforeach
</ul>
@endsection
