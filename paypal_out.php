<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
    <link rel="icon" href="./images/logo.png" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./js/services_paypal.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Mylottery</title>
</head>


<body>
  <header>
      <div id="fejlec" class="container-fluid">
        <div  class="row">
  
          <div id="fejlec-01" class="col-md-4">
          </div>
  
          <div id="fejlec-02" class="col-md-4">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>
                    <img src="./images/logo.png" alt=""/>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div id="info">
                      <?php
                      session_start();
                      Echo $_SESSION['username'];
                    ?> 

                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <div id="fejlec-03" class="col-md-4">
          <a id="btnlogin" class="mylBtn btnS glow btnBlack"  href="./php/login.php">Login</a>
            <a class="mylBtn btnS glow btnDYellow" href="./php/registration.php" style="margin-left: 15px;">Sign Up</a>
          </div>
      </div>        
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="header left">PayPal - Credit Paymant</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form>
              <div class="form-group">
                <label for="paypalIn">PayPal Paymant</label>
                <input type="text" class="form-control" id="paypalIn" aria-describedby="paypalInHelp" placeholder="Enter amunt">
                <small id="paypalInHelp" class="form-text text-muted">Enter minus credit amunt</small>
              </div>
              <button id="btn-payout" type="submit" class="btn btn-primary">Purchase</button>

            </form>
            </br></br></br>
            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequa

            </p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.  
            </p>
        </div> 
    </div>


  <footer>
    <section id="CTANewsletter">
      <div class="CTA glow">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-6">
                      <h1 class="header left">Stay up to date!</h1>
                      <h3 class="subHeader">Subscribe to our newsletter for more <b>informaitons</b> and <b>news</b>!</h3>
                  </div>
                  <div class="col-md-6">
                      <div class="CTADiv">
                          <input class="CTAEmail" type="text" placeholder="Enter Email address"><a class="CTABtn">Subscribe</a>
                      </div>
                      
                  </div>                
              </div>
          </div>
      </div>
    </section>
  
    <section id="fullWidthHeader">
      <h1 class="header center">Have a questions? We give you the Answer!</h1>
    </section>
  
    <section id="contactArea">
      <div class="container">
        <div class="row">
  
          <div class="col-4">
            <div class="btnBox">
              <a href="#" class="boxBtn">
                <i class="fas fa-question"></i>
                <p>Frequerntly asked questions</p>
              </a>
            </div>
          </div>
  
          <div class="col-4">
            <div class="btnBox">
              <a href="" class="boxBtn">
                <i class="fas fa-envelope"></i>
                <p>Send us an e-mail</p>
              </a>
            </div>
          </div>
  
          <div class="col-4">
            <div class="btnBox">
              <a href="" class="boxBtn">
                <i class="fab fa-facebook-messenger"></i>
                <p>Send us a message on Facebook</p>
              </a>
            </div>
          </div>                
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h3>Get In Touch!</h3>
              <p>email@email.dom</p>
              <p>+36 (30) 1234567</p>
              <p>1234 Land, Adress str. 123</p>
            </div>
            <div class="col-md-6">
            <p>Contact me at one of the contact details provided. I will respond to all questions within 24 hours!</p>
            <a href="#" class="mylBtn btnL glow btnDYellow">About Winners</a>
            </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <p>My Time Lotto 2020 ©︱All Rights reserved.</p>
            </div>
            <div class="col-md-6">
            <ul>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Regulations</a></li>
            </ul>
            </div>        
        </div>
      </div>
    </section>  
</footer>

</body>

