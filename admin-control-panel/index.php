<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body{
    /* background: linear-gradient(135deg, #a0a1bd, #040406); */
  }
  * {
    box-sizing: border-box;
  }
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  [class*="col-"] {
    float: left;
    padding: 15px;
  }
  
  html {
    font-family: "Lucida Sans", sans-serif;
  }
  
  
  
</style>
<link rel="stylesheet"  href="style.mobile.css">
<link rel="stylesheet"  href="style.tablet.css">
<link rel="stylesheet"  href="style.desktop.css">
</head>
<body>

<div class="header">
  <div id="header-title-and-logout-container">
    <h1>Admin Control Panel</h1>
    <button id="logout-btn">Logout</button>
  </div>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li id="tab-button-1"><div class="tab">💵 Payments<div></li>
      <li id="tab-button-2"><div class="tab">🛒 Shops</div></li>
      <li id="tab-button-3"><div class="tab">🧑 Shop Tenants</div></li>
      <li id="tab-button-4"><div class="tab">📍 Residents</div></li>
      <li id="tab-button-5"><div class="tab">👨‍💼 Employees</div></li>
      <li id="tab-button-6"><div class="tab">🧑‍🤝‍🧑 Members</div></li>
      <li id="tab-button-7"><div class="tab">🧾 Accounts</div></li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <div class="tab-space" id="tab-space-1">
        <div class="payment-features-container">
            <!-- Receive Payments Card -->
            <div class="payment-feature-card">
                <b class="fas fa-receipt">📩</b>
                <h2>Receive a new Payment</h2>
                <p>Effortlessly track and receive payments securely with our integrated solutions.</p>
                <button onclick="goToFeature('receive')">Receive</button>
            </div>

            <!-- Make Payments Card -->
            <div class="payment-feature-card">
                <b class="fas fa-credit-card">📤</b>
                <h2>Make a  new Payment</h2>
                <p>Make swift, safe, and easy payments from anywhere at any time with our platform.</p>
                <button onclick="goToFeature('make')">Make</button>
            </div>
        </div>
    </div>
    <div class="tab-space" id="tab-space-2"><h1>Shops</h1></div>
    <div class="tab-space" id="tab-space-3"><h1>Shop Tenants</h1></div>
    <div class="tab-space" id="tab-space-4"><h1>Residents</h1></div>
    <div class="tab-space" id="tab-space-5"><h1>Employees</h1></div>
    <div class="tab-space" id="tab-space-6"><h1>Members</h1></div>
    <div class="tab-space" id="tab-space-7"><h1>Accounts</h1></div>
  </div>

  
  <div class="col-3 col-s-12">
    <div class="aside">
      <marquee direction="up">
        <h2>Note!</h2>
        <p>This project is under development and will be released very soon!</p>
        <h2>This Project Belongs to "Auqaaf Committee Suwat-Ul-Islam Darzipora, Kupwara."</h2>
        <p></p>
      </marquee>
    </div>
  </div>
</div>

<div class="footer">
  <p>Developed and maintained by CYBERCAST+ Software Solutions</p>
</div>

</body>
<script src="handlers/handlers.js"></script>
<script>
  //================= Tab Custom Event Listeners ===========================
    // toggTabVisibilityOnClick is a function defined in handlers : Turns on the corresponding tab space where content is displayed
    let toggle = toggleVisibility('tab-button-1', 'tab-space-1') //this function cannot be called directly because we have implemented closures so this returns a reference to the callack which is stored into a variable and then called
    toggle() //this is the reference of toggleVisisbility function
    toggTabVisibilityOnClick('tab-button-1', 'tab-space-1')  // means clicking on tab-button-1 will make tab-space-1 visible
    toggTabVisibilityOnClick('tab-button-2', 'tab-space-2')
    toggTabVisibilityOnClick('tab-button-3', 'tab-space-3')
    toggTabVisibilityOnClick('tab-button-4', 'tab-space-4')
    toggTabVisibilityOnClick('tab-button-5', 'tab-space-5')
    toggTabVisibilityOnClick('tab-button-6', 'tab-space-6')
    toggTabVisibilityOnClick('tab-button-7', 'tab-space-7')
  //=======================================================================-
</script>
</html>


