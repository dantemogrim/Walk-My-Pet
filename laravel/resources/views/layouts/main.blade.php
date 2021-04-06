<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/app.css">
        <title>{{ $title ?? 'Walk my Pet' }}</title>
    </head>

    <body class="body-test">
        <header>
            <p>WALK MY PET </p>
            {{-- <button>Logga ut</button> --}}

        </header>

        <h1>This is the main page!</h1>
        <p>Hello, {{ $user->name }}! Do you want to <a href="logout"><button>logout</button></a></p>

        <form action="tasks" method="post">
            @csrf
            <label for="description">Task</label>
            <input name="description" id="description" type="text" />
            <button type="submit">Create Task</button>
        </form>

        <ul>
            @foreach($user->tasks as $task)
            <li>
                @if ($task->completed)
                <s>{{ $task->description }} </s>
                <!--Commented out an else here-->
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







        @section('main')

        @endsection





</body>

</html>



