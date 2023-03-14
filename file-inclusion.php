<?php
//include "header.php";
require "header.php";
// include_once "function.php";
require_once "header.php";
require_once "function.php"; //classes functions 

test();  //Ali
?>


<form class="w-50 border p-3 m-auto" method="POST" action="handle-add-user.php">

<div class="mb-3">
    <label class="form-label" for="username">User name</label>
    <input type="txet" name="username" id="username" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label" for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control">
</div>

<button type="submit" name="submit" class="btn btn-primary mb-3" value="submit">Add user</button>
</form>


<?php
//include "footer.php";
require "footer.php";
require_once "footer.php";
?>
