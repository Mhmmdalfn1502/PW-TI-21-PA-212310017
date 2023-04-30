<html>

<style>
    .table {
        border-collapse: collapse;
    }
    th {
        border: 1px solid black;
        padding: 5px
    }
  
</style>

    <head>
        <body>
        <table class="table">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>ALAMAT</th>
    </tr>
@foreach($data as $d)
    <tr>
        <th>{{ $d['id'] }}</th>
        <th>{{ $d['npm'] }}</th>
        <th>{{ $d['name'] }}</th>
        <th>{{ $d['gender'] }}</th>
        <th>{{ $d['alamat'] }}</th>
    </tr>
@endforeach
</table>
        </body>
    </head>
</html>
