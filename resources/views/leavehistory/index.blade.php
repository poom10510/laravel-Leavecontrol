
<html>
   <head>
      <title>View admin Records</title>
      {!! Html::style('css/app.css') !!}
   </head>
   
   <body>
   <h2>Leave History</h2>
   <a href = '/leavehistory/insert'>Add</a>
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


   
   </body>
</html>
