/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
		var initcolor="#FF0000";
		var yourcolor="#FFFFFF";
		var speed=200;
		var i;
		var j=0;

		function delay()
		{
				for (i=0;i<17;i++)
				{ 
					var newidd="yourid"+i; 
					document.getElementById(newidd).style.color=yourcolor; 
				}			
		}
		
		function colorit()
		{
			var idd="yourid"+j; 
			if (j<17)
			{
				document.getElementById(idd).style.color=yourcolor;
				j++
			} 
			else 
			{
				
				j=0; 
				for (i=0;i<17;i++)
				{ 
					var newidd="yourid"+i; 
					document.getElementById(newidd).style.color=initcolor; 
					
				}
				clearInterval(timer2);			
			} 
		}
		
		function doit()
		{
			timer2=setInterval("delay()",100);
			timer=setInterval("colorit()",speed)
		}
		//window.onload=doit;	