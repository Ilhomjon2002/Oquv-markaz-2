<?php

?>

<head>
    <link href="bootstrap/css/index.css" rel="stylesheet">
</head>


<!-- ============================ COMPONENT REGISTER   ================================= -->
<div class="container-login" style="max-width: 800px; margin-top:115px;">
    <div class="card">
        <div class="card-body">
            <h2>Registration</h2>
            <form action="" method="post">

                <div class="form-row">
                    <div class="card-body">
                        <label>first name</label>
                        <input class="btninp" type="text" name="first_name"><br>
                    </div>

                    <div class="card-body">
                        <label>last name</label>
                        <input class="btninp" type="text" name="last_name"><br>
                    </div>
                </div>

                <div class="form-row">
                    <div class="card-body">
                        <label>Tel</label>
                        <input placeholder="+998_ _ _ _ _ _ _" class="btninp" type="tel" name="phone_number"><br>
                    </div>
                    <div class="card-body">
                        <br><br>
                        <label class="custom-control-inline custom-control-margin">
                            <input class="radinp" type="radio" name="gender" value="male">
                            <span class=""> Male </span>
                        </label>
                        <label class="custom-control-inline">
                            <input class="radinp" type="radio" name="gender" value="female">
                            <span class=""> Female </span>
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="card-body">
                        <label>user role</label>
                        <select name="user_role" class="form-control" id="">
                            <option value="1">student</option>
                            <option value="2">teacher</option>
                            <option value="3">admin</option>
                        </select>
                    </div>

                    <div class="card-body">
                        <label>status</label>
                        <select name="status" class="form-control" id="">
                            <option value="studying">studying</option>
                            <option value="branch">branch</option>
                            <option value="admin">ketgan</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="card-body">
                        <label>password</label>
                        <input class="btninp" type="password" name="password"><br>
                    </div>

                    <div class="card-body">
                        <label>password repeat</label>
                        <input class="btninp" type="password" name="password_repeat"><br>
                    </div>
                </div>

                <button class="btnsub centered-button" type="submit">submit</button>
            </form>
        </div>
    </div>
    <p class="pregis">Alredy Have Accaunt?<a href="/"> Sign In</a></p>
</div>
<!-- ============================ COMPONENT REGISTER END   ================================= -->