    <?php 
    include("Dashboard.php");
    include("../Auth/function.php");


    ?>
    <style>
        .table {
    width: 83%;
    border-collapse: separate;
    border-spacing: 0 12px;
    margin-bottom: 20px;
    font-size: 15px;
    margin-left: 17%;
}

.table th {
    background-color: #28a745;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    padding: 14px 16px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.table td {
    background-color: #ffffff;
    padding: 14px 16px;
    vertical-align: middle;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    border-bottom: 1px solid #eee;
}

.table tr:hover td {
    background-color: #f8f8f8;
    transition: background-color 0.3s ease;
}

.table img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 6px;
    border: 1px solid #ddd;
}

/* Action Buttons */
.btn-primary, .btn-danger {
    padding: 6px 12px;
    font-size: 13px;
    border-radius: 20px;
    color: #fff;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.btn-primary {
    background-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #b02a37;
}

    </style>

                    <div class="col-10">
                        <div class="content-right">
                            <!-- <div class="top">
                                <h3>All Sport News</h3>
                            </div> -->
                            <div class="bottom view-post">
                                <figure>
                                    <form method="post" enctype="multipart/form-data">
                                        <!-- <div class="block-search">
                                            <input type="text" class="form-control" placeholder="SEARCH HERE">
                                            <button type="submit">
                                            <img src="search.png" alt=""></button>
                                        </div> -->
                                        <table class="table">
    <thead >
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Thumbnail</th>
            <th>New</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php view_events(); ?>
    </tbody>
</table>

                                        <!-- <ul class="pagination">
                                            <li>
                                                <a href="">1</a>
                                                <a href="">2</a>
                                                <a href="">3</a>
                                                <a href="">4</a>
                                            </li>
                                        </ul> -->

                                    
                                    
                                    </form>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script>
    function confirmDelete(eventId) {
        if (confirm("Are you sure you want to delete this event?")) {
            // AJAX call to delete_event.php
            fetch('Events_delete_post.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'id=' + eventId
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                location.reload(); // Refresh page after deletion
            })
            
        }
    }
    </script>


    </html>