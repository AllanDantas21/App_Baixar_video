<?php 
  if(isset($_POST['download'])); // se o botão download for clicado
  $imgUrl = $_POST["imgurl"]; // pegando a url do input escondido
  $ch = curl_init($imgUrl); //inicializando curl
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $download = curl_exec($ch); //Executando curl
  curl_close($ch); // Fechando sessão Curl 
  header('content-type: image/jpg'); // settando o cabeçalho para o formato de imagem Jpg  
  header('content-Disposition: attachment; filename="thumbnail.jpg"');
  echo $download;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Downloader</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Baixe sua thumbnail!</header>
    <div class="url-input">
      <span class="title">Cole o Link:</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/watch?v=FucPPCPDd2Y&list=PLpwngcHZlPaf1aw42OGyitm4jh2Dlmi9c&index=4" required>
        <input type="hidden" class="hidden-input" name="imgurl">
        <div class="bottom-line"></div>
      </div>
    </div>
    <div class="preview-area">
      <img class="thumbnail" src="" alt="Imagem do video">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Cole o link para ver o preview</span>
    </div>
    <button class="download-btn" name="download" type="submit">Baixar video</button>
  </form>

  <script src="script.js"></script>
</body>
</html>