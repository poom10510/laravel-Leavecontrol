
<html>
   <head>
      <title>View admin Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
   <h2>Roles</h2>
   <a href = '/leavetype/insert'>Add</a>

      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($leaves as $item)
         <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td><a href = '/leavetype/delete/{{ $item->id }}'>Delete</a></td>
            <td><a href = '/leavetype/update/{{ $item->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>


   
   </body>
</html>
