<?php 
$con = new mysqli("localhost","root","","project_school");
include("../Auth/function.php");
$up_id = $_GET['id'];
$sql = "SELECT * FROM `register` WHERE `id` = '$up_id'";
$res = $con->query($sql);
$row = mysqli_fetch_array($res);

// Select degree

$selected_BA = '';
$selected_AA = '';

if($row['Degree'] == 'Bachelor') {
    $selected_BA = "selected";

}else{
    $selected_AA = "selected";
}

// Select gender

$selected_Male = '';
$selected_Female = '';

if($row['gender'] == 'male') {
    $selected_Male = "selected";

}else{
    $selected_Female = "selected";
}

// Select skill

$selected_Web = '';
$selected_Acc = '';
$selected_Eng = '';
$selected_Mgt = '';
$selected_Law = '';
$selected_Mkt = '';
$selected_IR = '';
$selected_Public = '';
$selected_Economic = '';
$selected_Fiance = '';
$selected_Business = '';
$selected_IB = '';
$selected_Logistics = '';
$selected_Mis = '';
$selected_Htm = '';

if($row['Skill'] == 'Computer Sciences'){
    $selected_Web = "selected";
   
}else if($row['Skill'] == 'Accounting'){
    $selected_Acc = "selected";
   
}
else if($row['Skill'] == 'Management'){
    $selected_Mgt = "selected";
   
}
else if($row['Skill'] == 'Law'){
    $selected_Law = "selected";
   
}else if($row['Skill'] == 'Marketing'){
    $selected_Mkt = "selected";
   
}
else if($row['Skill'] == 'InternationalRelation'){
    $selected_IR = "selected";
   
}
else if($row['Skill'] == 'Public Adminstation'){
    $selected_Public = "selected";
   
}
else if($row['Skill'] == 'Economic Development'){
    $selected_Economic = "selected";
   
}
else if($row['Skill'] == 'Hotel & Tourism Management'){
    $selected_Htm = "selected";
   
}
else if($row['Skill'] == 'Fiance & Banking'){
    $selected_Fiance = "selected";
   
}
else if($row['Skill'] == 'Management Information System'){
    $selected_Mis = "selected";
   
}
else if($row['Skill'] == 'English for Business'){
    $selected_Business = "selected";
   
}
else if($row['Skill'] == 'International Business'){
    $selected_IB = "selected";
   
}
else if($row['Skill'] == 'Logistics Management'){
    $selected_Logistics = "selected";
   
}
else{
    $selected_Eng = "selected";
   
}

?>


<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.content-right {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 20px auto;
}

.top h3 {
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.form-control, .form-select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

.btn-primary:hover {
    background-color: #0056b3;
}

</style>

<div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>update name register</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form action="edit_name.php" method="post" enctype="multipart/form-data">   
                                    <input type="text" name="edit_id" value="<?php echo $row[0] ?>">
                                <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="First_Name" value="<?php echo $row[1]?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="Last_Name" value="<?php echo $row[2] ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" value="<?php echo $row[3]?>" class="form-select">
                                            <option value="Male"<?php echo $selected_Male?>>Male</option>
                                            <option value="Female"<?php echo $selected_Female?>>Female</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" name="age" value="<?php echo $row[4] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php echo $row[5]?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                    <label for="Degree">Degree</label>
                                    <select id="Degree" name="Degree" value="<?php echo $row[6]?>" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Bachelor"<?php echo $selected_BA?>>Bachelor</option>
                                        <option value="Associate"<?php echo $selected_AA?>>Associate</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Skill">Skill</label>
                                    <select id="Skill" name="Skill" value="<?php echo $row[7]?>" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Accounting" <?php echo $selected_Acc?>>Accounting</option>
                                        <option value="Management"<?php echo $selected_Mgt?>>Management</option>
                                        <option value="Law"<?php echo $selected_Law?>>Law</option>
                                        <option value="Marketing"<?php echo $selected_Mkt?>>Marketing</option>
                                        <option value="InternationalRelation"<?php echo $selected_IR?>>InternationalRelation</option>
                                        <option value="Public Adminstation"<?php echo $selected_Public?>>Public Adminstation</option>
                                        <option value="Economic Development"<?php echo $selected_Economic?>>Economic Development</option>
                                        <option value="Hotel & Tourism Management"<?php echo $selected_Htm?>>Hotel & Tourism Management</option>
                                        <option value="Fiance & Banking"<?php echo $selected_Fiance?>>Fiance & Banking</option>
                                        <option value="Management Information System"<?php echo $selected_Mis?>>Management Information System</option>
                                        <option value="English for Education"<?php echo $selected_Eng?>>English for Education</option>
                                        <option value="English for Business"<?php echo $selected_Business?>>English for Business</option>
                                        <option value="International Business"<?php echo $selected_IB?>>International Business</option>
                                        <option value="Computer Sciences" <?php echo $selected_Web?>>Computer Sciences</option>
                                        <option value="Logistics Management "<?php echo $selected_Logistics?>>Logistics Management</option>
                                    </select>
                                </div>

                                    <div class="form-group">
                                        <label for="price">price</label>
                                        <input type="text" id="price" name="price" value="<?php echo $row[8]?>" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone number">phone number</label>
                                        <input type="text" id="number" name="number" value="<?php echo $row[9]?>" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="day" value="<?php echo $row[10] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" value="<?php echo $row[11] ?>" class="form-control">
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <button type="submit" name="btn_update" class="btn btn-primary">Update</button>
                                       
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
