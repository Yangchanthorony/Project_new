<?php
$con = new mysqli("localhost", "root", "", "project_school");


function get_news_section_post($news_type){
    global $con;

    $sql = "SELECT * FROM `events`   WHERE news_type = '$news_type' ORDER BY id DESC LIMIT 4";
    $res = $con->query($sql);

    while($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        $thumbnail = $row['thumbnail'];
        $title = $row['title'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];
        echo '
         <div  class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="event-card">
                                <a href="Evens4.php?id='.$id.'"><img src="../admin/images/'.$thumbnail.'"></a>
                                <div class="event-card-body">
                                    <h5  id="event4-title">'.$title.'</h5>
                                    <p id="event4-date"> '.$date.' | '.$time.'
                                    <p id="event4-location">'.$location.'</p>
                                    <a href="Evens4.php?id='.$id.'" class="read-more" id="event1-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
        ';
    }
}
?>