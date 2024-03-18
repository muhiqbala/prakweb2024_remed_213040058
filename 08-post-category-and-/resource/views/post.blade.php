@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        <p>Oleh. Rezky di <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Kembali ke Postingan</a>
@endsection
