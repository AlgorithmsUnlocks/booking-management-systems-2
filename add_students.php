<?php

if(isset($_POST['add_students'])){

    $branch = real_escape($_POST['branch']);
    $card_number = real_escape($_POST['card_number']);
    $name	 = real_escape($_POST['name']);
    $blood_group = real_escape($_POST['blood_group']);
    $phone_number = real_escape($_POST['phone_number']);
    $bed_room = real_escape($_POST['bed_room']);
    $check_in = real_escape($_POST['check_in']);
    $check_out = real_escape($_POST['check_out']);
    $pacakge_cat = real_escape($_POST['pacakge_cat']);
    $pacakage = real_escape($_POST['pacakage']);
    $security_deposite = real_escape($_POST['security_deposite']);


    $dublicate_name = mysqli_query($connection,"SELECT `name` FROM `students` WHERE `name`='$name'");
    $dublicate_number = mysqli_query($connection,"SELECT `phone_number` FROM `students` WHERE `phone_number`='$phone_number'");

    if($card_number != "" && $name != "" && $phone_number != "" && $security_deposite != ""){

        if(mysqli_num_rows($dublicate_name)){
            echo "<a href='' class='bg-success text-white p-3 m-3'> Name is already register</a>";
        }elseif(mysqli_num_rows($dublicate_number)){
            echo "<a href='' class='bg-success text-white p-3 m-3'> Phone number is already register</a>";
        }else{
            $query = "INSERT INTO `students`(`branch`, `card_number`, `name`, `blood_group`, `phone_number`, `bed_room`, `check_in`, `check_out`, `pacakge_cat`, `pacakage`,`security_deposite`) VALUES ('$branch','$card_number','$name','$blood_group','$phone_number','$bed_room','$check_in','$check_out','$pacakge_cat','$pacakage','$security_deposite')";
            $query_insert_students = mysqli_query($connection,$query);
            confirmQuery($query_insert_students);
            echo "<a href='students_lists.php?source=view_all_students' class='bg-success text-white p-3 m-3'> Students Add Successfull, View Now</a>";
        }

    }else{
        echo "<a href='' class='bg-success text-white p-3 m-3'> Feild can not be empty</a>";
    }

}


?>


<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">

                   <div class="row">
                       <div class="form-group col-md-6">
                           <label for="name">Name</label>
                           <input type="text" class='form-control'name='name' placeholder='Enter Student Name'>
                       </div>
                       <div class="form-group col-md-6">
                           <label for="name">Branch Name</label>
                           <select name="branch" class="form-control">
                               <option value="Super Hostel 3">Super Hostel 3</option>
                               <option value="Super Hostel 4">Super Hostel 4</option>
                               <option value="Super Hostel 1">Super Hostel 1</option>
                           </select>
                       </div>
                   </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Card Number</label>
                            <input type="text" class='form-control'name='card_number' placeholder='Enter Student card Name'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Blood Group</label>
                            <select name="blood_group" class="form-control">
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="A-">A-</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Phone Number</label>
                            <input type="text" class='form-control'name='phone_number' placeholder='Enter Phone Number '>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Bed</label>
                            <input type="text" class='form-control'name='bed_room' placeholder='Enter Bed '>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Check In</label>
                            <input type="date" class='form-control'name='check_in' placeholder=''>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Check Out</label>
                            <input type="date" class='form-control'name='check_out' placeholder=' '>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Package Category</label>
                            <select name="pacakge_cat" class="form-control">
                                <option value="Economy">Economy</option>
                                <option value="Cozy Plus">Cozy Plus</option>
                                <option value="Cozy">Cozy </option>
                                <option value="Elegant">Elegant </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Package</label>
                            <select name="pacakage" class="form-control">
                                <option value="30 Days">30 Days</option>
                                <option value="1 Days">1 Days</option>
                                <option value="7 Days">7 Days </option>
                                <option value="15 Days">15 Days </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Security Deposite</label>
                        <input type="text" class='form-control'name='security_deposite' placeholder='Enter Security Deposite'>
                    </div>

<!--                    <div class="form-group">-->
<!--                        <label for="name">Status</label>-->
<!--                     <select name="status" class="form-control">-->
<!--                         <option value="stay">Stay</option>-->
<!--                         <option value="discounted">Discounted</option>-->
<!--                     </select>-->
<!--                    </div>-->


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary " name='add_students'>
                        <span>  Add Students </span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>