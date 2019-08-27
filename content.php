<?php
    function getData($category)
    {
        if ($category == 'todo' || $category == 'archived') {
            $json_source = file_get_contents('./todo.json');
            $json_data = json_decode($json_source, true);
            foreach ($json_data[$category] as $key => $value) {
                $name = "taskNb". + $key;
                echo '<div>';
                if ($value["isDone"]) {
                    echo '<input type="checkbox" name=' . $name . ' checked="1">';
                } else {
                    echo '<input type="checkbox" name=' . $name . '>';
                }
                echo '<label for="'. $name . '">' . $value["message"] . '</label>';
                echo '</div>';
            }
            
        }
        
    }
?>