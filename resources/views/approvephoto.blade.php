<form action="/approve/foto" method="post">
    @csrf
    @foreach($photos as $photo)
        {{$photo['caption']}}
        @foreach($photo['foto'] as $foto)
            <img src="/show/foto/{{$foto['nama_foto']}}">
            <input type="checkbox" name="check[]" value = "{{$foto['id']}} "id="">
        @endforeach
    @endforeach
    <input type="submit" value="approve">
</form>
