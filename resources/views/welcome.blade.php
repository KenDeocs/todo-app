<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo App</title>

   <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
      
<section class="main d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
<div class="card-header">
    <h1 class="display-6">Todo's</h1>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <form action="" method="POST">
        @csrf
            <div class="input-group">
                
                  
                <input type="text" name="" class="form-control" id="" placeholder="Task">
                <button class="btn btn-primary">Add</button>

            </div>
            </form>
        </div>
        <div class="col-md-12 mt-3">
            <table class="table table-bordered">
                <thead>
                <tr>
        <th>Task</th>
        <th>Action</th>
    </tr>
                </thead>
<tbody>
    <tr>
        <td></td>
        <td></td>
    </tr>
</tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer">&copy; todo's app</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
