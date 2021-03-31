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


        @section('main')

        @endsection





</body>

</html>



