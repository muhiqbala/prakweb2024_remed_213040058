Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('category_id');
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('excerpt');
    $table->text('body');
    $table->timestamp('published_at')->nullable();
    $table->timestamps();
});
