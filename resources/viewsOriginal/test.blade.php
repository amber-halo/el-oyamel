<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <div>
        <h1>Hola, {{ Auth::user()->name }}</h1>
        <h3>Tus plantillas</h3>
        <div>
            @if ($posts)
                <ul>
                    @foreach ($posts as $post)
                        <li><a href="{{ route('post.show', ['id' => $post->id]) }}">{{ $post->id }}</a></li>
                    @endforeach
                </ul>
            @else
                <p>Aún no has agregado plantillas</p>
            @endif
        </div>

        <h3>Agregar nueva plantilla</h3>
        <p>Elige una plantilla a continuación para comenzar a editarla.</p>
        <div>
            @if ($templates) 
                <ul>
                    @foreach ($templates as $template)
                        <li>
                            <a href="{{ route('template.show', ['id' => $template->id]) }}">{{ $template->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

    </div>
</body>
</html>