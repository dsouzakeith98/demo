
<!DOCTYPE html>
<html>

<head><?php
session_start();

?>

</head>

<body>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/flip.css">

  <link rel="stylesheet" type="text/css" href="css/import.css">
  <link rel="stylesheet" type="text/css" href="css/join.css">
  <link rel="stylesheet" type="text/css" href="css/newform.css">
   <link rel="stylesheet" type="text/css" href="css/loginnew.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/belownav.css">
   

 <div class="belnav">
<a href="logout.php"><img src="images/loout.png" width="27px" height="27px" style="margin-top: 5px;"></a>


<div class="avatar"> 
      <a><b><?php echo $_SESSION['firstname']; ?></b> &nbsp;<i class="arrow down" style="margin-bottom: 3px;"></i>
                </a>     
         <a><img src="images/avatarlogin.png"> </a>
           </div> 
  
  </div>


  <div class="topnav" id="myTopnav">
    <img src="images/mtlogo1.png" width="125" height="72"
        style=" margin-left: 50px; margin-top: -4px;">
   
    <a href="cyclingmain.html">About us</a>
    <a href="bookdetails.php">Booking</a>
 
    <a href="cyclingmain.php">Cycling</a>
    <a href="homepage.php">Trekking</a>
  </div>





<div class="modal2">
  <div class="modal2-container2">
    <div class="modal2-left2">
      <h1 class="modal2-title2">Login!</h1>
     
    
      <div class="input2-block2">
        <label for="email" class="input2-label2">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
      </div>
   



      <div class="input2-block2">
        <label for="password" class="input2-label2">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>

   

     

  
  <button type="submit" class="submit" name="submit" value="submit" class="example_f modal2-button2">Sign Up</button>
 </div>
    <div class="modal2-right2">
      <img src="images/cyc.jpg" alt="">
    </div>
    <button class="icon2-button2 close2-button2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
      </button>
  </div>

   
</div>



<script type="text/javascript">

    const body2 = document.querySelector("body");
const modal2 = document.querySelector(".modal2");

const modalButton2 = document.querySelectorAll(".modal2-button2");
const closeButton2 = document.querySelector(".close2-button2");
const scrollDown2 = document.querySelector(".scroll2-down2");
const submit2 = document.querySelector('.submit');
let isOpened2 = false;

const openModal = () => {
  modal2.classList.add("is-open2");
  body2.style.overflow = "hidden2";
};

const closeModal = (e) => {
  e.preventDefault();
  modal2.classList.remove("is-open2");
  body2.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened2) {
    isOpened2 = true;
    scrollDown2.style.display = "none";
    openModal();
  }
});

modalButton2.forEach(btn => btn.addEventListener("click", openModal));
closeButton2.addEventListener("click", closeModal);
submit2.addEventListener('click',storeindb)

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};

  </script>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


  <div class="grid-container">

    <div class="row">

      <div class="grid-item item3">
        <div class="lab"><br>Make your experience <br>unforgetable</div>
        <div class="p">
          <br><br>
          There is something humbling about <strong>Mountains</strong>. Maybe it’s their tall and grandiose appearance
          or
          the initial intimidation when you cast your eyes on it. But ultimately, the most humbling part is the sense of
          accomplishment that you get after<strong> Climbing</strong> one!

        </div>
        <div class="example_f">
          <button class="modal-button">
            <span>Join us </span>
          </button>
        </div>

      </div>
      <div class="grid-item item2">
        <img class="mySlides" src="images/main.jpg" style=" height: 100%; width: 100%">
        <img class="mySlides" src="images/cyc2.jpg" style=" height: 100%; width: 100%">
        <img class="mySlides" src="images/fire.jpg" style=" height: 100%; width: 100%">
        <img class="mySlides" src="images/cyc5.jpg" style=" height: 100%; width: 100%">


        <script>
          var myIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
              myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3400); // Change image every 2 seconds
          }
        </script>

      </div>







    </div>


    <div class="row icons">

      <div class="grid-item item4">
        <div class="container">
          <img src="images/cyc1.jpg" class="image" style="width: 300px;">
          <div class="overlay">
            <div class="text"><br><br>Experience Cycling
              <div class="c"><br>
                Let your Frustration run the paddles.<br>Join with us &<br>experiance the adventure of Cycling

              </div>
             <div class="example_f">
          <button class="modal-button">
            <span>Join us </span>
          </button>
        </div>

      </div>
          </div>
        </div>
      </div>
<div class="grid-item itempull">
        <div class="container">
          <img src="images/play.png" class="image" style="width: 300px;">
  </div>
