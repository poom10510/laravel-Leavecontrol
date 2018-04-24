
<html>
   <head>
      <title>View admin Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
   <h2>User</h2>
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
            <td><a href = 'userinfos/delete/{{ $user->id }}'>Delete</a></td>
            <td><a href = 'userinfos/update/{{ $user->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
      <h2>Tasks</h2>
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
      <h2>Roles</h2>
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
      <h2>Leaves</h2>
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
      <h2>Leave History</h2>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Task</td>
            <td>Userid</td>
            <td>Status</td>
            <td>Type</td>
            <td>Approver</td>
            
            <td>Delete</td>
            <td>Edit</td>
         </tr>
         @foreach ($leavehistories as $item)
         <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->task_id }}</td>
            <td>{{ $item->user_id }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->type_id }}</td>
            <td>{{ $item->approver_id }}</td>
            <td><a href = '/leavehistory/delete/{{ $item->id }}'>Delete</a></td>
            <td><a href = '/leavehistory/update/{{ $item->id }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
      <h2>Login info</h2>
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
