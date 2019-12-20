<html>
 <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>

 <body>
    <div class="container">
            <form method="post" id="add_details">
                <div class="form-group">
                    <label>username</label>
                <input type="text" name="username" class="form-control" required />
                </div>
                <div class="form-group">
                    <input type="submit" name="add" id="add" class="btn btn-success" value="Add" />
                </div>
            </form>
            <br>

    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>username</th>
        </tr>
    </thead>
    <tbody id="table_data">
    <?php
        foreach($users as $user)
        {
            echo '<tr><td>'.$user["username"].'</td><tr>';
        }
    ?>
    </tbody>
   </table>
  </div>
  <script src=""></script>
 </body>
</html>

<script>
$(document).ready(function()
{

    $('#add_details').on('submit', function(event)
        {
            event.preventDefault();
                $.ajax({
                            url:"<?php echo base_url(); ?>users/insert",
                            method:"POST",
                            data:$(this).serialize(),
                            dataType:"json",
                            beforeSend:function()
                            {
                                $('#add').attr('disabled');
                            },
                            success:function(data)
                            {
                                $('#add').attr('disabled', false);
                                if(data.username)
                                {
                                    var html = '<tr>';
                                    html += '<td>'+data.username+'</td></tr>';
                                    $('#table_data').prepend(html);
                                    $('#add_details')[0].reset();
                                }
                            }
                        })
        });
 
});
</script>