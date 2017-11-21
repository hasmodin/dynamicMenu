<?php
require_once 'db.php';


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dynamic dropdwon menu bar</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        <div class="topnav" id="myTopnav">
          <a href="#home">Home</a>
          <div class="dropdown">
          <button class="dropbtn">Products
          <i class="fa fa-caret-down"></i>
          </button>
        <div class="dropdown-content">
          <a href="#">product 1</a>
          <a href="#">product 2</a>
          <a href="#">product 3</a>
        </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">services
          <i class="fa fa-caret-down"></i>
          </button>
        <div class="dropdown-content">
          <a href="#">Service 1</a>
          <a href="#">Service 2</a>
          <a href="#">Service 3</a>
        </div>
        </div>
      <a href="#contactus">contact us</a>
      <a href="#About">About</a>
      <a href="#login" class="navbar-right">login</a>
      <a href="#register" class="navbar-right">register</a>

    </div>
    </div>
    <div class="showcase">
      <h2>Dynamic menu bar</h2>
      <div class="form-wrapper">
        <h3>Add Menu List Item</h3>
        <form class="form1" action="add_menu.php" method="post">
          <input type="text" name="menu_name" placeholder="Type menu name"><br>
          <input type="text" name="menu_page" placeholder="Type menu page name"><br>
          <select class="menu_id"><br>
            <option>select something</option>
          </select>
          <br>
          <input class="button" type="submit" name="submit" value="Add menu item"><br>
        </form>
      </div>
      <div class="form-wrapper">
        <h3>Delete Menu list item</h3>
        <form class="" action="delete.php" method="post">
          <select class="menu_id">
            <option>Select something</option>
          </select><br>
          <input class="button" type="submit" name="submit" value="Delete Menu item">
        </form>
      </div>
    </div>
    <div class="footer">
      <footer>
        <h3>copyright @2017</h3>
      </footer>
    </div>


  </body>
</html>
