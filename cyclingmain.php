<!DOCTYPE html>
<html>
<?php
session_start();

?>
<head>

</script>

  <link rel="stylesheet" type="text/css" href="css/button1.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/nav.css">
      <link rel="stylesheet" type="text/css" href="css/login.css">
       <link rel="stylesheet" type="text/css" href="css/newform.css">
 
        <link rel="stylesheet" type="text/css" href="css/dropdown.css">
        <link rel="stylesheet" type="text/css" href="css/dropdown2.css">
       <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">



</head>
<body>
<style type="text/css">
  p
  {
    float: right;
    font-size: 16px;
  }
  .example_e  {

background-color: #e1ad01;
color: #ffffff !important;
font-weight: 500;
padding: 5px;
text-transform: uppercase;

display: inline-block;
font-family: sans-serif;
letter-spacing: 2px;
font-size: 10px;
float: left; 
}
</style>
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
    <img src="images/mtlogo1.png" width="125" height="80"
        style=" margin-left: 50px; margin-top: -8px;">
  
    <a href="run2.php">Home</a>
    <a href="cyclingmain.php">Cycling</a>
    <a href="homepage.php">Trekking</a>
    
  </div>
<div class="imagefit">
<img src="images/land.jpg">
 <div class="centered">Trekking</div>
 <div class="bottom-left">"When everthing feels like an uphill struggle,<br>Just think of the view from the top" </div>
 <div class="bottom">Tip 1: Always carry your belongings in a waterproof ziplock covers inorder to avoid getting your stuff wet incase of weather changes </div>
</div>
<div class="filter">
  <div>
   <form id="app-cover">
            <div id="select-box">
                    <input type="checkbox" id="options-view-button">
                    <div id="select-button" class="brd">
                            <div id="selected-value">
                                <span>Price / Trip</span>
                            </div>
                             <div id="arrow">
                                    <i class="arrow down"></i>
                                 
                            </div>
                           
                    </div>
                    <div id="options">
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="codepen">
                                    <input class="s-c bottom" type="radio" name="platform" value="codepen">
                                    <i class="fab fa-codepen"></i>
                                    <span class="label">₹499  -  ₹999</span>
                                    <span class="opt-val">₹499  -  ₹999</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="dribbble">
                                    <input class="s-c bottom" type="radio" name="platform" value="dribbble">
                                    <i class="fab fa-dribbble"></i>
                                    <span class="label">₹1000  -  ₹2999</span>
                                    <span class="opt-val">₹1000  -  ₹2999</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="behance">
                                    <input class="s-c bottom" type="radio" name="platform" value="behance">
                                    <i class="fab fa-behance"></i>
                                    <span class="label">₹3000  -  ₹4999</span>
                                    <span class="opt-val">₹3000  -  ₹4999</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="hackerrank">
                                    <input class="s-c bottom" type="radio" name="platform" value="hackerrank">
                                    <i class="fab fa-hackerrank"></i>
                                    <span class="label">₹5000  -  ₹6999</span>
                                    <span class="opt-val">₹5000  -  ₹6999</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="stackoverflow">
                                    <input class="s-c bottom" type="radio" name="platform" value="stackoverflow">
                                    <i class="fab fa-stack-overflow"></i>
                                    <span class="label">₹7000  -  ₹more..</span>
                                    <span class="opt-val">₹7000  -  ₹more..</span>
                            </div>
                          
                            <div id="option-bg"></div>
                    </div>
            </div>
    </form>


    <form id="app2-cover2">
            <div id="select2-box2">
                    <input type="checkbox" id="options2-view2-button2">
                    <div id="select2-button2" class="brd2">
                            <div id="selected2-value2">
                                <span>Level of Difficulty</span>
                            </div>
                             <div id="arrow2">
                                    <i class="arrow2 down2"></i>
                                 
                            </div>
                           
                    </div>
                    <div id="options2">
                            <div class="option2">
                                    <input class="s-c2 top2" type="radio" name="platform" value="codepen">
                                    <input class="s-c2 bottom2" type="radio" name="platform" value="codepen">
                  
                                    <span class="label2">Easy</span>
                                    <span class="opt2-val2">Easy</span>
                            </div>
                            <div class="option2">
                                    <input class="s-c2 top2" type="radio" name="platform" value="dribbble">
                                    <input class="s-c2 bottom2" type="radio" name="platform" value="dribbble">
                                  
                                    <span class="label2">Easy  -  Moderate</span>
                                    <span class="opt2-val2">Easy  -  Moderate</span>
                            </div>
                            <div class="option2">
                                    <input class="s-c2 top2" type="radio" name="platform" value="behance">
                                    <input class="s-c2 bottom2" type="radio" name="platform" value="behance">
                                   
                                    <span class="label2">Moderate</span>
                                    <span class="opt2-val2">Moderate</span>
                            </div>
                            <div class="option2">
                                    <input class="s-c2 top2" type="radio" name="platform" value="hackerrank">
                                    <input class="s-c2 bottom2" type="radio" name="platform" value="hackerrank">
                                   
                                    <span class="label2">Moderate - Difficult</span>
                                    <span class="opt2-val2">Moderate - Difficult</span>
                            </div>
                            <div class="option2">
                                    <input class="s-c2 top2" type="radio" name="platform" value="stackoverflow">
                                    <input class="s-c2 bottom2" type="radio" name="platform" value="stackoverflow">
                                  
                                    <span class="label2">Difficult</span>
                                    <span class="opt2-val2">Difficult</span>
                            </div>
                          
                            <div id="option2-bg2"></div>
                    </div>
            </div>
    </form>

  </div>
  <div>

  <div class="itemcontainer">

    <div class="item">
  

      <div>

      <div class="card">
  <img src="images/cyc1.jpg" alt="Avatar" style="width:100%">
  <div class="containerN">
     <label class="place">Mangalore-BC Road</label><br><br>
     <figcaption style="font-size: 13px; float: left; font-style: bold;">Dharmastala</figcaption>
     <img src="cycicon.png" style="float: left;">
     <figcaption style="font-size: 13px; float: left;">42km</figcaption><br><br>
     <div class="example_e">Difficult</div>
    <p class="price">₹699</p> <br>
    <div class="example_f" >
          <button class="modal-button">
              <span>Book Slot</span>
          </button>
    </div>
