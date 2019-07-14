<body>
<form action="/admin/approve" method="post">
@csrf
@if(count($photos[0])!=0)
    @foreach($photos as $photo)
    {{$photo['caption']}}
    @foreach($photo['foto'] as $foto)
    <img src="/show/foto/{{$foto['nama_foto']}}">
    <input type="checkbox" name="check[]" value="{{$foto['id']}} " id="">
    @endforeach
    @endforeach
@endif
@if(count($videos[0])!=0)
    @csrf
    @foreach($videos as $video)
        {{$video['caption']}}
        @foreach($video['video'] as $vid)
            <iframe width="640" height="390" src="http://www.youtube.com/embed/{{$vid->video_id}}?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
            <input type="checkbox" name="checkvideo[]" value="{{$vid['id']}}">
        @endforeach
    @endforeach
    <button type="submit" value="approve" name="status">approve</button>
    <button type="submit" value="delete" name="status">delete</button>

</form>
</body>
@endif
