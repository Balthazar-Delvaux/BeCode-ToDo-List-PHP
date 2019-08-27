<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List!</title>
    <link rel="stylesheet" href="assets/css/foundation.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>

    <section class="callout primary">
        <h5>TO DO</h5>
        <?php
            include "content.php";
            getData(todo);
        ?>
        <h5>ARCHIVE</h5>
        <?php
            getData(archived);
        ?>
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
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/what-input.js"></script>
    <script src="assets/js/vendor/foundation.min.js"></script>
</body>

</html>