//=================================================================================================
//=========================== Show/Hide Elements using event listener =============================
//=================================================================================================

// Add event listeners for elements to display them using custom function
function toggTabVisibilityOnClick(srcElement, destElement){ // source s the clicked element and dest is the eleent that reacts on click
    document.getElementById(srcElement).addEventListener('click', toggleVisibility(srcElement,destElement))
}
function toggleVisibility(srcElement,destElement){
    return ()=>{ //use of closure
        try{
            makeInVisible([previousDisplayedTabSpace])
            changeBackgroundColor(previousClickedTabButton, '#33b5e5')
        }
        catch(error){
            console.log('This error was handled by Tahir Ahmad Wani: ', error)
        }
        changeBackgroundColor(srcElement, '#0099cc')
        makeVisible([destElement], 'block')
        previousClickedTabButton = srcElement
        previousDisplayedTabSpace = destElement
    }
}
function makeVisible(elementList, displayType){
    for(i = 0; i < elementList.length; i++){ // an array of arguments must be passed
        document.getElementById(elementList[i]).style.display = displayType // displayType takes values 'flex', 'block' etc
    }
    
}
function makeInVisible(elementList){ // an array of arguments must be passed
    for(i = 0; i < elementList.length; i++){
        document.getElementById(elementList[i]).style.display = 'none' 
    }
}
//=================================== Function to change color =====================================

function changeBackgroundColor(element, color){
    document.getElementById(element).style.backgroundColor = color
}
//============================== event listener and function binder  ==============================
function addCustomEventListener(element ,event, callBack){ // this is custom eventlistener function that takes three arguments "element", "event", and "function to be called" as callback
    document.getElementById(element).addEventListener(event, callBack(element)) 
}


