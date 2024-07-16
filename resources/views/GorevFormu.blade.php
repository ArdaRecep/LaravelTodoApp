<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Görev Formu</title>
    <link rel="stylesheet" href="{{ asset('css/deneme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
    <style>


</style>

<body>
        <div class="container row">
            <h2 class="d-flex justify-content-center mb-4">Görev Formu</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active z" aria-current="page"><em><u>Kayıt</u></em></li>
            </ol>
            <form method="POST" action="http://localhost:8000/create">
                @csrf
                <div>
                    <label class="form-label">Görev Adı:</label>
                    <input type="text" name="gorevad" required="" value="" class="form-control a @error("gorevad") is-invalid border border-danger @enderror" id="gorevad" placeholder="Görev adı giriniz">
                   @error("gorevad")
                    <div class="d-block invalid-feedback">
                        Görev ad boş olamaz!
                      </div>
                      @enderror
                </div>
                <div>
                    <label class="form-label mt-4">Görev Açıklaması:</label>
                    <textarea class="form-control a @error("gorevaciklama") is-invalid border border-danger @enderror" required="" id="gorevaciklama" name="gorevaciklama" rows="3" placeholder="Görev açıklaması giriniz" style="height: 110px;"></textarea>
                    @error("gorevaciklama")
                    <div class="d-block invalid-feedback">
                        Görev açıklama boş  olamaz!
                      </div>
                      @enderror
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit"  class="btn btn-outline-success">Görevi Kaydet&nbsp;&nbsp;<i class="fa fa-save"></i></button>
                    <a href="http://localhost:8000/list" class="btn btn-outline-primary" style="margin-right: 5px;">Görevleri Listele&nbsp;&nbsp;<i class="fa fa-list"></i></a>
                </div>
            </form>
        </div>

</body>

</html>
