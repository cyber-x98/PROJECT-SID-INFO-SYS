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
//======================================================================= 
let previousClickedPaymentReceiveDonationButton = 'receive-payment-options-donation-space'
addCustomEventListener('payment-receive-donation-button', 'click', (element) => {
return (element) => {
  makeInVisible([previousClickedPaymentReceiveDonationButton]);
  makeVisible(['receive-payment-options-donation-space'], 'flex');
  previousClickedPaymentReceiveDonationButton = element
}
}) // this is custom eventlistener function that takes three arguments "element", "event", and "function to be called" as callback
// ==========================================================================
//hide receive paymement dialog box when clicked on cross
// prototype "addCustomEventListener(String elementName, String eventType, callback)"
addCustomEventListener('dialog-box-cross-btn', 'click', () => { return () => {makeInVisible(['receive-payments-dialog-box','dialog-boxes-container'])}})
addCustomEventListener('receive-payment-button', 'click', () => { return () => {makeVisible(['receive-payments-dialog-box'],'block');makeVisible(['dialog-boxes-container'],'flex')}})
