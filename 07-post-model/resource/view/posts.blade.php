@foreach ($posts as $post)
    <article class="mb-5">
        <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
        <h5>Oleh: {{ $post->author }}</h5>
        <p>{{ $post->body }}</p>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach
