function valid()
{
    if(document.frm.fname.value=="")
    {
        alert('Please enter your Firstname here')
        document.frm.fname.focus();
        return false;
    }
    var fnm=/^[a-zA-Z]*$/;
    if(!fnm.test(document.frm.fname.value))
    {
        alert('Please enter your Firstname only accept character')
        document.frm.fname.focus();
        return false;
    }
    if(document.frm.lname.value=="")
    {
        alert('Please enter your Lastname here')
        document.frm.lname.focus();
        return false;
    }
    var lnm=/^[a-zA-Z]*$/;
    if(!lnm.test(document.frm.lname.value))
    {
        alert('Please enter your Lastname only accept character')
        document.frm.lname.focus();
        return false;
    }
    if(document.frm.email.value=="")
    {
        alert('Please enter your Email here')
        document.frm.email.focus();
        return false;
    }
    // check valid email address 
    var em=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!em.test(document.frm.email.value))
    {
        alert('Please enter your valid email address')
        document.frm.email.focus();
        return false;
    }
}