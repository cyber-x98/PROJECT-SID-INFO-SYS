//=================================================================================================
//=========================== Show/Hide Elements using event listener =============================
//=================================================================================================
let oldClickedTabButton = ''
// Add event listeners for elements to display them using custom function
function toggTabVisibilityOnClick(srcElement, destElement){
    document.getElementById(srcElement).addEventListener('click', toggleVisibility(destElement))
}
function toggleVisibility(destElement){
    return ()=>{ //use of closure
        try{
            makeInVisible(oldClickedTabButton)
        }
        catch(error){
            console.log('This error was handled by Tahir Ahmad Wani: ', error)
        }
        document.getElementById(destElement).style.display = 'block'
        oldClickedTabButton = destElement
    }
}
function makeInVisible(destElement){
        document.getElementById(destElement).style.display = 'none'
}
//===============================================================================================

