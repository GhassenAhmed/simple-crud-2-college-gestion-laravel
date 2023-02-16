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
    <title>Etudiants</title>
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
    
        <nav class="navbar navbar-expand-lg px-5 py-2">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">College</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{url('/')}}" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('indexDepartement')}}">Departement</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{url('indexEtudiants')}}">Etudiants</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('indexEnseignants')}}">Enseignants</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container mt-5">
            <h3 class="py-4 ">Etudiants</h3>
            <a href="{{url('/etudiant')}}" class="btn btn-outline-success float-end">Add</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cin</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Departement</th>
                  <th scope="col">Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($etudiants as $etud)
                <tr>
                  <th scope="row">{{$etud->id}}</th>
                  <td>{{$etud->cin}}</td>
                  <td>{{$etud->nom}}</td>
                  <td>{{$etud->prenom}}</td>
                  <td>{{$etud->Departement->nom}}</td>
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
