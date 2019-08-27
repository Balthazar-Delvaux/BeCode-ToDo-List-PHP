<?php
function postData() {
    $task = filter_var($_POST['taskToAdd'], FILTER_SANITIZE_STRING);
    if (isset($task)) {
        $json_source = file_get_contents('./todo.json');
        $json_data = json_decode($json_source, true);
        $taskObject = array(message => $task, isDone => false);
        array_push($json_data['todo'], $taskObject);
        
        $jsonDataToEncode = json_encode($json_data);
        file_put_contents('./todo.json', $jsonDataToEncode);
    }
}
?>