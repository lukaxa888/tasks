<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <h1>TASKS</h1>
        <section><form action="/create" method="post">
        @csrf
            <h3>New Task</h3>
            <input type="text" name="nombre">
            <input type="submit" value="+ Add Task">
    <select>
        <option value =""> Select the User </option>
        @forelse ()
            <option value='{{}}'> {{}}</option>
        @endforelse
    
    </select>
     </form>
     <a href="/inicio" class="button">aaaaa</a></section>
        
     @forelse ($allTasks as $task)
   <form action="/delete/{{$task->id}}" method="post">
    @csrf
    @method('DELETE')
  

    Task: {{$task->name}} <input type="submit" value="hola">

   </form>
    @empty
    <p> No tasks </p>
    @endforelse
</body>
</html>
