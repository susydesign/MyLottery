<!DOCTYPE html>
<html lang="hu">
<!--
Job28,20
  "Honnan jön tehát a bölcsesség? Hol van az értelem lelőhelye?"
Job28,23
  "Isten ismeri az ahhoz vezető utat, ő tudja annak lelőhelyét."
!-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
    <link rel="icon" href="./images/logo.png" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
<!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
!-->  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
                  <a id="header_a1" href="index.php">Home</a>
                </li>
                <li>
                  <a href="about-us.html">About Us</a>
                </li>
                <li>
                  <a href="revards.html">Rewards</a>
                </li>
                <li>
                  <a href="news.html">News</a>
                </li>
                <li>
                  <a href="contact.html">Contact Us</a>
                </li>
              </ul>
            </div>  
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
                        $u_nev=$_SESSION['username'];
                        $user_id=$_SESSION['user_id'];   
                      ?> 
                      <button type="button  " class="btn btn-fogad" data-toggle="modal" data-target="#modal_Wallet">
                      <?php echo $u_nev ?>
                      </button>                    
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
    
    <section id="fogadas">
      <div class="container register">
        <div class="row fogad_main">
          <div class="col-md-4 register-left fogad_ball">
            <img src="./images/logo.png" alt=""/>
        <div id="timediv" class="form-control shadow rounded"></div>
        <h3>3.647.489€</h3>
        <p>This prize could be yours today...</p>
        <div class="col-md">
          <div id="credit_head"><h1>Your Credit</h1></div>
          <div id="credit" class="row">
            </div>
          </div>
          <button type="button" class="btn btn-fogad" data-toggle="modal" data-target="#modal_Wallet">Wallet</button>

        </div>
      <div class="col-md-8 register-right fogad_jobb">
        
        <div class="row fogad_gombok">
          <div class="col-md-12">
            <button id="btnfogad1" class="myBtnFogad myBtnFogadOFF" onclick="clc_fogad('btnfogad1','false')" >Hour</button>
            <button id="btnfogad2" class="myBtnFogad myBtnFogadOFF" onclick="clc_fogad('btnfogad2','false')">Daily</button>
            <button id="btnfogad3" class="myBtnFogad myBtnFogadOFF" onclick="clc_fogad('btnfogad3','false')">Weekly</button>
            <button id="btnfogad4" class="myBtnFogad myBtnFogadOFF" onclick="clc_fogad('btnfogad4','false')">Monthly</button>
          </div>
        </div>
        
        <div class="row bonus_gombok">
          <h1>B O N U S</h1>
          <div class="col-md-12">
            <button id="btnBonus1" class="myBtnBonus myBtnFogadOFF" onclick="clc_fogad('btnBonus1','true')" >Hour</button>
            <button id="btnBonus2" class="myBtnBonus myBtnFogadOFF" onclick="clc_fogad('btnBonus2','true')">Daily</button>
            <button id="btnBonus3" class="myBtnBonus myBtnFogadOFF" onclick="clc_fogad('btnBonus3','true')">Weekly</button>
            <button id="btnBonus4" class="myBtnBonus myBtnFogadOFF" onclick="clc_fogad('btnBonus4','true')">Monthly</button>
          </div>
        </div>

        <div class="row fogad_inp1">
          <div class="col-md-12">
            <form action="./php/jatek_tarolo.php" method="post" target="print-popup">
              <input id="inp_id" type="hidden" value="<?php echo $user_id;?>" name="fuser">
              <input id="inp_bonus" type="hidden" value='false' name="bonus">
              <input id="inp_fog1" type="time" step="2" class="inp_fogad1" placeholder="Hour-Min-Sec" name="fogad1">
          </div>
        </div>

        <div class="row fogad_inp2">
          <div class="col-md-12 input-group">
            <select id=inp_fog2 class="form-control inp_fogad2" valur="Tuesday" name="fogad2">
              <option>Monday</option>
              <option>Tuesday</option>
              <option>Wednesday</option>
              <option>Tursday</option>
              <option>Friday</option>
              <option>Saturday</option>
              <option>Sunday</option>
            </select>

            <input id="inp_fog3" type="week" class="form-control inp_fogad3" value="" name="fogad3">
 
            <select id=inp_fog4 class="form-control inp_fogad4" value="December" name="fogad4">
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>Oktober</option>
              <option>November</option>
              <option>December</option>
            </select>

          </div>
        </div>  


        <div class="row fogad_elkuld">
          <div class="col-md-12">
            <input type="submit" class="btnRegister" onclick="nullaz()" value="Bet"/>
            </form> 
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
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSczfNxwKy_f-cQ04el6z0hXk8iGwHHc6tavYwwnEil7tNWUgw/viewform?usp=sf_link" class="boxBtn">
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

<!-- Modal - Wallet !-->
<div class="modal fade" id="modal_Wallet" tabindex="-1" role="dialog" aria-labelledby="walletModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="walletModalLabel"><h1><?php echo $u_nev ?> - Wallet</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h3>credit : <span><?php echo $_SESSION['amunt'] ?></span></h3>
      <h5>Bonus - pieces</h5>
      <h3>Total   : <span><?php echo $_SESSION['bonus'] ?></span></h3>
      <h3>Hour    : <span><?php echo $_SESSION['bonus1'] ?></span></h3>
      <h3>Daily   : <span><?php echo $_SESSION['bonus2'] ?></span></h3>
      <h3>Weekly  : <span><?php echo $_SESSION['bonus3'] ?></span></h3>
      <h3>Monthly : <span><?php echo $_SESSION['bonus4'] ?></span></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="paypal_in">Credit purchase</button>
        <button type="button" class="btn btn-primary" id=paypal_out>Paymant</button>
      </div>
    </div>
  </div>
</div>


</html>