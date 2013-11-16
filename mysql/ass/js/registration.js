function validator()
	{
		// Make quick references to our fields
		var txt_fname = document.getElementById('fname');
		var txt_lname = document.getElementById('lname');
		var txt_email = document.getElementById('email');
		var txt_phone = document.getElementById('tele');
		var txt_address = document.getElementById('address');		
		var gender = document.getElementById('gender');
		var country = document.getElementById('country');
		var hear = document.getElementById('webde');
		var recomend = document.getElementById('yes');


		// Check each input in the order that it appears in the form!
			if(isAlphabet(txt_fname, "Please enter letters only for your first name"))
				{
				if(isAlphabet(txt_lname, "Please enter letters only for your last name"))
					{
					if(emailValidator(txt_email, "Please enter a valid email address"))
						{
						if(isNumeric(txt_phone, "Please enter numbers only for you phone number!"))
							{
							if(notEmpty(txt_address, "Please enter your address"))
								{						
								if(selectGender(gender, "Please select your gender"))
									{
									if(selectCountry(country, "Please choose your country"))
										{
										if(selectHear(hear, "Please select an option of media"))
											{
											if(selectRecomend(recomend, "Please select an option, yes or no"))
												{
													return true;
												}
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







function isAlphabet(elem, helperMsg)
{
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp))
	{
		return true;
	}
	else
	{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isNumeric(elem, helperMsg)
{
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression))
	{
		return true;
	}
	else
	{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


function notEmpty(elem, errMsg)
	{
	if(elem.value.length == 0){
		alert(errMsg);
		elem.focus();
		return false;
	}
	return true;
	}
	
function emailValidator(elem, helperMsg)
{
	var email_restrictions = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
	if(elem.value.match(email_restrictions))
	{
		return true;
	}else
	{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function selectGender(elem, helperMsg)
		{
		if ( ( document.regis.gender[0].checked == false ) && ( document.regis.gender[1].checked == false ) )
			{
			alert (helperMsg);
			return false;
			}
			
			return true;
		}	
		
function selectCountry(elem, helperMsg)
	{
	if(elem.value == "Select Country")
		{
		alert(helperMsg);
		elem.focus();
		return false;
		}
		else
		{
		return true;
		}
	}
	
	
function selectHear(elem, helperMsg)
	{
	if (!document.regis.webde[0].checked && !document.regis.webde[1].checked && !document.regis.webde[2].checked && !document.regis.webde[3].checked)
		{ 
		alert(helperMsg);
		elem.focus();
		return false;
		}
		else
		{
		return true;
		}
	}
	function selectRecomend(elem, helperMsg)
	{
	if (!document.regis.yes[0].checked && !document.regis.yes[1].checked)
		{ 
		alert(helperMsg);
		elem.focus();
		return false;
		}
		else
		{
		return true;
		}
	}