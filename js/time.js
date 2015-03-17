// JavaScript Document

function dateString(date,string) {
		/* key for creating string
			%Y = 2008
			%y = 08
			%M = January
			%m = Jan
			%N = 01 (month)
			%n = 1 (month)
			%W = Monday
			%w = Mon
			%D = 05 (day of month)
			%d = 5 (day of month)
		*/
		var year=date.getFullYear();
		var month=date.getMonth();
		var realMonth=month+1;
    var fillMonth=realMonth;
		if (realMonth<10) {
			fillMonth = '0' + realMonth;
		} 
		var months = ['January','February','March','April','May',
									'June','July','August','September',
									'October','November','December'];
		var monthName=months[month];
		var day=date.getDate();
    var fillDate=day;
		if (day<10) {
			fillDate='0' + day;
		} 
		var weekday=date.getDay();
		var weekdays = ['Sunday','Monday','Tuesday','Wednesday',
								'Thursday','Friday','Saturday'];
		var dayName=weekdays[weekday];
		
		
		//year
		string = string.replace(/%Y/g,year); // 2008
		string = string.replace(/%y/g,year.toString().slice(-2)); //08
		//month
		string = string.replace(/%M/g,monthName); //January
		string = string.replace(/%m/g,monthName.slice(0,3)); //Jan
		string = string.replace(/%N/g,fillMonth); // 01
		string = string.replace(/%n/g,realMonth); // 1
		//day of week
		string = string.replace(/%W/g,dayName); //Monday
		string = string.replace(/%w/g,dayName.slice(0,3)); //Mon
		//day of month
		string = string.replace(/%D/g,fillDate); //05
		string = string.replace(/%d/g,day); // 5
		return string;
	}