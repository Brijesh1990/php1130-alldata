// calculator using javascript
// create a function for clear all values in result
function clr()
{
    document.getElementById("result").value="";
}
// create a function for get button values inside of result
function getValue(val)
{
    document.getElementById("result").value+=val;
}
// create a function for removed or slice string values from start and end
function SliceValue()
{
    var bck=document.getElementById("result").value;
    var res=bck.slice(0,-1);
    document.getElementById("result").value=res;
}

// create a function for all airthamtic expressions calculations 
function getResult()
{
    var x=document.getElementById("result").value;
    var y=eval(x);
    document.getElementById("result").value=y;
}

// create a function for square

function sq()
{
    var number=document.getElementById("result").value;
    var res=Math.pow(number,2);
    document.getElementById("result").value=res;
}


// create a function for squareroot
function sqrtfun()
{
    var number=document.getElementById("result").value;
    var res=Math.sqrt(number);
    document.getElementById("result").value=res;
}
