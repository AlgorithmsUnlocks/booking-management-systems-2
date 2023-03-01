<div class="ruman_table_card">

    <div class="dynamic_search_counter">

        <div class="counter_dynamics">
            <form class="" action="" method="POST">
                <label for="search">Show </label>
                <select>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <label for="search">entries </label>
            </form>
        </div>
        <div class="search_dynamic">
            <form class="search_forms" action="students_lists.php?source=search_students" method="POST">
                <label for="search">Search : </label>
                <input type="text" class="search_input" name="search_name" placeholder="search with name or phone number">
            </form>
        </div>
    </div>

    <?php

    if(isset($_POST['search_input'])){

    $search_input = $_POST['search_input'];

    $query = "SELECT * FROM students WHERE name LIKE '%$search_input%' OR phone_number LIKE '%$search_input%'";
    $query_fetch_students = mysqli_query($connection,$query);
    $all_count = mysqli_num_rows($query_fetch_students);

    confirmQuery($query_fetch_students);

    ?>

    <div class="ruman_table_inner">

        <table class="ruman_table_items">
            <thead class="ruman_head">
            <tr>
                <th class="ml-5">ID</th>
                <th>Branch  </th>
                <th>Card Number</th>
                <th>Name </th>
                <th>B.Groups </th>
                <th>Phone Number</th>
                <th>Bed Room</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Pacakage category</th>
                <th>Pacakage </th>
                <th>Available Days</th>
                <th>Security Deposit </th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php

            if($all_count > 0){

                while($row = mysqli_fetch_assoc($query_fetch_students)){

                    $student_id = $row['student_id'];
                    $branch = $row['branch'];
                    $card_number = $row['card_number'];
                    $name	 = $row['name'];
                    $blood_group = $row['blood_group'];
                    $phone_number = $row['phone_number'];
                    $bed_room = $row['bed_room'];
                    $check_in = $row['check_in'];
                    $check_out = $row['check_out'];
                    $pacakge_cat = $row['pacakge_cat'];
                    $pacakage = $row['pacakage'];
                    $available_days = $row['available_days'];
                    $security_deposite = $row['security_deposite'];
                    $date = $row['date'];
                    $status = $row['status'];    ?>


                    <tr>
                        <td><?php echo $student_id ?> </td>
                        <td><?php echo $branch ?></td>
                        <td><?php echo $card_number?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $blood_group ?></td>
                        <td><?php echo $phone_number ?> </td>
                        <td><?php echo $bed_room ?> </td>
                        <td><?php echo $check_in ?></td>
                        <td><?php echo $check_out ?></td>
                        <td><?php echo $pacakge_cat ?></td>
                        <td><?php echo $pacakage ?></td>
                        <td><?php echo $available_days ?></td>
                        <td><?php echo $security_deposite ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $status ?></td>
                        <td>
                            <div class="d-flex align-items-center">

                                <form action="" method="POST">
                                    <input type="hidden" name="donor_id" value="<?php echo $student_id ?>">
                                    <button type="submit" class="btn btn-success btn-sm btn-icon-text mr-3">
                                        Edit
                                        <i class="typcn typcn-edit btn-icon-append"></i>
                                    </button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" name="donor_id" value="<?php echo $student_id; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm btn-icon-text" name="delete_btn">
                                        Delete
                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                <?php  }

            }else{
                echo "No Data Found";
            }
    } ?>

            </tbody>
        </table>
    </div>

    <div class="dynamic_search_counter">

        <div class="counter_dynamics">
            <p> Showing 1 to 10 of 1850 entries (filtered from 388233 entries)</p>
        </div>
        <div class="search_dynamic">

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>

</div>