</div>
</div>

</div>

<div>
<div class="card">
  <img src="images/cyc6.jpg" alt="Avatar" style="width:100%">
  <div class="containerN">
     <label class="place">Karwar-Gokarna</label><br><br>
     <figcaption style="font-size: 13px; float: left; font-style: bold;">Madikeri</figcaption>
     <img src="cycicon.png" style="float: left;">
     <figcaption style="font-size: 13px; float: left;">34km</figcaption><br><br>
     <div class="example_e">Moderate</div>
    <p class="price">₹599</p> <br>
    <div class="example_f">
          <button class="modal-button">
              <span>Book Slot</span>
          </button>
    </div>

  </div>
</div>

  </div>

<div>
<div class="card">
  <img src="images/cyc3.jpg" alt="Avatar" style="width:100%">
  <div class="containerN">
    <label class="place">Karkala-Modibedri</label><br><br>
    <figcaption style="font-size: 13px; float: left; font-style: bold;">Shivmoga</figcaption>
    <img src="cycicon.png" style="float: left;">
    <figcaption style="font-size: 13px; float: left;">26km</figcaption><br><br>
    <div class="example_e">Moderate</div>
     <p class="price">₹599</p> <br>
     <div class="example_f">
          <button class="modal-button">
              <span>Book Slot</span>
          </button>
      </div>

  </div>
</div>

  </div>

  </div>

  <div class="item"> 
  <div>  
<div class="card">
  <img src="images/cyc2.jpg" alt="Avatar" style="width:100%">
  <div class="containerN">
    <label class="place">Mangalore-Ullal</label><br><br>
    <figcaption style="font-size: 13px; float: left; font-style: bold;">Agumbe</figcaption>
    <img src="cycicon.png" style="float: left;">
    <figcaption style="font-size: 13px; float: left;">18km</figcaption><br><br>
    <div class="example_e">Easy</div>
     <p class="price">₹299</p> <br>
       <div class="example_f">
          <button  class="modal-button" >
              <span>Book Slot</span>
          </button>
      </div>

  </div>
</div>

   </div>  
  

  <div>


<div class="card">
  <img src="images/cyc4.jpg" alt="Avatar" style="width:100%">
  <div class="containerN">
    <label class="place">Mangalore Highway</label><br><br>
    <figcaption style="font-size: 13px; float: left; font-style: bold;">Mangalore</figcaption>
    <img src="cycicon.png" style="float: left;">
    <figcaption style="font-size: 13px; float: left;">23km</figcaption><br><br>
    <div class="example_e">Easy</div>
    <p class="price">₹699</p> <br>
      <div class="example_f">
          <button class="modal-button">
              <span>Book Slot</span>
          </button>
      </div>

  </div>
</div>

  </div>
 <div>


<div class="card">
  <img src="images/cyc5.jpg" alt="Avatar" style="width:100%">
  <div class="containerN">
    <label class="place">Honavar-Murdeshwar</label><br><br>
    <figcaption style="font-size: 13px; float: left; font-style: bold;">Shivmoga</figcaption>
    <img src="cycicon.png" style="float: left;">
    <figcaption style="font-size: 13px; float: left; font-style: bold;">47km</figcaption><br><br>
    <div class="example_e">Difficult</div>
     <p class="price">₹599</p><br>
       <div class="example_f">
          <button  class="modal-button">
              <span>Book Slot</span>
          </button>
      </div>
  </div>
