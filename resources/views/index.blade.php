<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List</title>
</head>
<body>
    <h3>To-Do List</h3>
    <form action="{{route('store')}}" method="post" autocomplete="off">
    @csrf
        <input type="text" name="content" placeholder="Add your to-do">
        <button type="submit">Add</button><br><br>
    </form>
    @if (count($todolists))
        @foreach ($todolists as $todo)

                <form action="{{route('destroy', $todo->id) }}" method="POST">
                @csrf
                {{$todo -> content}}
                @method('delete')
                <button type="submit">delete</button><br><br>
                </form>

        @endforeach

    @endif
</body>
</html>
