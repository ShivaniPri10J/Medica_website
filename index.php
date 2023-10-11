<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "Medica") or die("Connection failed");

    // Handle contact form data
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $number= $_POST["number"] ?? "";
    $message = $_POST["message"] ?? "";

    $contactSql = "INSERT INTO `Medica`(`name`, `email`, `number`, `message`) VALUES ('$name','$email','$number','$message')";
    $contactResult = mysqli_query($conn, $contactSql);

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Medica template</title>
    <meta property="og:title" content="Medica template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Poppins;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <style>
      @keyframes fade-in-left {
        0% {
          opacity: 0;
          transform: translateX(-20px);
        }
        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }
    </style>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./index.css" rel="stylesheet" />
      <script
        type="text/javascript"
        src="https://unpkg.com/dangerous-html/dist/default/lib.umd.js"
      ></script>

      <div class="home-container">
        <div data-modal="practices" class="home-modal">
          <div class="home-practices">
            <div class="home-heading">
              <span class="home-header">Our practices</span>
              <svg
                viewBox="0 0 1024 1024"
                data-close="practices"
                class="home-close"
              >
                <path
                  d="M225.835 286.165l225.835 225.835-225.835 225.835c-16.683 16.683-16.683 43.691 0 60.331s43.691 16.683 60.331 0l225.835-225.835 225.835 225.835c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-225.835-225.835 225.835-225.835c16.683-16.683 16.683-43.691 0-60.331s-43.691-16.683-60.331 0l-225.835 225.835-225.835-225.835c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                ></path>
              </svg>
            </div>
            <div class="home-grid">
              <div class="home-section">
                <div class="home-heading01">
                  <span class="home-header01">Cardiology</span>
                </div>
                <div class="read-more">
                  <span class="home-text">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image"
                  />
                </div>
              </div>
              <div class="home-section01">
                <div class="home-heading02">
                  <span class="home-header02">Orthopedics</span>
                </div>
                <div class="read-more">
                  <span class="home-text01">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image01"
                  />
                </div>
              </div>
              <div class="home-section02">
                <div class="home-heading03">
                  <span class="home-header03">Ophtalmology</span>
                </div>
                <div class="read-more">
                  <span class="home-text02">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image02"
                  />
                </div>
              </div>
              <div class="home-section03">
                <div class="home-heading04">
                  <span class="home-header04">Pediatrics</span>
                </div>
                <div class="read-more">
                  <span class="home-text03">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image03"
                  />
                </div>
              </div>
              <div class="home-section04">
                <div class="home-heading05">
                  <span class="home-header05">Nutrition</span>
                </div>
                <div class="read-more">
                  <span class="home-text04">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image04"
                  />
                </div>
              </div>
              <div class="home-section05">
                <div class="home-heading06">
                  <span class="home-header06">General</span>
                  
                </div>
                <div class="read-more">
                  <span class="home-text05">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image05"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="home-hero">
          <header data-thq="thq-navbar" class="home-navbar">
            <div class="home-left">
              <img
                alt="image"
                src="public/Branding/logo-1500h.png"
                class="home-logo"
              />
              <nav class="home-links">
                <a href="#features" class="home-link">Features</a>
                <a href="#how-it-works" class="home-link01">How it works</a>
                <span class="home-link02">Prices</span>
                <a href="#schedule" class="home-link03">Contact</a>
              </nav>
            </div>
            <div data-thq="thq-navbar-btn-group" class="home-right">
              <button class="home-phone button">
                <img
                  alt="image"
                  src="public/Icons/phone.svg"
                  class="home-image06"
                />
                <span class="home-text06">9988776655</span>
              </button>
              <a href="#book" class="home-book button button-main">
                <img
                  alt="image"
                  src="public/Icons/calendar.svg"
                  class="home-image07"
                />
                <span class="home-text07">Book an appointment</span>
              </a>
            </div>
            <div data-thq="thq-burger-menu" class="home-burger-menu">
              <svg viewBox="0 0 1024 1024" class="home-icon1">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-thq="thq-mobile-menu" class="home-mobile-menu">
              <div
                data-thq="thq-mobile-menu-nav"
                data-role="Nav"
                class="home-nav"
              >
                <div class="home-container1">
                  <img
                    alt="image"
                    src="public/Branding/logo-1500h.png"
                    class="home-image08"
                  />
                  <div data-thq="thq-close-menu" class="home-menu-close">
                    <svg viewBox="0 0 1024 1024" class="home-icon3">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <nav
                  data-thq="thq-mobile-menu-nav-links"
                  data-role="Nav"
                  class="home-nav1"
                >
                  <span class="home-text08">Features</span>
                  <span class="home-text09">How it works</span>
                  <span class="home-text10">Prices</span>
                  <span class="home-text11">Contact</span>
                  <a href="#book" class="home-book1 button button-main">
                    <img
                      alt="image"
                      src="public/Icons/calendar.svg"
                      class="home-image09"
                    />
                    <span class="home-text12">Book an appointment</span>
                  </a>
                </nav>
              </div>
            </div>
          </header>
          <div class="home-main">
            <div class="home-content">
              <div class="home-heading07">
                <h1 class="home-header07">
                  Experienced psychologists&nbsp; who have an eye for your care
                </h1>
                <p class="home-caption06">
                  <span>
                    Mental Health is no joke! It is as important as your
                    physical health.
                  </span>
                  <br />
                </p>
              </div>
              <button class="button button-main home-book2">
                <img
                  alt="image"
                  src="public/Icons/calendar.svg"
                  class="home-image10"
                />
                <span>Book an appointment</span>
              </button>
            </div>
            <div class="home-image11">
              <img
                alt="image"
                src="public/doctor-image-1500w.png"
                class="home-image12"
              />
            </div>
          </div>
          <div id="features" class="home-features">
            <div class="home-content01">
              <div class="home-section06 quick-links">
                <div class="home-heading08">
                  <h3 class="home-header08">Virtual Assistance</h3>
                  <img
                    alt="image"
                    src="public/Icons/arrow.svg"
                    class="home-icon5"
                  />
                </div>
                <p class="home-text16">24x7 assistance</p>
                <div class="home-divider"></div>
              </div>
              <div class="home-section07 quick-links">
                <div class="home-heading09">
                  <h3 class="home-header09">Virtual Clinic</h3>
                  <img
                    alt="image"
                    src="public/Icons/arrow.svg"
                    class="home-icon6"
                  />
                </div>
                <p class="home-text17">Consultation anytime - anywhere</p>
                <div class="home-divider1"></div>
              </div>
              <div class="home-section08 quick-links">
                <div class="home-heading10">
                  <h3 class="home-header10">Clinical results</h3>
                  <img
                    alt="image"
                    src="public/Icons/arrow.svg"
                    class="home-icon7"
                  />
                </div>
                <p class="home-text18">Easy access and accuracy</p>
                <div class="home-divider2"></div>
              </div>
            </div>
          </div>
          <div class="home-background"></div>
        </section>
        <section class="home-practices1">
          <div class="home-heading11">
            <h2 class="home-text19">Our practices</h2>
            <p class="home-text20">
            </p>
          </div>
          <div class="home-content02">
            <div class="home-grid1">
              <a href="index.html">
                <div class="home-practice-wrapper">
                  <div class="practice-practice">
                    <div class="practice-heading">
                      <h3 class="practice-header"><span>Counselling</span></h3>
                      <p class="practice-caption">
                        <span>Consult to our best psychologists</span>
                      </p>
                    </div>
                    <div class="read-more">
                      <span class="practice-text">Read more</span>
                      <img
                        alt="image"
                        src="public/Icons/arrow-2.svg"
                        class="practice-image"
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="index.html">
                <div class="home-practice-wrapper1">
                  <div class="home-practice">
                    <div class="home-heading12">
                      <h3 class="home-header11">Psychotherapy</h3>
                      <p class="home-caption07">
                        Consult to our best psychologists
                      </p>
                    </div>
                    <div class="read-more">
                      <span class="home-text21">Read more</span>
                      <img
                        alt="image"
                        src="public/Icons/arrow-2.svg"
                        class="home-image13"
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="index.html">
                <div class="home-practice-wrapper2">
                  <div class="home-practice1">
                    <div class="home-heading13">
                      <h3 class="home-header12">
                        <span class="home-text22">Psychological assesment</span>
                        <br />
                      </h3>
                      <p class="home-caption08">
                        Consult to our best psychologists
                      </p>
                    </div>
                    <div class="read-more">
                      <span class="home-text24">Read more</span>
                      <img
                        alt="image"
                        src="public/Icons/arrow-2.svg"
                        class="home-image14"
                      />
                    </div>
                  </div>
                </div>
              </a>
              <a href="index.html">
                <div class="home-practice-wrapper3">
                  <div class="home-practice2">
                    <div class="home-heading14">
                      <h3 class="home-header13">General</h3>
                      <p class="home-caption09">
                        Consult to our best psychologists
                      </p>
                    </div>
                    <div class="read-more">
                      <span class="home-text25">Read more</span>
                      <img
                        alt="image"
                        src="public/Icons/arrow-2.svg"
                        class="home-image15"
                      />
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <button data-open="practices" class="button button-main">
              <span>All practices</span>
            </button>
          </div>
        </section>
        <section id="how-it-works" class="home-why">
          <div class="home-heading15">
            <h2 class="home-header14">Why choose us</h2>
            <p class="home-header15">
            </p>
          </div>
          <div class="home-content03">
            <div class="home-video">
              <video
                src=""
                poster="public/video-1500w.png"
                class="home-video1"
              ></video>
              <div class="home-play">
                <img
                  alt="image"
                  src="public/Icons/play.svg"
                  class="home-image16"
                />
              </div>
            </div>
            <div class="home-caption10">
              <h3 class="home-header16">
              </h3>
              <p class="home-header17">
              </p>
            </div>
          </div>
        </section>
        <section class="home-features1">
          <div class="home-section09">
            <div class="home-content04">
              <div class="home-header18">
                <h2 class="home-heading16">
                  Dedicated doctors with the core mission to help.
                </h2>
                <p class="home-capton">
                </p>
              </div>
              <div class="read-more">
                <span class="home-text27">See our doctors</span>
                <img
                  alt="image"
                  src="public/Icons/arrow-2.svg"
                  class="home-image17"
                />
              </div>
            </div>
            <img
              alt="pastedImage"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/9c676785-c350-4e08-a6b9-690d3e44b074/3a7e5236-1b96-45c8-a516-2c3ccaf56317?org_if_sml=1230516"
            />
          </div>
          <div class="home-section10">
            <img
              alt="pastedImage"
              src="public/external/pastedimage-j0oj-500h.png"
              class="home-pasted-image1"
            />
            <div class="home-content05">
              <div class="home-header19">
                <h2 class="home-heading17">
                  Get access to specialty tests and breakthrough information.
                </h2>
                <p class="home-capton1">
                </p>
              </div>
              <div class="read-more">
                <span class="home-text28">Find test</span>
                <img
                  alt="image"
                  src="public/Icons/arrow-2.svg"
                  class="home-image18"
                />
              </div>
            </div>
          </div>
          <div class="home-section11">
            <div class="home-content06">
              <div class="home-header20">
                <h2 class="home-heading18">
                  Find out how we can help you help you.
                </h2>
                <p class="home-capton2">
                </p>
              </div>
              <button class="button button-main home-book3">
                <span>Book a virtual appointment</span>
              </button>
            </div>
            <img
              alt="image"
              src="public/examination-1500w.png"
              class="home-image19"
            />
          </div>
          <button class="home-book4 button button-main">
            <span>Book a virtual appointment</span>
          </button>
        </section>
        <section id="schedule" class="home-schedule">
          <div class="home-content07">
            <div class="home-header21">
              <h2 class="home-heading19">
                Schedule an in person or virtual appointment today
              </h2>
              <p class="home-caption11">
              </p>
            </div>
            <div class="home-types">
              <a
                href="#book"
                class="home-book-person button button-main button-white"
              >
                <span>Book in person appointment</span>
              </a>
              <button class="button button-main button-white home-book-person1">
                <span>Book virtual appointment</span>
              </button>
            </div>
          </div>
        </section>
        <div class="home-search">
          <div class="home-heading20">
            <h2 class="home-text33">Search diseases &amp; conditions</h2>
            <p class="home-text34">
            </p>
          </div>
          <div class="home-content08">
            <div class="home-type-two">
              <div class="home-heading21">
                <h3 class="home-text35">Symptom checker</h3>
                <p class="home-text36">
                </p>
              </div>
              <div class="home-symptoms">
                <div class="home-row">
                  <div class="symptom">
                    <span class="home-text37">Headache</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text38">
                      <span>Overthinking</span>
                      <br />
                    </span>
                  </div>
                  <div class="symptom">
                    <span class="home-text41">Stress</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text42">Anxiety</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text43">Breath difficulty</span>
                  </div>
                </div>
                <div class="home-row1">
                  <div class="symptom">
                    <span class="home-text44">Red eye</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text45">Restlessness</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text46">Shivering</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text47">Lack of Focus</span>
                  </div>
                  <div class="symptom">
                    <span class="home-text48">Heart palpitation</span>
                  </div>
                </div>
                <div class="home-row2"></div>
              </div>
            </div>
          </div>
        </div>
        <section id="book" class="home-book5">
          <div class="home-heading22">
            <h2 class="home-text49">Book an appointment</h2>
            <p class="home-text50">
            </p>
          </div>
          <div class="row">
            <h3>Send your details to us.</h3>
            <div class="row">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form" onsubmit="return validateForm()" >
                <div>
                    <label>Name</label><br>
                    <input name="name" type="text" placeholder="name" class="box" id="name" required>
                </div>
                <div>
                    <label>Email Address</label><br>
                    <input name="email" type="text" placeholder="email" class="box" id="email" required>
                </div>
                <div>
                    <label>Phone number</label><br>
                    <input name="number" type="text" placeholder="number" class="box" id="number" required>
                </div>   
                <div>
                    <label>Message</label><br>
                    <textarea name="message" type="text" class="box" placeholder="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                
                <input type="submit" value="Send Message" class="btn">
                   
               </form>
               <div class="image">
                   <img src="images/logo.jpg" alt="">
               </div>
           </div>
          
           <script>
           function validateForm() {
               var name = document.getElementById("name").value;
               var email = document.getElementById("email").value;
               var number = document.getElementById("number").value;
               var message = document.getElementById("message").value;
       
               if (name === "" || email === "" || number === "" || message === "") {
                   alert("Please fill in all fields.");
                   return false;
               }
               if(number.length<10 || number.length>10){
                   alert("Please enter correct number!");
                   return false;
               }
       
               alert("Message sent successfully!");
               return true;
           }
           </script>
       </section>
        <section class="home-meet">
          <div class="home-heading23">
            <h2 class="home-text61">Meet our doctors</h2>
            <p class="home-text62">
            </p>
          </div>
          <div class="home-list">
            <div class="home-controls">
              <img
                alt="image"
                src="public/Icons/circle-arrow.svg"
                data-doctors="previous"
                class="arrow"
              />
              <img
                alt="image"
                src="public/Icons/circle-arrow.svg"
                data-doctors="next"
                class="home-forward arrow"
              />
            </div>
            <div data-teleport="doctors" class="home-doctors">
              <div class="doctor-doctor">
                <img
                  alt="image"
                  src="public/Doctors/doctor-1-300w.png"
                  class="doctor-image"
                />
                <div class="doctor-heading">
                  <h2 class="doctor-text"><span>Dr. Audrey Smith</span></h2>
                </div>
              </div>
              <div class="doctor-doctor">
                <img
                  alt="image"
                  src="public/Doctors/doctor-2-300w.png"
                  class="doctor-image"
                />
                <div class="doctor-heading">
                  <h2 class="doctor-text"><span>Dr. Jane Robert</span></h2>
                </div>
              </div>
              <div class="doctor-doctor">
                <img
                  alt="image"
                  src="public/Doctors/doctor-3-300w.png"
                  class="doctor-image"
                />
                <div class="doctor-heading">
                  <h2 class="doctor-text"><span>Dr.Sara Kudrow</span></h2>
                </div>
              </div>
              <div class="doctor-doctor">
                <img
                  alt="image"
                  src="public/Doctors/doctor-4-300w.png"
                  class="doctor-image"
                />
                <div class="doctor-heading">
                  <h2 class="doctor-text"><span>Dr. Lisa Baker</span></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="home-search1"></div>
        </section>
        <section class="home-news">
          <div class="home-heading24">
            <h2 class="home-text63">Read our latest news</h2>
            <p class="home-text64">
            </p>
          </div>
          <div class="home-list1">
            <div class="home-item">
              <div class="home-image21">
                <img
                  alt="image"
                  src="public/News/news-logo-1500w.png"
                  class="home-image22"
                />
              </div>
              <div class="home-content09">
                <div class="home-details">
                  <span class="home-date1">November 23, 2022</span>
                  <p class="home-quick-description">
                  </p>
                </div>
                <div class="read-more">
                  <span class="home-text65">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow.svg"
                    class="home-image23"
                  />
                </div>
              </div>
            </div>
            <div class="home-item1">
              <div class="home-image24">
                <img
                  alt="image"
                  src="public/News/news-1-1500w.png"
                  class="home-image25"
                />
              </div>
              <div class="home-content10">
                <div class="home-details1">
                  <span class="home-date2">November 23, 2022</span>
                  <p class="home-quick-description1">
                  </p>
                </div>
                <div class="read-more">
                  <span class="home-text66">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image26"
                  />
                </div>
              </div>
            </div>
            <div class="home-item2">
              <div class="home-image27">
                <img
                  alt="image"
                  src="public/News/news-2-1500w.png"
                  class="home-image28"
                />
              </div>
              <div class="home-content11">
                <div class="home-details2">
                  <span class="home-date3">November 23, 2022</span>
                  <p class="home-quick-description2">
                  </p>
                </div>
                <div class="read-more">
                  <span class="home-text67">Read more</span>
                  <img
                    alt="image"
                    src="public/Icons/arrow-2.svg"
                    class="home-image29"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="home-download"></div>
        <div class="home-footer">
          <div class="home-left1">
            <div class="home-brand">
              <img
                alt="image"
                src="public/Branding/logo-2.svg"
                class="home-image30"
              />
              <p class="home-text68">
              </p>
            </div>
            <div class="home-socials">
              <div class="social">
                <img
                  alt="image"
                  src="public/Icons/insider.svg"
                  class="home-image31"
                />
              </div>
              <div class="social">
                <img
                  alt="image"
                  src="public/Icons/instagram.svg"
                  class="home-image32"
                />
              </div>
              <div class="social">
                <img
                  alt="image"
                  src="public/Icons/twitter.svg"
                  class="home-image33"
                />
              </div>
            </div>
            <div class="home-legal">
              <span class="home-copyright">
                © 2022 finbest. All Rights Reserved.
              </span>
              <span class="legal-link">Privacy Policy</span>
              <span class="legal-link">Terms of Use</span>
            </div>
          </div>
          <div class="home-right1">
            <div class="home-list2">
              <span class="home-header22">Menu</span>
              <div class="home-links1">
                <span class="home-link04">Home</span>
                <span class="home-link05">About</span>
                <span class="home-link06">Services</span>
                <span class="home-link07">Blog</span>
                <span class="home-link08">Support</span>
              </div>
            </div>
            <div class="home-list3">
              <span class="home-header23">Resources</span>
              <div class="home-links2">
                <span class="home-link09">Test Results</span>
                <span class="home-link10">Patients</span>
                <span class="home-link11">Doctors</span>
                <span class="home-link12">Health</span>
              </div>
            </div>
            <div class="home-list4">
              <span class="home-header24">Contact</span>
              <div class="home-links3">
                <span class="home-link13">
                  24 Park Street , Kolkata, WB
                </span>
                <a
                  href="mailto:contact@template.new?subject=Main"
                  class="home-link14"
                >
                  www.medica.in
                </a>
                <a href="tel:(004) 234 - 5678" class="home-link15">
                  9988776655s
                </a>
              </div>
            </div>
          </div>
          <div class="home-legal1">
            <div class="home-row3">
              <span class="legal-link">Privacy Policy</span>
              <span class="legal-link">Terms of Use</span>
            </div>
            <span class="home-copyright5">
              © 2022 finbest. All Rights Reserved.
            </span>
          </div>
        </div>
        <div>
          <dangerous-html
            <script>
