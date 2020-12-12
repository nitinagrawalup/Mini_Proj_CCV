function validation()
{
var first = document.getElementById('fname').value;
var last = document.getElementById('lname').value;
var uname = document.getElementById('username').value;
var passid =document.getElementById('pass').value;
var citys = document.getElementById('city').value;

var regName = /^[a-zA-Z]+$/;
var alphanumeric = /^[0-9a-zA-Z]+$/;
if(!regName.test(first) || !regName.test(last) || !regName.test(citys) || !regName.test(uname) || !alphanumeric.test(passid) )
{
    alert('Invalid format used.');
    return false;
}
else
{
    return true;
}

}