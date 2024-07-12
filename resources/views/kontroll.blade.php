<!-- resources/views/todo/list.blade.php -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Görevler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .z{
            background: transparent;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Todo Listesi</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item z"><a href="{{route("task.create")}}">Kayıt</a></li>
              <li class="breadcrumb-item active z" aria-current="page">Görevlerim</li>
            </ol>
          </nav>
        <ul>
            @foreach($todos as $todo)
            <li>
                <b>Görev Adı: {{ $todo->gorevad }}</b>
                <br/>
                <b>Görev Açıklaması: {{ $todo->gorevaciklama }}</b>
                <br/>
                <div style="margin-top: 10px" class="d-flex justify-content-start">
                    <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Sil</a>
                    <a href="{{ route('todo.edit', ['id' => $todo->id]) }}" style="margin-left: 10px" class="btn btn-outline-secondary"><i class="fa fa-bars"></i> Düzenle</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
