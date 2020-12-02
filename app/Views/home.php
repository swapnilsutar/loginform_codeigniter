<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/public/style.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Error Technologies</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Home/index');?>"> New Registration <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Home/admin');?>">Admin</a>
            </li>

            </ul>
        </div>
    </nav>

        


    <div class="box col-lg-4">
       
                <div class="card-title">
                    <h2>SIGN UP</h2>

                

                </div>

                <form  action="<?php echo site_url('Home/insert');?>" method="post" >

                    <input type="text" class="form-control" placeholder="Full Name" name="full_name"  minlength="2" required>
                    
                    <input class="form-control" type="email" name="email" placeholder="Email" required/>

                    <input class="form-control" type="password" name="password" placeholder="Password (6 or more characters)" minlength="6" maxlength="10" />
                  

                    <input class="btn btn-warning btn-block" type="submit" name="submit" value="LOGIN" />
                    <br>
                    <a href="#" id="signup" style="float:right">
                    Have an account? Sign In
                    </a>
                </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>