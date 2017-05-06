

<div class="post-preview">

    <h2 class="post-title"> {{ $post->title }}</h2>
    <p class="post-meta">Post by ,  <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}.</p>

    <p>{{ $post->text }}</p>
      <h5><small> Read the full post at:
        <a href="/erhome/public/posts/{{ $post->id }}">
          http://www.romeoenrico.com/posts/{{ $post->id }}
        </a>
      </small></h5>

</div>
<hr>
<br>
