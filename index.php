<?php

require_once("db.php");
require_once("task.php");
$post = getTask($link);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Задачник</title>
  </head>
  <body>
    <div class="container">
        <h1>Задачник</h1>
        <!-- сортировка -->
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a href="" class="nav-link">По имени</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">По e-mail</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">По статусу</a>
            </li>
        </ul>
        <!-- /.nav justify-content-center -->

        <!-- задачи -->
        <div class="list-group justify-content-center">
            <?php
            for($i = 0; $i < count($post); $i++) {
              //сохранение значений
              $name = $post[$i]['name'];
              $text = $post[$i]['task_text'];
              $status = $post[$i]['status_task'];
              $author = $post[$i]['author'];
              //вывод задач
              include "show.php";
            }
            ?>
          </div>
          <!-- / .list-group .justify-content-center -->

          <!-- пагинация -->
          <div class="box nav justify-content-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary">1</button>
              <button type="button" class="btn btn-secondary">2</button>
              <button type="button" class="btn btn-secondary">3</button>
            </div>
          </div>

          <button type="button" class="btn btn-success button-center" data-toggle="modal" data-target="#exampleModal">Добавить задачу</button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="store.php" method="post">
                    <div class="row">
                      <div class="col">
                        <input type="text" name="author" class="form-control" placeholder="Имя">
                      </div>
                      <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="e-mail">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Название задачи">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <textarea name="task_text" class="form-control" placeholder="Введите текст задачи"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- /.container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>