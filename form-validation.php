<?php 
session_start();

if(isset($_SESSION['erorrs']))
{
foreach ($_SESSION['erorrs'] as $value) {
   echo  "$value <br>";
}
}
unset($_SESSION['erorrs']);

require "header.php";
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3  text-center">Add user</h5>

    <form class="w-50 border p-3 m-auto" method="POST" action="handle-form-validation.php">

        <div class="mb-3">
            <label class="form-label" for="username">User name</label>
            <input type="txet" name="username" id="username" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label" for="age">Age</label>
            <input type="txet" name="age" id="age" class="form-control">
        </div>

        <div class="mb-3">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
        </div>

        <button type="submit" name="submit" class="btn btn-primary mb-3" value="submit">Register</button>
    </form>

    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
require "footer.php";
?>