<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<!-- FONT-AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<style >
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

* {
  box-sizing: border-box;
}

/* CONTENT */
.thanku{
  background-image: url("https://thumbs.dreamstime.com/b/charity-relief-work-children-s-hands-173321392.jpg");
   height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  filter: blur(5px);
  -webkit-filter: blur(5px);

}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;

  margin-top: 100px;
}

img{
  width:100px;
  height: 100px;
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

<!-- SUCCESS MESSAGE -->
<div class="thanku">
  <h3></h3>
</div>
<div class="bg-text">
  <img src="https://image.flaticon.com/icons/png/512/190/190411.png" alt="">
  <br>
  <h1>Payment Succesful</h1>
  <h1 style="font-size:50px">Thank you!</h1>

</div>

<!-- Footer -->

<footer class="white-section" id="footer">
<i class="footer-icon fab fa-twitter"></i>
<i class="footer-icon fab fa-facebook"></i>
<i class="footer-icon fab fa-instagram"></i>
<i id="mail" class="footer-icon fas fa-envelope"></i>
  <p>© Copyright 2021 Team Altruistic</p>

</footer>
