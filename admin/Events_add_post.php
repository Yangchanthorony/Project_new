<?php 
    include('Dashboard.php');
    include("../Auth/function.php");
?>
<style>
    /* Content right styling */
.content-right {
    padding: 30px;
    
    min-height: 100vh;
    margin-left: 30.66%; /* Matches col-2 width */
    margin-top: 20px;
    
}

/* Top section */
.top {
    margin-bottom: 30px;
}

.top h3 {
    color: #2c3e50;
    font-size: 24px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 2px solid #3498db;
    display: inline-block;
}

/* Bottom section */
.bottom {
    max-width: 800px;
}

.bottom figure {
    background-color: #f8f9fc;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Form styling */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    color: #2c3e50;
    font-weight: 500;
    margin-bottom: 8px;
    font-size: 14px;
}

.form-control {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #dcdcdc;
    border-radius: 6px;
    font-size: 14px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    outline: none;
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}

.form-select {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #dcdcdc;
    border-radius: 6px;
    background-color: #ffffff;
    font-size: 14px;
    cursor: pointer;
}

.form-select:focus {
    outline: none;
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}

.form-check-input {
    margin-right: 10px;
    cursor: pointer;
}

textarea.form-control {
    min-height: 120px;
    resize: vertical;
}

/* Buttons */
.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-right: 10px;
}

.btn-primary {
    background-color: #3498db;
    color: #ffffff;
}

.btn-primary:hover {
    background-color: #2980b9;
}

.btn-success {
    background-color: #2ecc71;
    color: #ffffff;
}

.btn-success:hover {
    background-color: #27ae60;
}

.btn-danger {
    background-color: #e74c3c;
    color: #ffffff;
}

.btn-danger:hover {
    background-color: #c0392b;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .content-right {
        margin-left: 0;
        padding: 20px;
    }
    
    .col-10 {
        width: 100%;
    }
    
    .bottom figure {
        padding: 15px;
    }
    
    .btn {
        margin-bottom: 10px;
    }
}
</style>
                <div  class="col-10">
                    <div  class="content-right">
                        
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input name="title" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Date</label>
                                        <input name="date" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Time</label>
                                        <input name="time" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>location</label>
                                        <input name="location" type="text" class="form-control">
                                    </div>
                                    
                                  <div class="form-group">
                                        <label>Type</label>
                                        <select name="news_type" class="form-select">
                                            <option value="events" selected>evens</option>
                                            <option value="news"selected>news</option>
                                           
                                        </select>
                                    </div>
                                    <!--   <div class="form-group">
                                        <label>Option</label>
                                      <select class="form-select" name="" id="">
                                          <option value="">Option 1</option>
                                          <option value="">Option 2</option>
                                          <option value="">Option 3</option>
  
                                      </select> -->
                                   
                                    <div class="form-group">
                                        <label>image</label>
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>banner</label>
                                        <input name="banner" type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>titie_one</label>
                                        <input name="word" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>titie_two</label>
                                        <input name="small" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Description</label>
                                        <textarea name="desc" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <button name="publish" type="submit" class="btn btn-success">publish</button> 
                                        <a href="" class="btn btn-danger">cancel</a>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
