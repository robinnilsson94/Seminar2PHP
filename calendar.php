<?php
session_start();
 if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  $_SESSION['loggedin'] = false;
}
else {
     $_SESSION['loggedin'] = true;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
       <ul>
  <li><a href=home.php>Home</a></li>
  <li><a href=calendar.php>Calendar</a></li>
  <li style="float:right"> <a href=register.php>Register</a></li>
   <?php if($_SESSION['loggedin'] == false) {
  echo '<li style="float:right"><a href=login.php>Log in</a></li>'; 
  }
  else {
    echo '<li style="float:right"><a href=logout.php>Log out</a></li>';
  } ?>
</ul>
        <h1>Tasty Recipes</h1>
        <p id=special>A good recipe for life</p>
   <table style="width:100%; height: 100%">
  <tr>
    <th>Monday</th>
    <th>Tuesday</th> 
    <th>Wednesday</th>
    <th>Thursday</th>
    <th>Friday</th> 
    <th>Saturday</th>
    <th>Sunday</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4<a href="Meatballs.php">
            <img src="meatballs.jpg" alt="Meatballs" style="width:150px;height:150px;border:0;">
        </a></td>
    <td>5</td>
    <td>6</td>
     <td>7</td>
  </tr>
  <tr>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td>13</td>
     <td>14</td>
  </tr>
  <tr>
    <td>15</td>
    <td>16</td>
    <td>17</td>
    <td>18</td>
    <td>19</td>
    <td>20 <a href="Pancakes.php">
            <img src="pancakes.jpg" alt="pancakes" style="width:150px;height:150px;border:0;">
        </a></td>
    <td>21</td>
  </tr>
   <tr>
    <td>22</td>
    <td>23</td>
    <td>24</td>
    <td>25</td>
    <td>26</td>
    <td>27</td>
    <td>28</td>
  </tr>
   <tr>
    <td>29</td>
    <td>30</td>
    <td>31</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
    </body>
</html>
