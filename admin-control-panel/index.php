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
      
      html {
        font-family: "Lucida Sans", sans-serif;
      }
    </style>
    <link rel="stylesheet"  href="style.mobile.css">
    <link rel="stylesheet"  href="style.tablet.css">
    <link rel="stylesheet"  href="style.desktop.css">
  </head>
  <body>
      <!-- ============================================ Dialog Boxes ====================================================== -->
      <div id="dialog-boxes-container">
          <div id="dialog-box-receive-payments" class="dialog-box">
            <div id="receive-payments-title-bar" class="dialog-box-title-bar">
              <div id="dialog-box-title">
                Select Payment Option
              </div>
              <div id="dialog-box-cross-btn">x</div>
            </div>
            <div id="payment-receive-options-container">
                <div id="payment-receive-option-button-group">
                  <button class="payment-receive-option-button" onclick="navigateTo('donation')">Donation</button>
                  <button class="payment-receive-option-button" onclick="navigateTo('safe-fund')">Safe Fund</button>
                  <button class="payment-receive-option-button" onclick="navigateTo('shop-rent')">Shop Rent</button>
                  <button class="payment-receive-option-button" onclick="navigateTo('siyam-fund')">Siyam Fund</button>
                  <button class="payment-receive-option-button" onclick="navigateTo('bathroom-fees')">Bathroom Fees</button>
                  <button class="payment-receive-option-button" onclick="navigateTo('hamam-fund')">Hamam Fund</button>
                </div>
            </div>
            <div id="receive-payment-options-donation-space">
    <div class="form-container">
        <form id="donationForm" onsubmit="generateInvoice(event)">
            <div class="form-group">
                <label for="receipt-no">Receipt No</label>
                <input type="text" id="receipt-no" name="receipt_no" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="payment-mode">Mode of Payment</label>
                <select id="payment-mode" name="payment_mode" onchange="toggleTxnField()" required>
                    <option value="Cash">Cash</option>
                    <option value="UPI/MPay">UPI/MPay</option>
                </select>
            </div>
            <div class="form-group" id="txn-number-group" style="display: none;">
                <label for="txn-number">Transaction Number</label>
                <input type="text" id="txn-number" name="txn_number">
            </div>
            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
            </div><!-- donation form end !-->
          </div>
      </div>
      <!-- ========================================== Dialog Boxes-End ==================================================== -->
      <div class="header">
    <div id="header-title-and-logout-container">
      <div>
      <div id="client-name">Suwat-Ul-Islam Darzipora</div>
      <div >Accounting and management System</div>
    </div>
      
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