</div>

      <div class="grid-item item7">
        <div class="container">
          <img src="images/trek.jpg" class="image" style="width: 300px;">
          <div class="overlay">
            <div class="text"><br><br>Experience Trekking
              <div class="c"><br>
                Let your Determination <br>& Strength take you to the top.<br>
                Trek with us & explore the nature.

              </div>
              <div class="example_f">
                <button class="modal-button">
                  <span>Join us </span>
                </button>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="row">
      <hr class="new4">
      </div>

      <div class="grid-item itemAD1">
        <div class="lab8">Why Should I Trek With Mt.Kinetics ?</div>
        
    </div>



    <div class="row icons">
      <div class="grid-item icon">
        <img src="images/camp.png" width="45" height="45">
        <div class="lab2">Accomodation</div>
        <div class="p">
          Do you want to spend the cold night in a cozy cottage or are you someone who's looking to camp under starry night sky? With us, you can choose either!
        </div>
      </div>

      <div class="grid-item icon">
        <img src="images/food.png" width="45" height="45">
        <div class="lab2">Nutritious Food</div>
        <div class="p">
          We provide you with mouth watering local cusine which varies according to your destination. While doing so, we
          make sure that we keep the nutritive value in check.
        </div>
      </div>


      <div class="grid-item icon">
        <img src="images/cash.png" width="45" height="45">
        <div class="lab2">Reasonable Price</div>
        <div class="p">
          Sustainability is our founding principle and improving local economy is one of the best ways to attain the
          same.
          Our treks are moderately priced and the income is distributed with the company and the locals after deducting
          all the expenses.
        </div>
      </div>

      <div class="grid-item icon">
        <img src="images/guide.png" width="45" height="45">
        <div class="lab2">Expert Guide</div>
        <div class="p">
          A trekking organisation is only as good as it's trek leaders and we have trek leaders who are extremely passionate, knowledgeable, experienced and extremely fun!
        </div>
      </div>

      <div class="grid-item icon">
        <img src="images/group.png" width="45" height="45">
        <div class="lab2">Interactions & Activities</div>
        <div class="p">
          We keep the dynamics of the team in mind and design the activities accordingly. After a long day of trek,
          sharing stories around the campfire is everybody's favourite!
        </div>

      </div>

      <div class="grid-item icon">
        <img src="images/bus.png" width="45" height="45">
        <div class="lab2">Private Transport </div>
        <div class="p">
         If you are trekking with us, your transportation will be hassle free. Varying from train journey to private transportation, we take care of everything.<br><br>
        </div>
      </div>



    </div>

    <div class="row">
      <div class="grid-item itemAD">
        <hr class="new4">
        <div class="lab8">Founders</div>
      </div>
    </div>

    <div class="row">
      <div class="grid-item itemAB">
        <div class="container">
          <img src="images/shiv1.jpg" width="150px" height="150px" style="border-radius: 50%; padding: 10px;">
        </div>
        <div class="quote">
          <p><span>“</span> May be hiking up the diverse terrains of the western ghats to reach the top of world or to cycle under the thick dark canopy of evergreen forest. We found our redemption in these great wilderness, in these pleasant breeze which whispers freedom and the strangers who teach us affection. It's time that you did too!<div class="quoteB"><p><span>”</span></p>
        </div><b style="float: right; font-size: 12px;">-Shivprasad Bajakaramole</b></p>
      </div>

    </div>

    <div class="grid-item itemAC">
      <div class="container">
        <img src="images/clin.jpg" width="150px" height="150px" style="border-radius: 50%; padding: 10px;">
      </div>
      <div class="quote">
        <p><span>“</span>Pain is temporary. It may last a minute, or an hour, or a day, or a year, but eventually it will subside and something else will take its place. either it is against you or you’re having a good day. If I quit, however, it lasts forever <div class="quoteB"><p><span>”</span></p>
      </div>
      <b style="float: right;font-size: 12px">-Clinton Baptist</b></p>
    </div>
  </div>

  </div>





  <div class="row">
    <div class="grid-item item15">
      <div class="align">
        <br>
        <div> <img src="images/mountain2.png"></div>
      </div>
    </div>
  </div>


  <footer>
    
    <div class="grid-item item22">
      <div class="container">
        <div> <img src="images/mtlogo1.png" width="125" height="80"></div>
        <div class="p1"><br>
          Orain Plaza, opp Ocean Pearl, Mangalore<br><br>
          Phone: 0824-224649<br><br>
          <a>@mtkinetics123</a></br>

          
        </div>
      </div>
    </div>
    

    <div class="grid-item item21">
      <div class="container">
        <br>
        <div class="lab3">About us</div><br><br>
        <div class="p1">
          Careers<br><br>
          Help & FAQs<br><br>
          Privacy Policy<br><br>
          Terms of Usage<br><br>

        </div>
      </div>
    </div>

    <div class="grid-item item20">
      <div class="container">
        <br>
      <div class="lab3">Contact</div><br><br>
        <div class="p1">
          <a href="https://www.instagram.com/"><img src="images/icon1.png" width="29" height="28" style=" margin: -2px;"></a>
          <a href="https://www.facebook.com/"><img src="images/icon2.png" width="26" height="25" style="border-radius: 9px; margin-left: 20px;"></a>
          <a href="https://twitter.com/"><img src="images/icon3.png" width="26" height="25" style="margin-left: 20px;"></a>
        </div>
        <br/>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.09409989759243!2d74.84096129235354!3d12.875177558155643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDUyJzMwLjQiTiA3NMKwNTAnMjcuOCJF!5e0!3m2!1sen!2sin!4v1609768591898!5m2!1sen!2sin" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>


  </footer>

