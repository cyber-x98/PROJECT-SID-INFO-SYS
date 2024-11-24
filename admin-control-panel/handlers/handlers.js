//=================================================================================================
//=========================== Show/Hide Elements using event listener =============================
//=================================================================================================
let previousClickedTabButton = ''
let previousDisplayedTabSpace = ''
// Add event listeners for elements to display them using custom function
function toggTabVisibilityOnClick(srcElement, destElement){ // source s the clicked element and dest is the eleent that reacts on click
    document.getElementById(srcElement).addEventListener('click', toggleVisibility(srcElement,destElement))
}
function toggleVisibility(srcElement,destElement){
    return ()=>{ //use of closure
        try{
            makeInVisible(previousDisplayedTabSpace)
            changeBackgroundColor(previousClickedTabButton, '#33b5e5')
        }
        catch(error){
            console.log('This error was handled by Tahir Ahmad Wani: ', error)
        }
        changeBackgroundColor(srcElement, '#0099cc')
        document.getElementById(destElement).style.display = 'block'
        previousClickedTabButton = srcElement
        previousDisplayedTabSpace = destElement
    }
}
function makeInVisible(destElement){
        document.getElementById(destElement).style.display = 'none'
}
//=================================== Function to change color =====================================

function changeBackgroundColor(element, color){
    document.getElementById(element).style.backgroundColor = color
}


