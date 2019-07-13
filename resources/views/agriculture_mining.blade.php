<!-- gambar -->
@foreach($photos as $photo)
{{$photo->caption}}
<img src="/show/foto/{{$photo->nama_foto}}">
@endforeach
<!-- video -->
@foreach($videos as $video)
{{$video->caption}}
<iframe width="640" height="390" src="http://www.youtube.com/embed/{{$video->video_id}}" frameborder="0" allowfullscreen></iframe>
@endforeach
