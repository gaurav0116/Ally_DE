<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Contact Us Navigation Bar</title>
</head>

<link rel="stylesheet" href="css/header_navigationbar.css" />

<body bgcolor="cornsilk">
  <div>
    <img src="image/alumni.jpg" width="100%" height="280px" />
  </div>
  <div style="padding-top: 5px;">
    <table class="table">
      <tr>
        <td>
          <ul class="ul1">
            <div class="dropdown">
              <li class="li_image"><img src="image/logo.jpg" width="68px" height="60px" style="padding-right:20px" />
              </li>
            </div>
            <div class="dropdown">
              <li class="li1"><a href="index.php"><span class="span1">Home</span></a></li>
            </div>
            <div class="dropdown">
              <li class="li1"><a href="about_us.php" name="about" onclick="change()"><span class="span1">About
                    Us</span></a></li>

            </div>
            <div class="dropdown">
              <li class="li1"><a href="news.php"><span class="span1">News</span></a></li>
              <div class="dropdown-content">
                <a href="news.php#announcements">Announcement Board</a>
                <a href="news.php#events">Events</a>
              </div>
            </div>

            <div class="dropdown">
              <li class="li1"><a href="search_alumni.php"><span class="span1">Search Alumni</span></a></li>
            </div>
            <div class="dropdown">
              <li class="li1 active"><a href="contact_us.php"><span class="span1">Contact Us</span></a></li>
              <div class="dropdown-content">
                <a href="contact_us.php#contact">Contact</a>
                <a href="contact_us.php#faq">FAQ</a>
              </div>
            </div>
            <li class="li2"><a href="register.html"><span class="span1">Register</span></a></li>
            <li class="li2"><a href="login.html"><span class="span1">Login</span></a></li>
          </ul>
        </td>
      </tr>
    </table>
    <div>
      <button id="contact_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px" /></button>
      <script src="javascript/contact_totop.js"></script>

</body>

</html>