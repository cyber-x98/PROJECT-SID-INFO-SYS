<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
.tab-space{
    display: none;
}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

        .payment-features-container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
        }

        .payment-feature-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .payment-feature-card:hover {
            transform: translateY(-5px);
        }

        .payment-feature-card h2 {
            font-size: 1.8em;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .payment-feature-card p {
            font-size: 1em;
            color: #555;
            margin-bottom: 20px;
        }

        .payment-feature-card b {
            font-size: 3em;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .payment-feature-card button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-feature-card button:hover {
            background-color: #45a049;
        }

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
  /* ================================= payments======================== */
.payment-features-container {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            gap: 20px;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
        }

        .payment-feature-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .payment-feature-card:hover {
            transform: translateY(-5px);
        }

        .payment-feature-card h2 {
            font-size: 1.8em;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .payment-feature-card p {
            font-size: 1em;
            color: #555;
            margin-bottom: 20px;
        }

        .payment-feature-card b {
            font-size: 2em;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .payment-feature-card button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-feature-card button:hover {
            background-color: #45a049;
        }
}


</style>
</head>
<body>

<div class="header">
  <h1>Admin Control Panel</h1>
  <p>Accounting and management system</p>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li class="tab" id="tab-button-1">💵 Payments</li>
      <li class="tab" id="tab-button-2">🛒 Shops</li>
      <li class="tab" id="tab-button-3">🧑 Shop Tenants</li>
      <li class="tab" id="tab-button-4">📍 Residents</li>
      <li class="tab" id="tab-button-5">👨‍💼 Employees</li>
      <li class="tab" id="tab-button-6">🧑‍🤝‍🧑 Members</li>
      <li class="tab" id="tab-button-7">🧾 Accounts</li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <div class="tab-space" id="tab-space-1">
        <div class="payment-features-container">
            <!-- Receive Payments Card -->
            <div class="payment-feature-card">
                <b class="fas fa-receipt">📩</b>
                <h2>Receive a payment</h2>
                <p>Effortlessly track and receive payments securely with our integrated solutions.</p>
                <button onclick="goToFeature('receive')">Receive</button>
            </div>

            <!-- Make Payments Card -->
            <div class="payment-feature-card">
                <b class="fas fa-credit-card">📤</b>
                <h2>Make a Payment</h2>
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
      <h2>What?</h2>
      <p>We are going to complete this project!</p>
      <h2>Where?</h2>
      <p>On the earth!</p>
      <h2>How?</h2>
      <p>Wo mere baap ko b nahi pata!</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>Developed and maintained by CYBERCAST+ Software Solutions</p>
</div>

</body>
<script src="handlers/handlers.js"></script>
<script>
    // toggTabVisibilityOnClick is a function defined in handlers : Turns on the corresponding tab space where content is displayed
    toggTabVisibilityOnClick('tab-button-1', 'tab-space-1')  
    toggTabVisibilityOnClick('tab-button-2', 'tab-space-2')
    toggTabVisibilityOnClick('tab-button-3', 'tab-space-3')
    toggTabVisibilityOnClick('tab-button-4', 'tab-space-4')
    toggTabVisibilityOnClick('tab-button-5', 'tab-space-5')
    toggTabVisibilityOnClick('tab-button-6', 'tab-space-6')
    toggTabVisibilityOnClick('tab-button-7', 'tab-space-7')
</script>
</html>


