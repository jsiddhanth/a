<html>
 <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
 </head>

<body>

<div class="container">
<div class="card">
    <?php echo validation_errors(); ?>

    <form action="<?php echo base_url(); ?>users/insert" method="post">
    <div class="card-header text-center">
    </div>
    <div class="card-body">
        <div class="card-text">
            <div class="form-group">
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" required autofocus>
            </div>
        </div>
        <button type="submit" class="btn btn-info">login</button>
    </div>
    </form>
</div>

</div>
 
</body>

</html>
