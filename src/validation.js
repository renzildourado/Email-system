function formValidation()
{
var uid=document.registration.userid;
var pwd=document.registration.passwd;
var name=document.registration.fname;
var add=document.registration.add;
var country=document.registration.marks;
var zip=document.registration.zip;
var email=document.registration.email;
var gender=document.registration.gender;

if(userid_validation(uid,5,12))
{
if(passwd_validation(pwd,7,12))
{

if(name_validation(name))
{
if(add_validation(add))
{
if(country_validation(marks))
{
if(zip_validation(zip))
{
if(email_validation(email))
{
if(gender_validation(gender))
{
}
}
}
}
}
}
}
}
return false;
}

function userid_validation(uid,mx,my)
{
var uid_len=uid.value.length;
if(uid_len==0||uid_len>my||uid_len<mx)
{
alert("USERID should not be empty or length between  "+mx+"  to  "   +my);
uid.focus();
return false;
}
return true;
}
function passwd_validation(pwd,mx,my)
{
var pwd_len=pwd.value.length;
if(pwd_len==0||pwd_len>my||pwd_len<mx)
{
alert("Password should not be empty or length between  "+mx+"  to  "   +my);
pwd.focus();
return false;
}
return true;
}

function name_validation(name)
{
var letters=/^[A-Z a-z]+$/;

if(name.value.match(letters))
{
return true;
}
else
{
alert("Alphabets only");
fname.focus();
return false;
}
}


function add_validation(add)
{
var letters=/^[0-9 A-Z a-z]+$/;


if(add.value.match(letters))
{
return true;
}
else
{
alert("Alphanumeric only");
add.focus();
return false;
}
}


function country_validation(marks)
{
var mrk_val=marks.value.length;
if(mrk_cal==0)
{
alert("please enter the marks");
uid.focus();
return false;
}
return true;
}
}

function zip_validation(zip)
{
var letters=/^[0-9 ]+$/;


if(zip.value.match(letters))
{
return true;
}
else
{
alert("numeric only");
zip.focus();
return false;
}
}

function email_validation(email)
{
var syn=/\S+@\S+\.\S+/;
if(email.value.match(syn))
{
return true;
}
else
{
alert("not a valid email");
email.focus();
return false;
}
}

function gender_validation(gender)
{

if ( (gender[0].checked == false ) && ( gender[1].checked == false ) ) 
{alert("Please choose Gender");
gender.focus();
return false;
}
else
{
return true;
}
}















 
