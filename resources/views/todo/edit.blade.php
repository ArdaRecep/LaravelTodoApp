<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Düzenleme</title>
    <link rel="stylesheet" href="{{ asset('css/deneme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<style>


</style>

<body>
    <div class="container row">
        <h2 class="d-flex justify-content-center mb-4">Görev Düzenleme</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost:8000/create"><em><u>Kayıt</u></em></a></li>
                <li class="breadcrumb-item"><a href="http://localhost:8000/list"><em><u>Görevlerim</u></em></a></li>
                <li class="breadcrumb-item active" aria-current="page"><em><u>Düzenle</u></em></li>
            </ol>
        </nav>
        <form method="POST" action="{{route('todo.update', ['id' => $todo->id])}}">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label class="form-label" for="gorevad">Görev Adı:</label>
                <input type="text" id="gorevad" name="gorevad" class="form-control a @error("gorevad") is-invalid border border-danger @enderror" value="{{ $todo->gorevad ?? '' }}" required="">
                @error("gorevad")
                <div class="d-block invalid-feedback">
                    Görev ad boş olamaz!
                  </div>
                 @enderror
            </div>
            <div class="form-group">
                <label class="form-label mt-4" for="gorevaciklama">Görev Açıklaması:</label>
                <textarea class="form-control a @error("gorevaciklama") is-invalid border border-danger @enderror" id="gorevaciklama" name="gorevaciklama" rows="4" required="">{{$todo->gorevaciklama}}</textarea>
                @error("gorevaciklama")
                <div class="d-block invalid-feedback">
                    Görev açıklama boş olamaz!
                  </div>
                 @enderror
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-outline-success mt-4" style="width: 200px">Değişikliği
                    Kaydet&nbsp;&nbsp;<i class="far fa-check-square"></i></button>
            </div>
        </form>
    </div>



</body>

</html>
