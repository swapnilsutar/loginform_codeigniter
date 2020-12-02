<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url()?>/public/admin.css">
    <title>Admin</title> 
    
</head>
<body>
<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Error Technologies</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('Home/index');?>"> New Registration <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Home/admin');?>">Admin</a>
            </li>
            
        </ul>
    </div>
</nav>
</div>

    
    <div class="container">
        <br>
        <h1 class="text-center">Admin Panal</h1>

        <div class="upload">
     
        <br><br><br>

        <form method="post"  action="<?php echo base_url();?>/csv_import/load_data" enctype="multipart/form-data">
        <div class="form-group">
            <label>Select CSV File</label>
            <input type="file" name="csv_file" required accept=".csv" />
        </div>
        <br />
        <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
        </form>
        <br />
        <div id="imported_csv_data"></div>

        </div>

        
  <div id="imported_csv_data"></div>
    </div>


</body>
</html>