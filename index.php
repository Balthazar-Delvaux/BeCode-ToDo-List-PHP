<?php
    include 'form.php';
    if ($_POST['taskToAdd']) {
    postData(); 
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.min.css"
        integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>

    <section class="callout primary">
        <div class="todo">
            <h5>TO DO</h5>
            <?php
                include "content.php";
                getData(todo);
            ?>
        </div>
        <div class="archived">
            <h5>ARCHIVED</h5>
            <?php
                getData(archived);
            ?>
        </div>
        <button class="button">SAVE</button>
    </section>

    <section class="callout secondary">
        <h4>Add a task</h4>
        <form action="index.php" method="post">
            <div class="grid-x grid-padding-x">
                <div>
                    <input type="text" name="taskToAdd">
                </div>
                <div>
                    <input type="submit" class="button" value="Add">
                </div>
            </div>
        </form>

    </section>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.2.3/what-input.min.js"
        integrity="sha256-CzzDpFVBRF2Q9t6/eCvXy4TpLnKBc7kTislg1GVr05w=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/foundation.min.js"
        integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg=" crossorigin="anonymous"></script>
</body>

</html>