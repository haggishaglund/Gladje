/* Funtioner f�r initiering av kommunikation mellan klient och server */
function create_request ()
{
	try
	{
		request = new XMLHttpRequest ();
	}
	catch (error_1)
	{
		try
		{
			request = new ActiveXObject ("Msxml2.XMLHTTP");
		}
		catch (error_2)
		{
			try
			{
				request = new ActiveXObject ("Microsoft.XMLHTTP");
			}
			catch (error_3)
			{
				request = false;
			}
		}
	}
	return request;
}

function request_get (url, query, request)
{
	request.open ("GET", url+"?"+query, true);
	request.sent (null);
}

function request_post (url, query, request)
{
	request.open ("POST", url, true);
	request.setRequestHeader ("Content-type", "application/x-www-form-urlencoded");
	request.setRequestHeader ("Content-length", query.length);
	request.send (query);
}

function do_callback (callback, item)
{
	eval (callback + "(item)");
}

function init_ajax (url, query, callback, request_type, get_xml)
{
	var req = create_request ();

	req.onreadystatechange = function()
	{
		if (req.readyState = 4)
		{
			if (req.status = 200)
			{
				var item = req.responseText;
				if (get_xml==1)
				{
					item = req.responseXML;
				}
				do_callback (callback, item);
			}
		}
	}
	if (request_type == "post")
	{
		request_post (url, query, req);
	}
	else
	{
		request_get (url, query, req);
	}
}

/* Bokningsfunktioner */
function cback (text)
		{
			var response = text.getElementsByTagName ("QueryTable") [0].childNodes[0].nodeValue;

			if (response == "OK")
			{
				document.getElementById("bb_response").innerHTML = "Din bokning har genomf�rts.";
			}
			else if (response == "01")
			{
				document.getElementById("bb_response").innerHTML = "Det finns tyv�rr inga lediga bord.";
			}
			else if (response == "02")
			{
				document.getElementById("bb_response").innerHTML = "Denna tid �r inte bokningsbar.";
			}
			else if (response == "03")
			{
				document.getElementById("bb_response").innerHTML = "Denna dag har vi tyv�rr inte �ppet.";
			}
			else if (response == "04")
			{
				document.getElementById("bb_response").innerHTML = "Vi tar inte emot bokningar f�r detta datum just nu.";
			}
			else
			{
				document.getElementById("bb_response").innerHTML = "Ett fel har uppst�t! Var god f�rs�k igen.";
			}
		}

		function submit_data ()
		{
			area    = document.getElementById ("area") .value;
			date    = document.getElementById ("date") .value;
			from    = document.getElementById ("from") .value;
			to      = document.getElementById ("to") .value;
			party   = document.getElementById ("party") .value;
			name    = document.getElementById ("name") .value;
			company = document.getElementById ("company") .value;
			phone   = document.getElementById ("phone") .value;
			mail    = document.getElementById ("mail") .value;
			notes   = document.getElementById ("notes") .value;

			query = "message=<?xml version=\"1.0\"><PaBookTable><Area>"+area+"</Area><DateOfReservation>"+date+"</DateOfReservation><TimeOfReservation>"+from+"</TimeOfReservation><EndOfReservation>"+to+"</EndOfReservation><Party>"+party+"</Party><Name>"+name+"</Name><Company>"+company+"</Company><TelNo>"+phone+"</TelNo><Email>"+mail+"</Email><Text>"+notes+"</Text></PaBookTable>";

			init_ajax ("boka-bord.php", query, "cback", "post", 1);
			init_ajax ("boka-bord.php", "message=<PaClose>CloseDown</PaClose>", null, "post", 0);
		}
