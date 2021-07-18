<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sparks Foundation|Alankrita</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<!-- FONT-AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=PT+Mono&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Festive&display=swap" rel="stylesheet">

<style>



/* NAVIGATION BRAND */
.navbar {
  padding-bottom: 2rem;
  background-color: #BB8760;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  filter: opacity(80%);
}

.navbar-nav {
  margin-left: auto;
}

.navbar-brand {
  font-weight: normal;
  color: #fff;
  font-family: "Ubuntu";
  font-size: 2.2rem;
  font-weight: bold;
}

.nav-item {
  padding: 0 18px;
}

.nav-link {
  font-size: 1.3rem;
  font-family: "Cabin";
  font-weight: bold;
}

/* CONTENT */
.main{
 background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgOGB3xu7fBWuRRM7RZAu_thu_0cqRUr6QTA&usqp=CAU") ;
  padding: 50px;
   background-repeat: repeat;
   filter: blur(8px);
  -webkit-filter: blur(0.5px);
}

/* PERSONAL INFO AND DONATE BUTTON */
#donate-info {
  margin: 0 auto 50px;
  width: 50%;
}

#name{
   text-align: center;
   margin-left: 500px;
}

#amt{
  text-align: center;
   margin-left: 500px;
}

#btn{
  text-align: center;
  margin-left: 590px;

  background: #f3fa23;
    background-image: -webkit-linear-gradient(top, #f3fa23, #cad61e);
    background-image: -moz-linear-gradient(top, #f3fa23, #cad61e);
    background-image: -ms-linear-gradient(top, #f3fa23, #cad61e);
    background-image: -o-linear-gradient(top, #f3fa23, #cad61e);
    background-image: linear-gradient(to bottom, #f3fa23, #cad61e);
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: Arial;
    color: #000000;
    font-size: 20px;
    padding: 12px 20px 12px 20px;
    text-decoration: none;
}
#btn:hover {
  background: #e66d10;
  background-image: -webkit-linear-gradient(top, #e66d10, #a8550d);
  background-image: -moz-linear-gradient(top, #e66d10, #a8550d);
  background-image: -ms-linear-gradient(top, #e66d10, #a8550d);
  background-image: -o-linear-gradient(top, #e66d10, #a8550d);
  background-image: linear-gradient(to bottom, #e66d10, #a8550d);
  text-decoration: none;
}

#heading {
  border: 7px dotted black;
  padding: 35px;
  background: yellow;
}

input[type=textbox] {
  margin: 8px 0;
  width: 50%;
  height: 3rem;
  box-sizing: border-box;
  border: none;
  background-color: yellow;
  color: black;
  box-shadow: 20px 20px 50px black;
}
input[type=textbox]:hover{
  background-color: #ECD662;
}

h2{
  font-family: "Festive";
  font-weight: bolder;
  font-size: 3rem;
}

img{
  width: 450px;
  height: 300px;
  filter: drop-shadow(8px 8px 10px orange);
  margin-left: 100px;
  border-radius: 10%;
  float:left;
}

/* FOOTER */
#footer {
  padding: 3% 1%;
  text-align: center;
  background-color: #BB8760;
  filter: blur(0.5);
}

.footer-icon {
  margin: 1%;
}

</style>

  </head>

  <body>

<!-- JS and Razorpay quick links -->

      <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="">Team Altruistic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#footer">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#btn">Donate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#mail">Subscribe</a>
                    </li>

                  </ul>
              </div>
            </nav>

<!-- Call to Action -->
<div class="main">

  <div id="heading">
    <h2>Join Hands 🤝</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
  </div>
  <br><br>

<img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2hhcml0eXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="children">

<div id="donate-info">
      <form action="payment_process.php" method="POST">
        <input type="textbox" name="name" id="name" placeholder="Enter your name">
        <br><br>
        <input type="textbox" name="amt" id="amt" placeholder="Enter amount">
        <br><br>
        <input type="button" name="btn" id="btn" value="DONATE" onclick="pay()">
      </form>
    </div>
    </div>

    <!-- OR YOU CAN USE THE BELOW BUTTON TOO:

<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HZKnPMhZ4mDlVX/view" data-text="Pay Now" data-color="#528FF0" data-size="small">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div> -->

<!-- Footer -->

<footer class="white-section" id="footer">
<i class="footer-icon fab fa-twitter"></i>
<i class="footer-icon fab fa-facebook"></i>
<i class="footer-icon fab fa-instagram"><a href="https://www.instagram.com/team_altruistic_offical/?utm_medium=copy_link"></a></i>
<i id="mail" class="footer-icon fas fa-envelope"></i>
  <p>© Copyright 2021 Team Altruistic</p>

</footer>

    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
