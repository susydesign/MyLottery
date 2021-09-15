<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
    <link rel="icon" href="./images/logo.png" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
<!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
!-->  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/services.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Mylottery</title>
</head>


<body>
  <header>
      <div id="fejlec" class="container-fluid">
        <div  class="row">
  
          <div id="fejlec-01" class="col-md-4">
            <div id="topMenu">
              <ul>
                <li>
                  <a id="header_a1" href="/">Home</a>
                </li>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="#">Rewards</a>
                </li>
                <li>
                  <a href="#">News</a>
                </li>
                <li>
                  <a href="#">Contact Us</a>
                </li>
              </ul>
            </div>  
          </div>
  
          <div id="fejlec-02" class="col-md-4">
            <table class="table">
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
                        $s_id=session_id();
                        $u_nev=$_SESSION['username'];
                        print "<p>$u_nev</p>";
                      ?> 
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <div id="fejlec-03" class="col-md-4">
<!--
          <button class="mylBtn btnS glow btnBlack" data-toggle="modal" data-target="#myModal">Login</button>
          <a id="btnlogin" class="mylBtn btnS glow btnBlack" onclick='logaction()'href="#">Login</button>        
-->              
            <a id="btnlogin" class="mylBtn btnS glow btnBlack"  href="./php/login.php">Login</button>
            <a class="mylBtn btnS glow btnDYellow" href="#" style="margin-left: 15px;">Sign Up</a>
          </div>
      </div>        
    </div>
  </header>

  <section id="welcome">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                  <h1 class="welcome header center">Welcome to  My Time Lotto!</h1>
                  <p class="welcome text-center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                      Ut enim ad minim veniam, quis nostrud exercitation<br></p>
              </div>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="jackpot text-center">
                      <span>28.454.656€</span>
                      <br>Jackpot Total
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12" style="text-align: center; margin-top:90px">
                  <a href="#" class="mylBtn btnL glow btnDYellow">Sign Up</a>
                  <a style="margin-left: 40px;" href="#" class="mylBtn btnL glow btnBlack">Play</a>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size:21px; text-align:center; margin-top:80px; font-weight: 300">Senectus et netus et malesuada. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Neque convallis a cras semper auctor.</p>
              </div>
          </div>
      </div>
  </section>

  <section id="fogadas")
  <div class="container-fluid">
      <div class="row">
      <!--
          <div class="col-md-4">
              <div class="container">
                  <h1 class="text-center">Ide jönnek az infók</h1>
              </div>
          </div>

      -->

          <div class="col-md-12">
              <div class="container">
                  <div class="container register">
                      <div class="row">
                          <div class="col-md-3 register-left">
                              <img src="./images/logo.png" alt=""/>
                              <h3>3.647.489Ft</h3>
                              <p>Ezt az összeget ma valaki haza viszi...</p>
                              <input type="submit" name="login" onclick="sub_login()" value="Login"/><br/>
                          </div>
                          <div class="col-md-9 register-right">
                              <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Éles verseny</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="demo-tab" data-toggle="tab" href="#demo" role="tab" aria-controls="demo" aria-selected="false">DEMÓ</a>
                                  </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <h3 class="register-heading">Az idő pénz</h3>
                                      
                                      <div class="row register-form" id="fogadas1">
                                          <div class="col-md-4"></div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <input type="time" step="2" class="form-control" placeholder="Óra *" value="" />
                                              </div>
                                          </div>
                                          <div class="col-md-4"></div>
                                      </div>
                      
                                      <div class="row register-form">
                                          <div class="col-lg-3">
                                              <div class="form-group">
                                                  <input type="mouth" class="form-control" placeholder="Év" value="2020" />
                                              </div>
                                          </div>
                                          <div class="col-lg-5">
                                              <div class="form-group">
                                                  <input type="week" class="form-control" name="het" placeholder="Hét" value="" />
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="form-group">
                                                  <select id="nap" class="form-control" name="naplist" form="napform">
                                                      <option value="hetfo">Hétfö</option>
                                                      <option value="kedd">Kedd</option>
                                                      <option value="szerda">Szerda</option>
                                                      <option value="csutortok">Csütörtök</option>
                                                      <option value="pentek">Péntek</option>
                                                      <option value="szombat">Szombat</option>
                                                      <option value="vasarnap">Vasárnap</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <input type="submit" class="btnRegister" onclick="sub_fogadas()" value="fogadas"/>
                                      </div>
                                  </div>
                                  <div class="tab-pane fade show" id="demo" role="tabpanel" aria-labelledby="demo-tab">
                                      <h3  class="register-heading">Demo Játék</h3>
                                      <div class="row register-form">
                                          <div class="col-lg-2">
                                              <div class="form-group">
                                                  <input type="mouth" class="form-control" placeholder="Év" value="2020" />
                                              </div>
                                          </div>
                                          <div class="col-lg-4">
                                              <div class="form-group">
                                                  <input type="week" class="form-control" name="het" placeholder="Hét" value="" />
                                              </div>
                                          </div>
                                          <div class="col-lg-3">
                                              <div class="form-group">
                                                  <select id="nap" class="form-control" name="naplist" form="napform">
                                                      <option value="hetfo">Hétfö</option>
                                                      <option value="kedd">Kedd</option>
                                                      <option value="szerda">Szerda</option>
                                                      <option value="csutortok">Csütörtök</option>
                                                      <option value="pentek">Péntek</option>
                                                      <option value="szombat">Szombat</option>
                                                      <option value="vasarnap">Vasárnap</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-lg-3">
                                              <div class="form-group">
                                                  <input type="time" step="2" class="form-control" placeholder="Óra *" value="" />
                                              </div>
                                          </div>
                                          <input type="submit" class="btnRegister" onclick="sub_jatek()" value="Elméleti Fogadás"/>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </section>

  <section id="wallOfWinners">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 verticalLine"></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1 class="header center" style="margin-bottom: 90px"><span>Wall of Winners</span></h1>
          </div>
        </div>
        <div class="winnerBox">
            <div class="row">
              <div class="col-md-12">      
                <h2>Top Winners</h2>
              </div>
            </div>
  
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                            <div class="topUserRow row justify-content-center">
                  <div class="number">1</div>
                  <div class="col-5 user">User 1</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                              <div class="topUserRow row justify-content-center">
                  <div class="number">2</div>
                  <div class="col-5 user">User 2</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                              <div class="topUserRow row justify-content-center">
                  <div class="number">3</div>
                  <div class="col-5 user">User 3</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                              <div class="topUserRow row justify-content-center">
                  <div class="number">4</div>
                  <div class="col-5 user">User 4</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                
  
              </div>
              <div class="col-md-6 text-center">
                            <div class="topUserRow row justify-content-center">
                  <div class="number">5</div>
                  <div class="col-5 user">User 5</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                              <div class="topUserRow row justify-content-center">
                  <div class="number">6</div>
                  <div class="col-5 user">User 6</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                              <div class="topUserRow row justify-content-center">
                  <div class="number">7</div>
                  <div class="col-5 user">User 7</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                              <div class="topUserRow row justify-content-center">
                  <div class="number">8</div>
                  <div class="col-5 user">User 8</div>
                  <div class="col-3 prize">11200 €</div>
                </div>
                            
            </div>
          </div>
            <div class="row">
              <div class="col-md-12">      
                <h2>Latest Winners</h2>
              </div>
            </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 lw">
                          <table style="width: 100%;">
                              <tr style="padding: 20px;">
                                  <td><span class="user">User 6</span></td>
                                  <td><span class="user">User 7</span></td>
                                  <td><span class="user">User 8</span></td>
                                  <td><span class="user">User 9</span></td>
                              </tr>
                              <tr style="padding: 20px;">
                                  <td><span class="prize">120 €</span></td>
                                  <td><span class="prize">120 €</span></td>
                                  <td><span class="prize">120 €</span></td>
                                  <td><span class="prize">120 €</span></td>
                              </tr>
                              <tr style="padding: 20px;">
                                  <td><span class="time">14:55:32</span></td>
                                  <td><span class="time">14:55:32</span></td>
                                  <td><span class="time">14:55:32</span></td>
                                  <td><span class="time">14:55:32</span></td>
                              </tr>
                              <tr style="padding: 20px;">
                                  <td><span class="date">(2020.09.17)</span></td>
                                  <td><span class="date">(2020.09.17)</span></td>
                                  <td><span class="date">(2020.09.17)</span></td>
                                  <td><span class="date">(2020.09.17)</span></td>
                              </tr>
                          </table>
                      </div>
                  </div>
              </div>
  
          </div>
        </div>
      </div>
  
  </section>
  <section id="findOut">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="header left">
              Find out more about the winners!
            </h2>
          </div>
          <div class="col-md-8">
            <p>
              Lorem ipsum dolor sit amet, consecLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
            
          </p></div>
          <div class="col-md-4 text-right">
            <a href="#" class="mylBtn btnL glow btnDYellow">About Winners</a>
          </div>    
        </div>
        <div class="row">
          <div class="col-md-3 divider"></div>
          <div class="col-md-9"></div>
        </div>
      </div>  
  </section>

  <section id="aboutTheGame">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="header left">About the Game</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p class="">Lorem ipsum dolor sit amet, consecLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mortis nisl ut an htuer adipiscing elit, sed diamuismod nt ut laoreet de mortl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulput, consecLorem ipsum dolor sit amet, consectetuer adipiscing egta</p>
          </div>
          <div class="col-md-6">
            <p class="">Lorem ipsum dolor sit amet, consecLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mortis nisl ut an htuer adipiscing elit, sed diamuismod nt ut laoreet de mortl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulput, consecLorem ipsum dolor sit amet, consectetuer adipiscing egta</p>
          </div>    
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="mylBtn btnL glow btnDYellow">Read More</a>
          </div>
        </div>
      
              
      </div>
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="header left">How to play?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p class="">Lorem ipsum dolor sit amet, consecLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mortis nisl ut an htuer adipiscing elit, sed diamuismod nt ut laoreet de mortl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulput, consecLorem ipsum dolor sit amet, consectetuer adipiscing egta</p>
          </div>
          <div class="col-md-6">
            <p class="">Lorem ipsum dolor sit amet, consecLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mortis nisl ut an htuer adipiscing elit, sed diamuismod nt ut laoreet de mortl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulput, consecLorem ipsum dolor sit amet, consectetuer adipiscing egta</p>
          </div>    
        </div>
        <div class="row">
          <div class="col-md-3 divider"></div>
          <div class="col-md-9"></div>
        </div>
      
              
      </div> 
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="header left">About Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="">Lorem ipsum dolor sit amet, consecLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mortis nisl ut an htuer adipiscing elit, sed diamuismod nt ut laoreet de mortl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulput, consecLorem ipsum dolor sit amet, consectetuer adipiscing egta</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="mylBtn btnL glow btnDYellow">Know More</a>
          </div>
        </div>
      
              
      </div> 
      
      
  </section>
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
<!-- Large modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  ×</button>
              <h4 class="modal-title" id="myModalLabel">
                  Login/Registration </h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                          <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                          <div class="tab-pane active" id="Login">
                              <form role="form" class="form-horizontal">
                              <div class="form-group">
                                  <label for="email" class="col-sm-2 control-label">
                                      Email</label>
                                  <div class="col-sm-10">
                                      <input type="email" class="form-control" id="email1" placeholder="Email" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                      Password</label>
                                  <div class="col-sm-10">
                                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-2">
                                  </div>
                                  <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary btn-sm">
                                          Submit</button>
                                      <a href="javascript:;">Forgot your password?</a>
                                  </div>
                              </div>
                              </form>
                          </div>
                          <div class="tab-pane" id="Registration">
                              <form role="form" class="form-horizontal">
                              <div class="form-group">
                                  <label for="email" class="col-sm-2 control-label">
                                      Name</label>
                                  <div class="col-sm-10">
                                      <div class="row">
                                          <div class="col-md-3">
                                              <select class="form-control">
                                                  <option>Mr.</option>
                                                  <option>Ms.</option>
                                                  <option>Mrs.</option>
                                              </select>
                                          </div>
                                          <div class="col-md-9">
                                              <input type="text" class="form-control" placeholder="Name" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="email" class="col-sm-2 control-label">
                                      Email</label>
                                  <div class="col-sm-10">
                                      <input type="email" class="form-control" id="email" placeholder="Email" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="mobile" class="col-sm-2 control-label">
                                      Mobile</label>
                                  <div class="col-sm-10">
                                      <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="col-sm-2 control-label">
                                      Password</label>
                                  <div class="col-sm-10">
                                      <input type="password" class="form-control" id="password" placeholder="Password" />
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-2">
                                  </div>
                                  <div class="col-sm-10">
                                      <button type="button" class="btn btn-primary btn-sm">
                                          Save & Continue</button>
                                      <button type="button" class="btn btn-default btn-sm">
                                          Cancel</button>
                                  </div>
                              </div>
                              </form>
                          </div>
                      </div>
                      <div id="OR" class="hidden-xs">
                          OR</div>
                  </div>
                  <div class="col-md-4">
                      <div class="row text-center sign-with">
                          <div class="col-md-12">
                              <h3>
                                  Sign in with</h3>
                          </div>
                          <div class="col-md-12">
                              <div class="btn-group btn-group-justified">
                                  <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                      Google</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

</html>