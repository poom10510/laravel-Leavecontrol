
<h1 class="page-title">Edit a Article</h1>
<table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
         </tr>
         <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->name }}</td>
            <td>{{ $article->address }}</td>
         </tr>
      </table>
{!! Form::model($article, ['method' => 'POST',
'action' => ['Person_controller@edit', $article->id]]) !!}
@include('person.form', ['submitButtonText' => 'Edit Article'])
{!! Form::close() !!}

