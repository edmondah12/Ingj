<!--DataBaza-->
<?php
session_start();
require 'conn.php';?>
<!--DataBaza-->
<header>
    <div class="nav">
        <ul>
            <a href="index.php" id="logo">
                    Food World
                </a>
            <a href="Recipes.php">Recipes</a>
            <a href="aboutus.php">Contact Us</a>
            <li id="memb">
                <div class="dropdown">
                    <button class="dropbtn">Members</button>
                    <div class="dropdown-content">
                        <a href="login.php">Login</a>
                        <a href="signup.php">Sign-up</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </header>