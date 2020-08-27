function SlowTypeString(text, elementID, timeInBetween) {
    i = 0;
    
    var typingInterval = setInterval(() => {
        document.getElementById(elementID).innerHTML += text.charAt(i);
        i++;

        //To clear this interval after all characters are typed
        if(i > text.length)
            clearInterval(typingInterval);
    }, timeInBetween);
}

/** JS Functions Info: 
    setTimeOut(function() {...}, 5000)  :  runs ONCE after 5000ms (executes callback function after 5000ms)
    setInterval(function() {...}, 5000) :  runs forever every 5000ms until interval is cleared
**/