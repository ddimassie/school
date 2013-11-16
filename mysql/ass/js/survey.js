function average() 
		{	
	
			var a1 = document.form1.dura.value;
			var a2 = document.form1.desi.value;
			var a3 = document.form1.ecof.value;
			var a4 = document.form1.custo.value;
			var a5 = document.form1.qual.value;
			if (a1 > 5 || a1.length == 0 || a1 == 0)
				{
					alert("Please enter a number between 1 to 5 for Taste.");
					document.form1.dura.value = " ";
					document.form1.dura.focus();
					return false;	
				}
			if (a2 > 5 || a2.length == 0 || a2 == 0)
				{
					alert("Please enter a number between 1 to 5 Style/Design.");
					document.form1.desi.value = " ";
					document.form1.desi.focus();
					return false;		
				}
			
			if (a3 > 5 || a3.length == 0 || a3 == 0)
				{
					alert("Please enter a number between 1 to 5 Time to be served.");	
					document.form1.ecof.value = " ";
					document.form1.ecof.focus();
					return false;	
				}
			
			if (a4 > 5 || a4.length == 0 || a4 == 0)
				{
					alert("Please enter a number between 1 to 5 Customer Service.");	
					document.form1.custo.value = " ";
					document.form1.custo.focus();
					return false;	
				}
			
			if (a5 > 5 || a5.length == 0 || a5 == 0)
				{
					alert("Please enter a number between 1 to 5 Price.");	
					document.form1.qual.value = " ";
					document.form1.qual.focus();
					return false;	
				}
			
			
			
			var total = (parseInt(a1)+parseInt(a2)+parseInt(a3)+parseInt(a4)+parseInt(a5))/5;
			parseInt(total);
			
			if(total <= 1)
				{
				alert( "The average rate you have given is " + Math.round(total) + "! You know that our service needs improvement! Thank you for your cooperation!"  );
				}
				
			else if(total > 1 && total <= 2)
				{
				alert( "The average rate you have given is " + Math.round(total) + "! Our service is only satisfactory!? Thank you for your cooperation!"  );	
				}
				
			else if(total > 2 && total <= 3)
				{
				alert( "The average rate you have given is " + Math.round(total) + "! Our service is good! Thank you very much!"  );	
				}
				
			else if(total > 3 && total <= 4)
				{
				alert( "The average rate you have given is " + Math.round(total) + "! Our service is very GOOD! Thank you for your cooperation!"  );	
				}
			
			else if(total > 4 && total <= 5)
				{
				alert( "The average rate you have given is " + Math.round(total) + "! Excellent, now we will charge more! Thank you for your cooperation!"  );	
				}
				
			else 
				{
				alert("ERROR! Insert a number between 1 to 5 only! Thank you!");
				}
			
			
			
				
		}		
function dada()
{		/*The type of input should be described as button otherwise this dada function will not work.*/
		/*The function parseInt is used to convert the value to a integer.*/
		var a1 = parseInt(document.getElementById('dura').value);
		var a2 = parseInt(document.getElementById('desi').value);
		var a3 = parseInt(document.getElementById('ecof').value);
		var a4 = parseInt(document.getElementById('custo').value);
		var a5 = parseInt(document.getElementById('qual').value);
		var total = (a1+a2+a3+a4+a5)/5;
		/* Line 55 will select the paragraph id="nda" that should be describe in the survey .html */
		var zebra = document.getElementById("nda");
		zebra.innerHTML=  '<div id="john">'+'<p id="txt">' + 'The average is ' + total;
		
		
}
function lala()
{
		var lucas = document.getElementById("form1");
		lucas.innerHTML= " ";
		
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