</div>
  </div>

</div>
</div>
</div>
</div>
<br><br><br>


  <div class="item2">
  
      <div class="align">
        <br>
        <div> <img src="images/mountain2.png"></div>
      </div>
    </div>

<br>


  <footer>
    

      <div class="container">
        <div> <img src="images/mtlogo1.png" width="125" height="80"></div>
        <div class="p1"><br>
          Orain Plaza, opp Ocean Pearl, Mangalore<br><br>
          Phone: 0824-224649<br><br>
          <a>@mtkinetics123</a><br><br>
        </div>
      </div>

    


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

      <div class="container">
        <br>
      <div class="lab3">Contact</div><br><br>
        <div class="p1">
          <img src="images/icon1.png" width="29" height="28" style=" margin: -2px;">
          <img src="images/icon2.png" width="26" height="25" style="border-radius: 9px; margin-left: 20px;">
          <img src="images/icon3.png" width="26" height="25" style="margin-left: 20px;">
        </div>
      </div>



  </footer>

<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">Booking!</h1>
     
         <div class="input-block">
        <label for="place" class="input-label">User Name</label>
        <input type="textbox" name="user" id="user" style="font-weight: bold;" value="<?php echo $_SESSION['username']; ?>" disabled>
      </div>

      <div class="input-block">
        <label for="place" class="input-label" >Place</label>
        <input type="textbox" style="font-weight: bold" name="place" id="place" placeholder="Place Name" disabled>
     

     
        <label for="price" class="input-label">Price</label>
        <input type="textbox" style="font-weight: bold;" name="price" id="price" placeholder="Place Name"  disabled>
      </div>
      <div class="input-block">
        <label for="height" class="input-label">Height</label>
        <input type="textbox" name="height" id="height" placeholder="4`5`">
        <label for="weight" class="input-label">Weight</label>
        <input type="textbox" name="weight" id="weight" placeholder="Kg">
      </div>
        <div class="input-block">
      <label for="ephone" class="input-label">Emergency Phone</label>
        <input type="number" name="ephone" id="ephone" placeholder="+91 " >
      </div>
        <div class="input-block">
        <label for="addrs" class="input-label">Emergency Address</label>
        <input type="textbox" name="addrs" id="addrs" placeholder="Address">
      </div>


  <div class="input-block">
        <label for="fitness" class="input-label">Fitness Problem?</label>
        <input type="textbox" name="fitness" id="fitness" placeholder="Hamstring,Cramps,etc...">
      </div>

     

  
  <button type="submit" class="submit" name="submit" value="submit" class="example_f modal-button">Book Slot</button>
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
  <div class="icon3">
    <svg  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
  </svg></div>
    </div>
    <h1>Booking Successful</h1>
  </div>
`
    const closeButton2 = document.querySelector(".close-button");
    let user=document.getElementById("user").value;
    let place=document.getElementById("place").value;
    let price=document.getElementById("price").value;
    let weight=document.getElementById("weight").value;
     let height=document.getElementById("height").value;
      let emphone=document.getElementById("ephone").value;
       let emaddrs=document.getElementById("addrs").value;
        let fit=document.getElementById("fitness").value;
    const modalLeft = document.querySelector('.modal-left');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this.responseText);
                if(/error/.test(this.responseText.toLowerCase())){
                  const errEl = document.createElement('div');
                  errEl.innerHTML = `<br><small><b><font color="red";>`+this.responseText+`</font></b></small>`
                  modalLeft.append(errEl)
                  return;
                }
                modalLeft.innerHTML = successMessage
                // closeButton.click()
            }
        };
       let param = "&user="+ user
        +"&place="+ place
        +"&price="+ price.replace("₹","")
        +"&height="+ height
        +"&weight="+weight
        +"&ephone="+emphone
        +"&addrs="+emaddrs
        +"&fitness="+fit
      

       

        xmlhttp.open("GET","booking.php?"
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

const openModal = (e) => {
  const card = e.target.closest('.card');
  const price = card.querySelector('.price').innerHTML;
  document.getElementById('price').value = price;
  const place = card.querySelector('.place').innerHTML;
  document.getElementById('place').value = place;


  modal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeModal = (e) => {
  e.preventDefault();
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal();
  }
});

modalButton.forEach(btn => btn.addEventListener("click", openModal));
closeButton.addEventListener("click", closeModal);
submit.addEventListener('click',storeindb)

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};

  </script>












</body>
</html>
