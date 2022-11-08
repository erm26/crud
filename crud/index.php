<?php 

include 'func.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-success mt-2" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i></button>
          <table class="table table-striped table-hover mt-2">
            <thead class="thead-dark">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php foreach($result as $res): ?>
              <tr>
                <td><?=$res->id ?></td>
                <td><?=$res->name ?></td>
                <td><?=$res->email ?></td>
                <td><a href="?id=<?=$res->id ?>" class="btn btn-success" data-toggle="modal" data-target="#edit<?=$res->id ?>"><i class="fa fa-edit"></i></a>
                  <a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$res->id ?>"><i class="fa fa-trash-alt"></i></a></td>
              </tr>
              <!-- Modal edit-->
              <div class="modal fade" id="edit<?=$res->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Изменить Запись</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="?id=<?=$res->id ?>" method="post">
                        <div class="form-group">
                          <small>Name</small>
                          <input type="text" class="form-control" name="name" value="<?=$res->name ?>">
                        </div>
                        <div class="form-group">
                          <small>Email</small>
                          <input type="text" class="form-control" name="email" value="<?=$res->email ?>">
                        </div>
                      
                    
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                          <button type="submit" class="btn btn-primary" name="edit">Сохранить</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal edit-->
              <!-- Modal delete-->
              <div class="modal fade" id="delete<?=$res->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Удалить Запись № <?=$res->id ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>                                                                                   
                        <div class="modal-footer">
                          <form action="?id=<?=$res->id ?>" method="post">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                      <!-- Modal delete-->
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal create-->
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Добавить Запись</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <small>Name</small>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <small>Email</small>
                <input type="text" class="form-control" name="email">
              </div>
            
          
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal create-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>