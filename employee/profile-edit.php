<?php include('includes/header.php'); 
function getPayrollByUserId($userId){
    global $conn;

    // Escape user input to prevent SQL injection
    $userId = mysqli_real_escape_string($conn, $userId);

    // Your SQL query to retrieve payroll details based on user ID
    $query = "SELECT * FROM payroll WHERE user_id = $userId ORDER BY payment_date DESC LIMIT 1";

    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                'status' => 200,
                'data' => $row
            ];
            return $response;
        } else {
            $response = [
                'status' => 404,
                'message' => 'No Payroll Data Found'
            ];
            return $response;
        }
    } else {
        $response = [
            'status' => 500,
            'message' => 'Something Went Wrong!'
        ];
        return $response;
    }
}

?>


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit User
                        <a href="dashboard.php" class="btn btn-danger btn-sm float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    
                    <?php alertSuccess(); ?>
                    
                    <form action="code.php" method="POST">
                        <?php 
                            $paramResult = checkParamId('id');
                            if(!is_numeric($paramResult)){
                                echo '<h5>'.$paramResult.'</h5>';
                                return false;
                            }

                            $user = getById('users',checkParamId('id'));
                            if($user['status'] == 200){
                        ?>

                        <input type="hidden" name="userId" required value="<?= $user['data']['id']; ?>" />

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Name *</label>
                                    <input type="text" name="name" value="<?= $user['data']['name']; ?>" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Email *</label>
                                    <input type="email" name="email" value="<?= $user['data']['email']; ?>" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Password *</label>
                                    <input type="password" name="password" value="<?= $user['data']['password']; ?>" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="<?= $user['data']['phone']; ?>" required class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Alternate Phone</label>
                                    <input type="text" name="alt_phone" value="<?= $user['data']['alt_phone']; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" value="<?= $user['data']['address']; ?>" class="form-control" />
                                </div>
                            </div>
                            

                            <div class="col-md-5 mb-3 text-end">
                                <br/>
                                <button type="submit" name="updateProfile" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h6>Payroll Details</h6>
                                <?php
                                $payroll = getPayrollByUserId($user['data']['id']);
                                if ($payroll['status'] == 200) {
                                    echo '<p>Salary: £' . $payroll['data']['salary'] . '</p>';
                                    echo '<p>Payment Date: ' . $payroll['data']['payment_date'] . '</p>';
                                    echo '<p>Remarks: ' . ($payroll['data']['remarks'] ?? 'N/A') . '</p>';
                                } else {
                                    echo '<p>No payroll details available.</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <?php 
                            } else { 
                                echo '<h5>'.$user['message'].'</h5>';
                            }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>
