setInterval(function(){

// create Date object for current location
d = new Date();
              
// convert to msec since Jan 1 1970
localTime = d.getTime();
     
// obtain local UTC offset and convert to msec
localOffset = d.getTimezoneOffset() * 60000;

// obtain UTC time in msec  
utc = localTime + localOffset;
 
// obtain and add destination's UTC time offset
// for example, Bombay  which is UTC + 5.5 hours 
// for example, Zurich  which is UTC + 1 hours    
offset = 1;   
zurich = utc + (3600000*offset);

// convert msec value to date string
nd = new Date(zurich); 
var dis = nd.toLocaleTimeString("hh:mm tt");
//	var dis1 = nd.toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3")
//	 var ampm = nd.getHours() >= 12 ? 'PM' : 'AM';
//	 var dis1 = nd.getHours() + ":"  
//	               + nd.getMinutes() + ":" 
//	                + nd.getSeconds() + "  "
//	 + ampm;

document.getElementById("swiss_da").innerHTML = dis;


},1000);