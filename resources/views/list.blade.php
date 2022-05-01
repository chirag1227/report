<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Project lists</title>
</head>
<body>
    <div class="table-responsive">

<table class ="reg register"  border="1px" style="margin-left:auto;margin-right:auto; width:1000px; height:50px">
    <tr>
        <th colspan="6"><h1>Project submitted</h1></th>
</tr>
<tr>

    <th>Members</th>
    <th>Topic</th>
    <th>Project summary</th>
    <th>Uploaded project</th>
    <th> github URL</th>

</tr>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data['Members'] }}</td>
        <td>{{ $data['Topic'] }}</td>
        <td>{{ $data['Title'] }}</td>
        <td><a href="{{ asset('upload/'.$data['word']) }}">pdf</a></td>
        <td>{{ $data['url'] }}</td>

    </tr>
    @endforeach


</table>
</div>
</body>
</html>
