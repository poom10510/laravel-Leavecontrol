
<html>
   <head>
      <title>View admin Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
      <h2>Tasks</h2>
      <a href = '/tasks/insert'>Add</a>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Userid</td>
            <td>Responsibility</td>
            <td>Period</td>
            <td>Substituteid</td>
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($tasks as $item)
         <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->user_id }}</td>
            <td>{{ $item->responsibility }}</td>
            <td>{{ $item->period }}</td>
            <td>{{ $item->substitute_id }}</td>
            <td><a href = '/tasks/delete/{{ $item->id }}'>Delete</a></td>
            <td><a href = '/tasks/update/{{ $item->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>


   
   </body>
</html>
