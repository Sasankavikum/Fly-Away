function checkPassword()
{
	if(document.getElementById("pwd").value == document.getElementById("cpwd").value)
	{
		alert("success !");
		return true;
	}
	else
	{
		alert("Wrong password!");
		return false;
	}
	
	
	
}
function enablesubmit()
{
	if (document.getElementById("ckb").checked)
	{
		document.getElementById("sub").disabled = false ;
		
	}
	else
	{
		
		document.getElementById("sub").disabled = true;
		
		
	}
}
