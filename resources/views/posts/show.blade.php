<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
 </head>
 <body>
    <h1>{{ $post->title }}</h1>

    @can('update', $post)
        <a href="#">Update this post</a>
    @endcan
 </body>
 </html>