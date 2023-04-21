<html>
    <head>
        <body>
        <table class="table">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>NAMA</th>
        <th>GENDER</th>
    </tr>
@foreach($data as $d)
    <tr>
        <th>{{ $d['id'] }}</th>
        <th>{{ $d['npm'] }}</th>
        <th>{{ $d['name'] }}</th>
        <th>{{ $d['gender'] }}</th>
    </tr>
@endforeach
</table>
        </body>
    </head>
</html>

