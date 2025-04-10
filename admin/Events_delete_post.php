<?php 

$con = new mysqli("localhost","root","","project_school");
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM events WHERE id = $id";
    if ($con->query($sql)) {
        echo "Event deleted successfully.";
    } else {
        echo "Failed to delete event.";
    }
} else {
    echo "Invalid request.";
}
?>