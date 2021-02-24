<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Excel Treatments</title>  
</head>
  
  
  <body>
    
    <h1>Traitements sur fichiers Excel Marcol</h1>


    <h3>Importer</h3>

    <p>
        Sélectionnez un fichier Excel(.xlsx) pour importer les données dans la table "clients".
        <strong>Les colonnes: name, email, phone, adress</strong>
    </p>

     <form method="post" action="{{ route('excel.import') }}" enctype="multipart/form-data">
        
         {{ csrf_field() }}

        <div class="mb-3">
            <label for="fichier" class="form-label">Choisir le fichier</label>
            <input class="form-control" type="file" name="fichier">
        </div>
        
        <button type="submit" class="btn btn-primary">Importer</button>
    </form>

    <br />
    <br />

    <h3>Exporter</h3>

    <p>
        Exporter toutes les données vers un fichier Excel. 
    </p>

     <form method="post" action="{{ route('excel.export') }}">
        
         {{ csrf_field() }}

         <div class="mb-3">
            <label for="name" class="form-label">Nom du fichier</label>
            <input type="text" class="form-control" name="name" placeholder="Nom du fichier">
         </div>

         <div class="mb-3">
            <label for="extension">Extension</label>
            <select class="form-control" aria-label="Default select example" name="extension">
              <option value="xlsx">.xlsx</option>
              <option value="csv">.csv</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Exporter</button>
    </form>

    <br />
    <br />

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Adress</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($clients as $client )
                  <tr>
                      <td>{{ $client->name }}</td>
                      <td>{{ $client->email }}</td>
                      <td>{{ $client->phone }}</td>
                      <td>{{ $client->adress }}</td>
                  </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    
    








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>