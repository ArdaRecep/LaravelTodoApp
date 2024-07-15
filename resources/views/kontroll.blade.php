<!-- resources/views/todo/list.blade.php -->

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/deneme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Görevler</title>
    <style>
        .containera {
            max-width: 800px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            background: #f5f5f5;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .z {
            background: transparent;
        }

        p {
            margin-bottom: 5px;
        }

        .b {
            height: auto !important;
            margin-top: 50px !important;
            margin-bottom: 50px !important;
        }

        @keyframes hideAlert {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }

            60% {
                opacity: 0.6;
            }

            80% {
                opacity: 0;
                display: none;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }

        /* Uyarı kutusuna animasyonu uygula */
        .alert {
            animation: hideAlert 3s forwards;
        }
    </style>
</head>

<body class="b">
    <div class="container">
        <h2>Görev Listesi</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item z"><a href="{{ route('task.create') }}"><em><u>Kayıt</u></em></a></li>
                <li class="breadcrumb-item active z" aria-current="page"><em><u>Görevlerim</u></em></li>
            </ol>
        </nav>
        @session('success')
            <div class="alert alert-success fade show" role="alert" id="myAlert">
                {{ session('success') }}
            </div>
        @endsession
        @session('delete')
            <div class="alert alert-danger" role="alert">
                {{ session('delete') }}
            </div>
        @endsession
        <ul>
            @foreach ($todos as $todo)
                <li>
                    <p class="d-flex justify-content-center"><b>Görev Adı:&nbsp;</b>{{ $todo->gorevad }}</p>
                    <p class="d-flex justify-content-center"><b>Görev Açıklaması:&nbsp;</b>{{ $todo->gorevaciklama }}
                    </p>
                    <div class="d-flex justify-content-center mt-3">
                        {{-- <form method="POST" action="{{ route('todo.delete', ['id' => $todo->id]) }}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Sil&nbsp;&nbsp;<i
                                    class="fa fa-trash"></i></button>
                        </form> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn  btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $todo->id }}">Sil&nbsp;&nbsp;<i class="fa fa-trash"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $todo->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Görev Silinsin Mi?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="d-flex justify-content-center"><b>Görev
                                                Adı:&nbsp;</b>{{ $todo->gorevad }}</p>
                                        <p class="d-flex justify-content-center"><b>Görev
                                                Açıklaması:&nbsp;</b>{{ $todo->gorevaciklama }}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">İptal</button>
                                        <form method="POST" action="{{ route('todo.delete', ['id' => $todo->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">Sil&nbsp;&nbsp;<i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('todo.edit', ['id' => $todo->id]) }}" style="margin-left: 30px"
                            class="btn btn-outline-primary">Düzenle&nbsp;&nbsp;<i class="fa fa-edit"></i></a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
