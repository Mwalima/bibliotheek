<i class="unread"></i>
<img class="avatar" src="{{ asset('images/face2_80X80.png')}}" alt="avatar">
<p class="sender">{{$name}}</p>

<p class="message">
    <strong>{{$subject}}</strong>
    @foreach($message as $mess)
    {{$mess}}</p>
@endforeach
<div class="actions">
    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
</div>