<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mysql REST API CRUD</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <br />
        <h3 class="center">PHP Mysql REST API CRUD</h3>
        <br />

        <div class="right" style="margin-bottom: 5px">
        </div>
        <div class="table-responsive">
            <div class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </div>
        </div>
        
    </div>

    
</body>
</html>
<script type="text/javascript">
    $(document).ready(function()
    {
        fetch_data();
        function fetch_data()
        {
            $.ajax({
                url:"fetch.php",
                success:function(data)
                {
                    $('tbody').html(data);
                }
            })
        }
    })
</script>