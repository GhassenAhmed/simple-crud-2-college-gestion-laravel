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
    <title>Departement</title>
</head>
<style>
   
    body{
        background-color: #ECF9FF;
    }
    a.navbar-brand{
        color: #3F0071;
        font-size: 30px;
        font-family:Roboto Slab;
        font-weight:bold;
    }
    a.nav-link{
        color:#3F0071;
        font-size: 25px;
        margin-left: 30px;
        font-family:Roboto Slab;
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
                      <a class="nav-link active" href="{{url('indexDepartement')}}">Departement</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('indexEtudiants')}}">Etudiants</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('indexEnseignants')}}">Enseignants</a>
                    </li>
                  </ul>
              </div>
            </div>
          </nav>
    
          <div class="container">
            
          </div>
    
</body>
</html>
