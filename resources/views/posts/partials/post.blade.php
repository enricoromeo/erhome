<h4><small>RECENT POSTS</small></h4>
<hr>
<h2>
  <a href="/erhome/public/posts/{{ $post->id }}">
    {{ $post->title }}
  </a>
</h2>
<h5><span class="glyphicon glyphicon-time"></span> Post by eromeo, {{ $post->created_at->toFormattedDateString() }}.</h5>
<h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
<p>{{ $post->text }}</p>
<br><br>
