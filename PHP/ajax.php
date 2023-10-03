<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery AJAX</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">


        <h3 align="center">AJAX with jQuery</h3>
        <h4 align="center">Asynchronus Javascript And XML</h4>

        <button id="get-users">GET USERS</button>
        <table id="users-tbl" class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
        </table>


        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script src="./app-ajax.js?<?=uniqid();?>"></script>
    </div>
    
</body>
</html>