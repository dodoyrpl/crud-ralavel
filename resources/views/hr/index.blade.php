<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Integrated Production System</title>

    <style type="text/css">
    .modal-admin{
        width:80%;
        margin-left:auto;
    }
    </style>
  </head>
  <body>

  <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gajah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/employe/create" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="first_name" placeholder="First Name">
                </div>
            </div>
        
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>  
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <h2>Data ditampilkan disini </h2>
       
      </div>
      <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>  
    </div>
  </div>
</div>

    <div class="container-fluid">
    
    <div class="row">
        <div class="col-12">
        <h2>Employes Data List</h2>
        </div>
    </div>
    <table class="table table-sm table-hover">
    <caption>List of employes</caption>
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Hire Date</th>
        <th scope="col">Job</th>
        <th scope="col">Salary</th>
        <th scope="col">Manager</th>
        <th scope="col">Department</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_employe as $db)
        <tr>
        <th scope="row">{{$db->id}}</th>
        <td>{{$db->first_name}}</td>
        <td>{{$db->last_name}}</td>
        <td>{{$db->email}}</td>
        <td>{{$db->phone_number}}</td>
        <td>{{$db->hire_date}}</td>
        <td>{{$db->job_id}}</td>
        <td>{{$db->salary}}</td>
        <td>{{$db->manager_id}}</td>
        <td>{{$db->department_id}}</td>
        <td><a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#UpdateModal">Edit</a> | <a href="/employe/{{$db->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DelModal">Delete</a> </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>