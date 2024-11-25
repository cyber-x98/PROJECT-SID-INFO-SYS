//================= Tab Custom Event Listeners ===========================
let previousClickedTabButton = 'tab-button-1'
let previousDisplayedTabSpace = ''
// toggTabVisibilityOnClick is a function defined in handlers : Turns on the corresponding tab space where content is displayed
// to keep first tab 'visible' by default toggleVisibility function is being called when the javascript will be loaded
let toggle = toggleVisibility(previousClickedTabButton, 'tab-space-1') //this function cannot be called directly because we have implemented closures so this returns a reference to the callack which is stored into a variable and then called
toggle() //this is the reference of toggleVisisbility function
toggTabVisibilityOnClick('tab-button-1', 'tab-space-1')  // means clicking on tab-button-1 will make tab-space-1 visible
toggTabVisibilityOnClick('tab-button-2', 'tab-space-2')
toggTabVisibilityOnClick('tab-button-3', 'tab-space-3')
toggTabVisibilityOnClick('tab-button-4', 'tab-space-4')
toggTabVisibilityOnClick('tab-button-5', 'tab-space-5')
toggTabVisibilityOnClick('tab-button-6', 'tab-space-6')
toggTabVisibilityOnClick('tab-button-7', 'tab-space-7')
//==============================Buttons from dialog box========================================= 
let previousclickedPaymentReceiveOption = 'payment-receive-donation-button'
let previousChoosenPaymentReceiveSpace = 'receive-payment-options-donation-space'
addCustomEventListener('payment-receive-donation-button', 'click', (element) => {
return (element) => {
  removeCustomClassList(previousclickedPaymentReceiveOption, 'payment-receive-option-button-active')
  makeInVisible([previousChoosenPaymentReceiveSpace])
  makeVisible(['receive-payment-options-donation-space'], 'flex')
  previousChoosenPaymentReceiveSpace = 'receive-payment-options-donation-space'
  previousclickedPaymentReceiveOption = 'payment-receive-donation-button'
  addCustomClassList('payment-receive-donation-button', 'payment-receive-option-button-active')
}
}) // this is custom eventlistener function that takes three arguments "element", "event", and "function to be called" as callback

addCustomEventListener('payment-receive-safe-fund-button', 'click', (element) => {
  return (element) => {
    removeCustomClassList(previousclickedPaymentReceiveOption, 'payment-receive-option-button-active')
    makeInVisible([previousChoosenPaymentReceiveSpace])
    makeVisible(['receive-payment-options-safe-fund-space'], 'flex')
    previousChoosenPaymentReceiveSpace = 'receive-payment-options-safe-fund-space'
    previousclickedPaymentReceiveOption = 'payment-receive-safe-fund-button'
    addCustomClassList('payment-receive-safe-fund-button', 'payment-receive-option-button-active')
  }
  })
// ==========================================================================
//hide receive paymement dialog box when clicked on cross
// prototype "addCustomEventListener(String elementName, String eventType, callback)"
addCustomEventListener('dialog-box-cross-btn', 'click', () => { return () => {makeInVisible(['receive-payments-dialog-box','dialog-boxes-container']);showMainContent()}})
addCustomEventListener('receive-payment-button', 'click', () => { return () => {makeVisible(['receive-payments-dialog-box'],'block');makeVisible(['dialog-boxes-container'],'flex');hideMainContent()}})
//============================================================================
// keep payments 1st tab clicked
addCustomClassList('payment-receive-donation-button', 'payment-receive-option-button-active')