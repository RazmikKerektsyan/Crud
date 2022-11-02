
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>join</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br />
    <h1 class="text-center text-primary">join</h1>
    <br />
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>qtr</th>
                <th>order_data_time</th>
                <th>product_id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->product_id }}</td>
                    <td>{{ $row->qtr }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
