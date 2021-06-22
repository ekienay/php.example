<?php include 'function.php';?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/icon/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>php.example</title>
</head>

<body>
 <div class="container mt-4 text-center">
    <h1>Welcome to php.example page</h1>
    <h3>«List of projects»</h3>
   </div>

  <div class="row m-auto">
    <?php foreach ($list as $l){ ?>
      <div class="col-sm-3">
        <div class="card text-white bg-dark m-0 mt-5" style="max-width: 18rem;">
          <div class="card-body">
            <p>Project Name: <?php echo $l->project_name; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>