
<html>
   <head>
      <title>View admin Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
   <h2>Login info</h2>
   <a href = '/userslogin/insert'>Add</a>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Userid</td>
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($logins as $item)
         <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->user_id }}</td>
            <td><a href = '/userslogin/delete/{{ $item->id }}'>Delete</a></td>
            <td><a href = '/userslogin/update/{{ $item->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>


   
   </body>
</html>