const modalOpen = document.querySelectorAll('[data-open]');
const modalClose = document.querySelectorAll('[data-close]');

modalOpen.forEach(button => {
    button.addEventListener('click', event => {
        const modal = document.querySelector(`[data-modal='${event.target.dataset.open}']`);
        modal.style.display = 'flex';
    });
});

modalClose.forEach(button => {
    button.addEventListener('click', event => {
        const modal = document.querySelector(`[data-modal='${event.target.dataset.close}']`);
        modal.style.display = 'none';
    });
});
</script>

          ></dangerous-html>
        </div>
        <div>
          <dangerous-html
            html=<script>
const dataLetters = document.querySelectorAll('[data-letter]');
let activeLetters = [];
const maxResults = 6;

dataLetters.forEach(letter => {
  letter.addEventListener('click', function() {
    if (this.classList.contains('letter-active')) {
      this.classList.remove('letter-active');
      activeLetters = activeLetters.filter(a => a !== this.dataset.letter);
    } else {
      this.classList.add('letter-active');
      activeLetters.push(this.dataset.letter);
    }
    if (activeLetters.length == 0) {
      document.querySelector('[data-teleport='results']').style.display = 'none';
      return;
    }
    showResults();
  });
});

const showResults = () => {
  fetch('https://raw.githubusercontent.com/Shivanshu-Gupta/web-scrapers/master/medical_ner/medicinenet-diseases.json')
    .then(response => response.json())
    .then(data => {
      const filteredData = data.filter(item => {
        const firstLetter = item.disease.charAt(0).toLowerCase();
        if (activeLetters.includes(firstLetter)) {
          return true;
        }
        return false;
      });

      document.querySelector('[data-teleport='results']').style.display = 'flex';
      const resultsContainer = document.querySelector('[data-results='letters']');
      resultsContainer.innerHTML = '';

      let counter = 0;
      const diseaseGroups = {};
      const totalActiveLetters = activeLetters.length;

      filteredData.forEach(disease => {
        const firstLetter = disease.disease[0].toLowerCase();
        if (diseaseGroups[firstLetter]) {
          diseaseGroups[firstLetter].push(disease);
        } else {
          diseaseGroups[firstLetter] = [disease];
        }
      });

      Object.keys(diseaseGroups).sort().forEach((firstLetter, index) => {
        const diseasesForThisLetter = diseaseGroups[firstLetter];
        const diseasesToShow = diseasesForThisLetter.slice(0, Math.ceil(maxResults / totalActiveLetters));

        diseasesToShow.forEach(disease => {
          const resultContainer = document.createElement('div');
          resultContainer.classList.add('search-result');
          resultContainer.classList.add('invisible');
          resultContainer.style.animationDelay = `${counter * 0.25}s`;

          const resultText = document.createElement('span');
          resultText.classList.add('result-text');
          resultText.textContent = disease.disease;

          resultContainer.appendChild(resultText);
          resultsContainer.appendChild(resultContainer);
          counter++;

          if (counter === maxResults) {
            const moreContainer = document.createElement('div');
            moreContainer.classList.add('search-result');
            moreContainer.classList.add('more-results');

            const moreText = document.createElement('span');
            moreText.classList.add('result-text');
            moreText.textContent = 'More';

            moreContainer.appendChild(moreText);
            resultsContainer.appendChild(moreContainer);
            addedMoreContainer = true;
            return;
          }
        });
      });
    });
};
</script>

          ></dangerous-html>
        </div>
        <div>
          <dangerous-html
            html=<script>
function scroll(direction) {
  const doctorsDiv = document.querySelector('[data-teleport='doctors']');
  const scrollAmount = 300;
  if (direction === 'previous') {
    doctorsDiv.scrollBy({
      left: -scrollAmount,
      behavior: 'smooth'
    });
  } else if (direction === 'next') {
    doctorsDiv.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  }
}

const buttons = document.querySelectorAll('[data-doctors]');
buttons.forEach(button => {
  button.addEventListener('click', () => {
    const direction = button.dataset.doctors;
    scroll(direction);
  });
});
</script>
          ></dangerous-html>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
