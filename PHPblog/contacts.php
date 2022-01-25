<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $site_title = 'Контакты';
        require 'blocks/head.php' 
    ?>
</head>
<body >
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">
        <h4>Обратная связь</h4>
        <form action="" method="post">
        <label for="username">Ваше Имя</label>
        <input type="text" name="username" id="username" class="form-control">

        <label for="mrss">Сообщение</label>
        <textarea name="mess" id="mess" class="form-control"></textarea>


        <div class="alert alert-danger mt-2" id="errorBlock"></div>
       
        <input name="myActionName" type="submit" value="Выполнить" />
        </form>
      </div>
      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>
  <?php require 'blocks/footer.php'; ?>

  <?php
    if (isset($_POST['myActionName'])){
       if(mail('hilesve1@gmail.com', 'Тема письма', 'Текст письма')) echo "Все отлично"; 
    };
?>

</body>
</html>

