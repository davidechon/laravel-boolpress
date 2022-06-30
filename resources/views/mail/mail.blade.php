<h1> Ciao</h1>
<p>Qualcuno ha commentato il tuo post : {{$post->title}}</p>
<a href="{{route('admin.posts.show', $post->id)}}">clicca qui per visionarlo</a>
