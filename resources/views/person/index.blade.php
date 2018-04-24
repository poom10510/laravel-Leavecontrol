
<html>
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
   <a href = 'insert'>Add</a>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
            <td><a href = 'update/{{ $user->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>
