
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Card İçinde Form Örneği</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    height: 100vh;
    justify-content: center;
    align-items: center;
    display: flex;
}
</style>
<body>
    <div class="container">
        <h2>Görev Düzenleme</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="http://localhost:8000/create">Kayıt</a></li>
              <li class="breadcrumb-item"><a href="http://localhost:8000/kontrol">Görevlerim</a></li>
              <li class="breadcrumb-item active" aria-current="page">Düzenle</li>
            </ol>
          </nav>
        <form method="POST" action="">
                        <input type="hidden" name="_token" value="Qai2BOrKhEtTfj8gqzHUPQfsAZPS959gtczgWA2e" autocomplete="off">            <input type="hidden" name="_method" value="PUT">            <div class="form-group">
                <label for="gorevad">Görev Adı:</label>
                <input type="text" id="gorevad" name="gorevad" class="form-control" value="deneme" required="">
            </div>
            <div class="form-group">
                <label for="gorevaciklama">Görev Açıklaması:</label>
                <textarea id="gorevaciklama" name="gorevaciklama" class="form-control" rows="4" required="">asasas</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Görevi Kaydet</button>
        </form>
    </div>



</body>
</html>



