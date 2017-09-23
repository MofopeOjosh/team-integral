<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Banks</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

    @if ($data['status'] == "success")
   <table class="table table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Fee</th>
                <th>status</th>
                <th>system_type</th>
                <th>source</th>
                <th>source_id</th>
                <th>dest</th>
                <th>dest_id</th>
                <th>ref</th>
                <th>flutterResponseMessage</th>
                <th>flutterReference</th>.
            </tr>
        </thead>
        <tbody>
            @foreach($data['data'] as $history)
            <tr>
                <td>
                {{$history['id']}}<br>
                </td>
                <td>
                {{$history['amount']}}<br>
                </td>
                <td>
                {{$history['fee']}}<br>
                </td>
                <td>
                {{$history['status']}}<br>
                </td>
                <td>
                {{$history['system_type']}}<br>
                </td>
                <td>
                {{$history['source']}}<br>
                </td>
                <td>
                {{$history['source_id']}}<br>
                </td>
                <td>
                {{$history['dest']}}<br>
                </td>
                <td>
                {{$history['dest_id']}}<br>
                </td>
                <td>
                {{$history['ref']}}<br>
                </td>
                <td>
                {{$history['flutterResponseMessage']}}<br>
                </td>
                <td>
                {{$history['flutterReference']}}<br>
                </td>


            </tr>
            @endforeach
            </tbody>
        </tbody>
    </table>
    @else
    <h3>Sorry there was an {{$data['status']}} when processing the request</h3>
    @endif

    </div>
</body>
</html>
