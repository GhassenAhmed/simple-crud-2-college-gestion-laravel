<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
     crossorigin="anonymous"></script>
    <title>Enseignants</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        
    }
    body{
        background-color: #FAFAFA;
    }
    a.navbar-brand{
        color: #2c2F36;
        font-size: 30px;
        font-family:Roboto Slab;
        font-weight:bold;
    }
    a.nav-link{
        color:#2c2F36;
        font-size: 25px;
        margin-left: 30px;
        font-family:Roboto Slab;
    }
    
    h3{
      color: #FF0000;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
    }
    
</style>
<body>
    
       
    
          <div class="container mt-5">
            <h3 class="py-4">Departements</h3>
            <a href="" class="btn btn-outline-success float-end">Add</a>
            <table class="table ">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Created</th>
                      <th scope="col">Updated</th>
                      <th scope="col">Operation</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($departements as $depart)
                    <tr>
                        <th scope="row">{{$depart->id}}</th>
                        <td>{{$depart->nom}}</td>
                        <td>{{$depart->created_at}}</td>
                        <td>{{$depart->updated_at}}</td>
                        <td>
                          <a href="" class="btn btn-outline-info">Show</a>
                          <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
              </table>


              
          </div>
    
</body>
</html>
