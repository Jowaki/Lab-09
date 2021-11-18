function formCheckers()
{
	let username=document.getElementById("username").value;
	let password=document.getElementById("password").value;

	let cookies=document.getElementById("cookies").value;
	let chocolates=document.getElementById("chocolates").value;
	let cake=document.getElementById("cake").value;

  var zero=document.getElementById("zero").checked;
   var five=document.getElementById("five").checked;
    var fifty=document.getElementById("fifty").checked;

  if(!username.includes("@") && !username.includes(".")){
    alert("Username format is not correct");
    return false;
  }

  if (password.length==0)
  {
    alert("Password is missing");
    return false;
  }

	if(cookies<=0 || chocolates<=0|| cake<=0)
	{
		alert("Quantity should be grater than 0");
		return false; 
	}

	if (fifty==false && five==false && zero==false)
	{
		alert("Shipping method required");
		return false;
	}

  
	return true;
}
