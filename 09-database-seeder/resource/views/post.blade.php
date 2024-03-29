@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        <p>Ditulis oleh <a href="" class="text-decoration-none">{{ $post->user->name }}</a> dalam <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Kembali ke Posting</a>
    <a href="/posts" class="d-block mt-3">Kembali ke Posting</a>
@endsection
