
<html>
   <head>
      <title>View admin Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
   <h2>Roles</h2>
   <a href = '/roletype/insert'>Add</a>

      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($roles as $item)
         <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td><a href = '/roletype/delete/{{ $item->id }}'>Delete</a></td>
            <td><a href = '/roletype/update/{{ $item->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>


   
   </body>
</html>
