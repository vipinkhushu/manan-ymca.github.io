var count=2;
function validate()
{
var un=document.myform.username.value;
var pw=document.myform.pword.value;
var pwspl=document.myform.pwordspl.value;
var valid=false;

var unArray = ["rajuartspvtltd","Vipin"];
var pwArray = ["9796052592","Vipin"];
var pwsplArray = ["12345","Vipin"];
for (var i=0; i<unArray.length;i++)
{
if ((un == unArray[i])&& (pw == pwArray[i])&& (pwspl == pwsplArray[i]))
{
valid = true;
break;
}
}
if (valid)
{
window.location="./users/"+unArray[i] +".html";
return false;
}
else if((un != unArray[i])&& (pw != pwArray[i])&& (pwspl != pwsplArray[i]))
{
document.getElementById("err").innerHTML="Invalid Username/Password/Access Code";
document.getElementById("err").style.color="red";

}

}