<div class="container"></div>
<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Sign Up!</h1>
     
      <div class="input-block">
        <label for="fname" class="input-label">Full Name</label>
        <input type="textbox" name="fname" id="fname" placeholder="Full Name">
      </div>
      <div class="input-block">
        <label for="email" class="input-label">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
      </div>
        <div class="input-block">
      <label for="phone" class="input-label">Phone</label>
        <input type="number" name="phone" id="phone" placeholder="+91 " >
      </div>
        <div class="input-block">
        <label for="dateof" class="input-label">Date of Birth</label>
        <input type="date" name="dateof" id="dateof" placeholder=" ">
      </div>



      <div class="input-block">
        <label for="password" class="input-label">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>

     <div class="input-block">
        <label for="cpassword" class="input-label">Confirm Password</label>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
      </div>

     

  
  <button type="submit" class="submit" name="submit" value="submit" class="example_f modal-button">Sign Up</button>
 </div>
    <div class="modal-right">
      <img src="images/cyc.jpg" alt="">
    </div>
    <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
      </button>
  </div>

   
</div>

</div>

<div id="snackbar"></div> 


<script>
function myFunction(popup) {
  var x = document.getElementById("snackbar");
  x.className = "show";
  x.innerHTML=popup;
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function storeindb()

{
    const successMessage = `
<div class="success-message">
  <div class="icon">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
  <g>
    <g>
      <path d="M497.36,69.995c-7.532-7.545-19.753-7.558-27.285-0.032L238.582,300.845l-83.522-90.713
        c-7.217-7.834-19.419-8.342-27.266-1.126c-7.841,7.217-8.343,19.425-1.126,27.266l97.126,105.481
        c3.557,3.866,8.535,6.111,13.784,6.22c0.141,0.006,0.277,0.006,0.412,0.006c5.101,0,10.008-2.026,13.623-5.628L497.322,97.286
        C504.873,89.761,504.886,77.54,497.36,69.995z"/>
    </g>
  </g>
  <g>
    <g>
      <path d="M492.703,236.703c-10.658,0-19.296,8.638-19.296,19.297c0,119.883-97.524,217.407-217.407,217.407
        c-119.876,0-217.407-97.524-217.407-217.407c0-119.876,97.531-217.407,217.407-217.407c10.658,0,19.297-8.638,19.297-19.296
        C275.297,8.638,266.658,0,256,0C114.84,0,0,114.84,0,256c0,141.154,114.84,256,256,256c141.154,0,256-114.846,256-256
        C512,245.342,503.362,236.703,492.703,236.703z"/>
    </g>
  </g>
  </svg>
    </div>
    <h1>Sign Up Successful</h1>
  </div>
`
  const closeButton = document.querySelector(".close-button");
    let fname=document.getElementById("fname").value;
    let pass=document.getElementById("password").value;
    let mail=document.getElementById("email").value;
    let contact=document.getElementById("phone").value;
    let dob=document.getElementById("dateof").value;
    const modalLeft = document.querySelector('.modal-left');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this.responseText);
                if(/error/.test(this.responseText.toLowerCase())){
                  const errEl = document.createElement('div');
                  errEl.innerHTML = `<br><small><b><font color="red";> Some Error Occured</font></b></small>`
                  modalLeft.append(errEl)
                  return;
                }
                modalLeft.innerHTML = successMessage
                // closeButton.click()
            }
        };
        let param = "&fname="+ fname
        +"&email="+ mail
        +"&password="+ pass
        +"&phone="+ contact
         +"&dateof="+ dob

       

        xmlhttp.open("GET","web.php?"
            + param
            , true);
        xmlhttp.send();
}
</script>



<script type="text/javascript">

    const body = document.querySelector("body");
const modal = document.querySelector(".modal");

const modalButton = document.querySelectorAll(".modal-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
const submit = document.querySelector('.submit');
let isOpened = false;

const openModal2 = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeModal2 = (e) => {
  e.preventDefault();
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal2();
  }
});

modalButton.forEach(btn => btn.addEventListener("click", openModal2));
closeButton.addEventListener("click", closeModal2);
submit.addEventListener('click',storeindb)

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal2() : false;
};

  </script>
</body>
</html>
