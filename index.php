<?php 
    include "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Confirmation alert Before Delete record with jQuery AJAX</title>

        <!-- CSS dependencies -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    </head>
    <style type="text/css">
        .modal-dialog{
            margin-top: 250px;
        }
    </style>
    <body>
        <br><br>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
            <table border='1' class='table' >
                <tr style='background: whitesmoke;'>
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Operation</th>
                </tr>

                <?php 
                $query = "SELECT * FROM posts";
                $result = mysqli_query($con,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['id'];
                    $title = $row['title'];
                    $link = $row['link'];

                ?>
                    <tr>
                        <td align='center'><?= $count ?></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $title ?></a></td>
                        <td align='center'><button class='delete btn btn-outline-danger' id='del_<?= $id ?>' data-id='<?= $id ?>'>Delete</button></td>
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </table>

            </div>
            </div>
        </div>



           <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
        <script src='script2.js' type='text/javascript'></script>
    </body>
</html>