@foreach ($data as $p)
<form method="post" action="savecreate">
{{ csrf_field() }}
<input type="text" name="xNama" size="50" value="{{ $p ->nama}}" placeholder="input Nama"/>
<input type="text" name="xTTL" size="50" value="{{ $p ->ttl}}" placeholder="input TTL"/>
<input type="text" name="xAlamat" size="50" value="{{ $p ->nama}}" placeholder="input Alamat"/>
<input type="text" name="xAgama" size="50" value="{{ $p ->nama}}" placeholder="input Agama"/>
<input type="text" name="xHobi" size="50" value="{{ $p ->nama}}" placeholder="input Hobi"/>
<input type="submit" name="save" value="Save"/>
</form>
@endforeach