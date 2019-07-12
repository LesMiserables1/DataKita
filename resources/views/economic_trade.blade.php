@foreach($photos as $photo)
{{$photo->caption}}
<img src="/show/foto/{{$photo->nama_foto}}">
@endforeach