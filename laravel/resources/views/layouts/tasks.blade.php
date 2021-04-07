@section('add-task')
<form action="tasks" method="post">
    @csrf
    <label for="description">Task</label>
    <input name="description" id="description" type="text" />
    <button type="submit">Create Task</button>
</form>
@endsection

@section('tasks')
<ul>
    @foreach($user->tasks as $task)
    <li>
    </li>
    @endforeach
</ul>
@endsection
