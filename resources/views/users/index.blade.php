
<html>
   <head>
      <title>View Student Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
   <a href = '/userinfos/insert'>Add</a>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surename</td>
            <td>Address</td>
            <td>Email</td>
            <td>role</td>
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surename }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role_id }}</td>
            <td><a href = '/userinfos/delete/{{ $user->id }}'>Delete</a></td>
            <td><a href = '/userinfos/update/{{ $user->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>
