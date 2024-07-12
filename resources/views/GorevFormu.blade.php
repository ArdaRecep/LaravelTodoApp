<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Görev Formu</title>
    <style>
        /* İsteğe bağlı özel CSS stilleri */
        .form-card {
            max-width: 500px;
            /* Kartın maksimum genişliği */
            margin: 100px auto;
            /* Sayfa ortasında hizalamak için */
            padding: 20px;
            /* Kart içi boşluk */
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.1);
            /* Kartın hafif gölgesi */
        }
    </style>
    <link href="deneme.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card form-card"><div class="card-body container">
                    <h5 class="card-title mb-4 d-flex justify-content-center">Görev Formu</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active z" aria-current="page">Kayıt</li>
                      </ol>
                    <form method="POST" action="http://localhost:8000/create">
                        <input type="hidden" name="_token" value="Qai2BOrKhEtTfj8gqzHUPQfsAZPS959gtczgWA2e" autocomplete="off">                            <div class="mb-4">
                            <label class="form-label">Görev Adı</label>
                            <input type="text" name="gorevad" value="" class="form-control  " id="gorevad" placeholder="Görev adı giriniz">

                        </div>
                        <div>
                            <label class="form-label">Açıklama</label>
                            <textarea class="form-control " id="gorevaciklama" name="gorevaciklama" rows="3" placeholder="Görev açıklaması giriniz" style="height: 110px;"></textarea>
                                                            </div>
<div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-primary">Görevi Kaydet</button>
                        <a href="http://localhost:8000/kontrol" class="btn btn-primary" style="
margin-right: 5px;
">Görevleri Listele</a>
</div>
                    </form>

                </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
