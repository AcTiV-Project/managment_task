<!DOCTYPE html>
<html lang="en">
<head>
     @vite([
        'resources/css/app.css',
        'resources/js/register_task.js'
    ])

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASKS</title>
</head> 
<body>    
    <form action="" class="form_task " method="post">
        @csrf

        <label for="user_id">User id</label>
        <select name="user_id" id="user">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title" required>

        <label for="description">Description</label>
        <textarea name="description" rows="5" id="description"></textarea>

        <label for="state">State</label>
        <select name="state" id="state">
            <option value="pending">Pending</option>
            <option value="in_progress" selected>In_progress</option>
            <option value="completed">Completed</option>
        </select>

        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            <option value="low">Low</option>
            <option value="medium" selected>Medium</option>
            <option value="high">High</option>
        </select>

        <label for="due_date">Due Date</label>
        <input type="date" name="due_date" id="due_date">

        <input type="submit" value="CREATE TASK">

        <p class="msg"></p>

        <a href="{{ route('panel') }}">PANEL</a>
    </form>
</body>
</html>