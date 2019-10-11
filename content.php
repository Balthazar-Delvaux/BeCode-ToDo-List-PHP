<?php
    function getData($category)
    {
        if ($category == 'todo' || $category == 'archived') {
            $json_source = file_get_contents('./todo.json');
            $json_data = json_decode($json_source, true);
            echo '<ul>';
            foreach ($json_data[$category] as $key => $value) {
                $name = "taskNb". + $key;
                echo '<li>';
                if ($value["isDone"] && $category == 'archived') {
                    echo '<input type="checkbox" name=' . $name . ' checked="1">';
                } else if ($value["isDone"]) {
                    echo '<input type="checkbox" name=' . $name . ' checked="1" class="todoItem">';
                } else {
                    echo '<input type="checkbox" name=' . $name . ' class="todoItem">';
                }
                echo '<label for="'. $name . '">' . $value["message"] . '</label>';
                echo '</li>';
            }
            echo '</ul>';
            
        }
        
    }
?>