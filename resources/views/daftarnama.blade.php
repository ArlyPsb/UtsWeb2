<table border="1px" width="100%">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>TTL</th>
    <th>Alamat</th>
    <th>Agama</th>
    <th>Hobi</th>
</tr>
<tr>
    @foreach ($data as $p)
    <td>{{ $p -> id}}</td>
    <td>{{ $p -> Nama}}</td>
    <td>{{ $p -> TTL}}</td>
    <td>{{ $p -> Alamat}}</td>
    <td>{{ $p -> Agama}}</td>
    <td>{{ $p -> Hobi}}</td>
    @endforeach
</tr>
</table>