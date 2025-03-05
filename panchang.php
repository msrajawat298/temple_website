
<!DOCTYPE html>
<html lang="en-US">
    
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="../xmlrpc.php">
        <title>panchang</title>
<?php include 'header.php'; ?>
	<div class="entry-content">
		<div class="row">
<div class=" margin-left-10 margin-top-10">
        <link rel="stylesheet" type="text/css" href="../wp-content/themes/onepress/assets/css/hovertip.css"/>
        <link href="css/bootstrap.min.html" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../wp-content/themes/onepress/assets/css/style.css">
        <script src="../wp-content/themes/onepress/assets/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="../wp-content/themes/onepress/assets/js/hovertip4.js"></script>
        <script type="text/javascript" src="../wp-content/themes/onepress/assets/js/jsx.js"></script>
        <script type="text/javascript">
            function getCookie(c_name) {
                if (document.cookie.length > 0) {
                    c_start = document.cookie.indexOf(c_name + "=");
                    if (c_start != -1) {
                        c_start = c_start + c_name.length + 1;
                        c_end = document.cookie.indexOf(";", c_start);
                        if (c_end == -1)
                            c_end = document.cookie.length;
                        return unescape(document.cookie.substring(c_start, c_end));
                    }
                }
                return "";
            }

            function setCookie(c_name, value, expiredays) {
                var exdate = new Date();
                exdate.setDate(exdate.getDate() + expiredays);
                document.cookie = c_name + "=" + escape(value) +
                        ((expiredays == null) ? "" : ";expires=" + exdate.toUTCString());
            }

            var defaultcity = "Birmingham-AL";
            var defaultname = "Birmingham-AL";
            var overridedefault = 0;

            function checkCookie() {
                var cityname = getCookie('cityname');
                var cityhead = getCookie('cityhead');

                 cityname = 'Birmingham-AL';
                 cityhead ='Birmingham-AL';
                 setCookie('cityname', 'Birmingham-AL', 365);
                 setCookie('cityhead', 'Birmingham-AL', 365);
                var myurl = "";
                if (cityhead != null && cityhead != "" && cityhead != null && cityhead != "") {
                 
                    defaultcity = cityname;
                    defaultname = cityhead;
                    myurl = "http://www.mypanchang.com/panchang.php?getdata=getcity&amp;yr=2015&amp;cityname=" + cityname + "&cityhead=" + escape(cityhead.toString());
                    document.getElementById('defaultlocation').innerHTML = "<h1>Your current city is:" + cityhead + "</h1>. <br>You can also change or clear your default location. <br>To switch your location, <a href=\"#changemylocation\">Please click here</a>. <br><br>";
                    document.getElementById("todayspanchang").style.visibility = 'visible';
                    document.getElementById("todayspanchang").style.disabled = false;
                } else {
                    document.getElementById("todayspanchang").style.visibility = 'hidden';
                    document.getElementById("todayspanchang").style.disabled = true;
                    document.getElementById("todayspanchang").innerHTML = "";

                }
            }
            var cityname = getCookie('cityname');
            var mydata = "<iframe name='iframe1' id='iframe1' src=\"http://www.mypanchang.com/mobilewidget.php?cityname=" + cityname + "&color=452603\" scrolling=\"no\" width=\"150px\" height=\"400px\" frameborder=\"0\" style=\"border:none;\" allowTransparency=\"true\"></iframe>";
            $(function () {
                var tabContainers = $('div.tabs > div');
                tabContainers.hide().filter(':first').show();

                $('div.tabs ul.tabNavigation a').click(function () {
                    tabContainers.hide();
                    tabContainers.filter(this.hash).show();
                    $('div.tabs ul.tabNavigation a').removeClass('selected');
                    $(this).addClass('selected');
                    return false;
                }).filter(':first').click();
            });

            var Africa = new Array(
                    {name: "CapeTown, South Africa", url: "CapeTown-SouthAfrica"},
                    {name: "Cairo, Egypt", url: "Cairo-Egypt"},
                    {name: "Dar es salam,Tanzania", url: "Dar-es-salam,Tanzania"},
                    {name: "Durban, South Africa", url: "Durban-SouthAfrica"},
                    {name: "Johannesburg, South Africa", url: "Johannesburg-SouthAfrica"},
                    {name: "Kinshasa, Congo/Zaire", url: "Kinshasa-Congo-Zaire"},
                    {name: "Lusaka, Zambia", url: "Lusaka-Zambia"},
                    {name: "Nairobi, Kenya", url: "Nairobi-Kenya"},
                    {name: "PortLouis, Mauritius", url: "PortLouis-Mauritius"},
                    {name: "Pretoria, South Africa", url: "Pretoria-SouthAfrica"},
                    {name: "Victoria, Mahe, Seychelles", url: "Victoria-Mahe-Seychelles"});

            var AL = new Array(
                    {name: "Birmingham, AL", url: "Birmingham-AL"},
                    {name: "Troy, Alabama", url: "Troy-Alabama"}
            );

            var AK = new Array(
                    {name: "Anchorage, AK", url: "Anchorage-AK"}
            );

            var AZ = new Array(
                    {name: "Chandler, AZ", url: "Chandler-AZ"},
                    {name: "Phoenix, AZ", url: "Phoenix-AZ"},
                    {name: "Scottsdale, AZ", url: "Scottsdale-AZ"},
                    {name: "Tuscon, AZ", url: "Tuscon-AZ"}
            );

            var AR = new Array(
                    {name: "Fayetville, AR", url: "Fayetville-AR"},
                    {name: "Jonesboro, AR", url: "Jonesboro-AR-USA"},
                    {name: "LittleRock, AR", url: "LittleRock-AR"}
            );

            var CA = new Array(
                    {name: "Concord, CA", url: "Concord-CA"},
                    {name: "Covina, California", url: "Covina-California"},
                    {name: "Cupertino, CA", url: "Cupertino-CA"},
                    {name: "DiamondBar, CA", url: "DiamondBar-CA"},
                    {name: "Fremont, CA", url: "Fremont-CA-USA"},
                    {name: "Hayward, CA", url: "Hayward-California"},
                    {name: "Irvine, California", url: "Irvine-California"},
                    {name: "Livermore, CA", url: "Livermore-CA-USA"},
                    {name: "Los Angeles, CA", url: "LosAngeles-CA"},
                    {name: "Malibu, CA", url: "Malibu-CA-USA"},
                    {name: "Milpitas, CA", url: "Milpitas-CA"},
                    {name: "Montclair, CA", url: "Montclair-CA"},
                    {name: "Mount Shasta, CA", url: "MountShasta-CA"},
                    {name: "Mountain View, CA", url: "MountainView-CA"},
                    {name: "Napa, CA", url: "Napa-CA-USA"},
                    {name: "Riverside, California", url: "Riverside-California"},
                    {name: "Roseville(PlacerCounty), CA", url: "Roseville(PlacerCounty)-CA"},
                    {name: "Sacramento, CA", url: "Sacramento-CA(US)"},
                    {name: "San Diego, CA", url: "SanDiego-CA"},
                    {name: "San Francisco, CA", url: "SanFrancisco-CA"},
                    {name: "San Jose, CA", url: "SanJose-CA"},
                    {name: "San Mateo, CA", url: "SanMateo-CA"},
                    {name: "San Ramon, CA", url: "SanRamon-CA"},
                    {name: "SantaClara, CA", url: "SantaClara-CA"},
                    {name: "Stockton, CA", url: "Stockton-CA"},
                    {name: "Sunnyvale, CA", url: "Sunnyvale-CA"},
                    {name: "Waterford, CA", url: "Waterford-CA"}
            );

            var CO = new Array(
                    {name: "Denver, CO", url: "Denver-CO"}
            );

            var CT = new Array(
                    {name: "Hartford, CT", url: "Hartford-CT"},
                    {name: "Stamford, CT", url: "Stamford-CT"}
            );

            var DE = new Array(
                    {name: "Wilmington, DE", url: "Wilmington-DE"}
            );

            var FL = new Array(
                    {name: "Fort Lauderdale, FL", url: "FortLauderdale-FL"},
                    {name: "Jacksonville, FL", url: "Jacksonville-FL"},
                    {name: "Miami, FL", url: "Miami-FL"},
                    {name: "Ocala, FL", url: "Ocala-FL"},
                    {name: "Orlando, FL", url: "Orlando-FL-USA"},
                    {name: "Stuart, FL", url: "Stuart-FL"},
                    {name: "Tampa, FL", url: "Tampa-FL"},
                    {name: "Titusville, FL", url: "Titusville-FL"}
            );

            var GA = new Array(
                    {name: "Atlanta, GA", url: "Atlanta-Georgia"}
            );

            var HI = new Array(
                    {name: "Honolulu, Hawai", url: "Honolulu-Hawai"}
            );

            var ID = new Array(
                    {name: "Boise, Idaho", url: "Boise-Idaho"}
            );

            var IL = new Array(
                    {name: "Chicago, IL", url: "Chicago-IL"},
                    {name: "Peoria, IL", url: "Peoria-IL"},
                    {name: "Springfield, IL", url: "Springfield-IL"}
            );

            var IN = new Array(
                    {name: "Bedford, IN", url: "Bedford-IN"},
                    {name: "Evansville, IN", url: "Evansville-Indiana-USA"},
                    {name: "FortWayne, IN", url: "FortWayne-IN"},
                    {name: "Indianapolis, IN", url: "Indianapolis-IN"},
                    {name: "Mishawaka / South Bend / Notre Dame, IN", url: "Mishawaka-SouthBend-Notredame-IN"},
                    {name: "Richmond, Indiana", url: "Richmond-Indiana"}
            );

            var IA = new Array(
                    {name: "Cedar Rapids, Iowa", url: "CedarRapids-Iowa-USA"},
                    {name: "Coralville, Iowa", url: "Coralville-Iowa"},
                    {name: "DesMoines, Iowa", url: "DesMoines-Iowa"},
                    {name: "Madrid, Iowa", url: "Madrid-Iowa-USA"}
            );

            var KS = new Array(
                    {name: "Kansas City, KS", url: "KansasCity-KS"},
                    {name: "Wichita, Kansas", url: "Wichita-Kansas-USA"}
            );

            var KY = new Array(
                    {name: "Lexington, KY", url: "Lexington-KY"},
                    {name: "Louisville, KY", url: "Louisville-KY"}
            );

            var LA = new Array(
                    {name: "Baton Rouge, Louisiana", url: "BatonRouge-Louisiana-USA"},
                    {name: "New Orleans, Louisiana", url: "NewOrleans-Louisiana-USA"}
            );

            var ME = new Array(
                    {name: "Augusta, ME", url: "Augusta-ME"}
            );

            var MD = new Array(
                    {name: "Baltimore, MD", url: "Baltimore-MD-USA"},
                    {name: "Lanham, MD", url: "Lanham-MD"}
            );

            var MA = new Array(
                    {name: "Ashland, MA", url: "Ashland-MA"},
                    {name: "Boston, MA", url: "Boston-MA"},
                    {name: "Marlborough, MA", url: "Marlborough-MA(US)"},
                    {name: "Springfield, MA", url: "Springfield-MA"}
            );

            var MI = new Array(
                    {name: "Detroit, MI", url: "Detroit-MI"},
                    {name: "Kalamazoo, MI", url: "Kalamazoo-MI"},
                    {name: "Lansing, Michigan, USA", url: "Lansing-Michigan"},
                    {name: "Novi, MI", url: "Novi-MI"}
            );

            var MN = new Array(
                    {name: "Minneapolis, MN", url: "Minneapolis-MN"},
                    {name: "Minnesota, MN", url: "Minnesota-MN-USA"},
                    {name: "St. Paul, MN", url: "StPaul-MN"}
            );

            var MS = new Array(
                    {name: "Brandon, MS", url: "Brandon-MS"}
            );

            var MO = new Array(
                    {name: "St. Louis, Missouri", url: "St.Louis-Missouri"}
            );

            var MT = new Array(
                    {name: "Helena, MT", url: "Helena-MT"}
            );

            var NE = new Array(
                    {name: "Omaha, NE", url: "Omaha-NE"}
            );

            var NV = new Array(
                    {name: "Las Vegas, NV", url: "LasVegas-Nevada"},
                    {name: "Reno, NV", url: "Reno-NV"}
            );

            var NH = new Array(
                    {name: "Nashua, NH", url: "Nashua-NH"}
            );

            var NJ = new Array(
                    {name: "Chatham, NJ", url: "Chatham-NJ"},
                    {name: "Edison, NJ", url: "Edison-NJ"},
                    {name: "New Jersey, NJ", url: "NewJersey-NJ"}
            );

            var NM = new Array(
                    {name: "Albuquerque, NewMexico", url: "Albuquerque-NewMexico"},
                    {name: "Gallup, New Mexico", url: "Gallup-NewMexico"}
            );

            var NY = new Array(
                    {name: "Albany, NY", url: "Albany-NY"},
                    {name: "Buffalo, NY", url: "Buffalo-NY(US)"},
                    {name: "New York, NY", url: "NewYork-NY"},
                    {name: "Rochester, NY", url: "Rochester-NY"}
            );

            var NC = new Array(
                    {name: "Asheville, North Carolina", url: "Asheville-NorthCarolina-USA"},
                    {name: "Cary, NC", url: "Cary-NC"},
                    {name: "Charlotte, NC", url: "Charlotte-NC-USA"},
                    {name: "Greensboro, NC", url: "Greensboro-NC"},
                    {name: "Greenville, North Carolina", url: "Greenville-NorthCarolina-USA"},
                    {name: "Raleigh, NC", url: "Raleigh-NC"},
                    {name: "Winston, Salem, NC", url: "Winston-Salem-NC"}
            );

            var ND = new Array(
                    {name: "Fargo, ND", url: "Fargo-ND"}
            );

            var OH = new Array(
                    {name: "Cincinnati, OH", url: "Cincinnati-OH"},
                    {name: "Cleveland, OH", url: "Cleveland-OH"},
                    {name: "Columbus, OH", url: "Columbus-OH"},
                    {name: "Dayton, OH", url: "Dayton-OH"},
                    {name: "Mason, OH, USA", url: "Mason-OH-USA"},
                    {name: "Toledo, OH", url: "Toledo-OH"}
            );

            var OK = new Array(
                    {name: "Stillwater, OK", url: "Stillwater-OK(US)"},
                    {name: "OklahomaCity OK", url: "OklahomaCity-Oklahoma"},
                    {name: "Tulsa, Oklahoma", url: "Tulsa-Oklahoma"}
            );

            var OR = new Array(
                    {name: "Corvalis, OR", url: "Corvalis-OR"},
                    {name: "Portland, OR", url: "Portland-OR-USA"}
            );

            var PA = new Array(
                    {name: "Lancaster, PA", url: "Lancaster-PA"},
                    {name: "New Cumberland, PA", url: "NewCumberland-PA-USA"},
                    {name: "Philadelphia, PA", url: "Philadelphia-PA"},
                    {name: "Pittsburgh, PA", url: "Pittsburgh-PA"}
            );

            var RI = new Array(
                    {name: "Providence, RI", url: "Providence-RI"}
            );

            var SC = new Array(
                    {name: "Greenville, South Carolina", url: "Greenville-SC"},
                    {name: "Summerville, South Carolina", url: "Summerville-SouthCarolina"},
                    {name: "Sumter, SC", url: "Sumter-SC"}
            );

            var SD = new Array(
                    {name: "Pierre, SD", url: "Pierre-SD"}
            );

            var TN = new Array(
                    {name: "Chattanooga, TN", url: "Chattanooga-TN(US)"},
                    {name: "Knoxville, TN", url: "Knoxville-TN"},
                    {name: "Memphis, TN", url: "Memphis-TN"},
                    {name: "Nashville, TN", url: "Nashville-TN"}
            );

            var TX = new Array(
                    {name: "Austin, TX", url: "Austin-TX"},
                    {name: "Beaumont, TX", url: "Beaumont-TX(US)"},
                    {name: "Dallas, TX", url: "Dallas-Texas"},
                    {name: "El Paso, TX", url: "ElPaso-TX"},
                    {name: "Houston, Texas", url: "Houston-Texas"},
                    {name: "Irving, TX", url: "Irving-TX"},
                    {name: "Irvington, TX", url: "Irvington-TX"},
                    {name: "Lubbock, TX", url: "Lubbock-TX"},
                    {name: "Midland, Texas", url: "Midland-Texas"},
                    {name: "Navasota, TX", url: "Navasota-TX"},
                    {name: "Pearland, TX", url: "Pearland-TX"},
                    {name: "Plano, TX", url: "Plano-TX"},
                    {name: "San Antonio, TX", url: "SanAntonio-TX"},
                    {name: "Temple, TX", url: "Temple-TX"}
            );

            var UT = new Array(
                    {name: "South Jordan, UT", url: "SouthJordan-UT-USA"}
            );

            var VT = new Array(
                    {name: "Montpelier, VT", url: "Montpelier-VT"}
            );

            var VA = new Array(
                    {name: "Arlington, Virginia, USA", url: "Arlington-Virginia-USA"},
                    {name: "Ashburn, VA", url: "Ashburn-VA"},
                    {name: "Richmond, VA", url: "Richmond-VA-USA"},
                    {name: "Vienna, VA", url: "Vienna-VA"}
            );

            var WA = new Array(
                    {name: "Bellingham, WA", url: "Bellingham-WA-USA"},
                    {name: "Seattle, WA", url: "Seattle-WA-USA"},
                    {name: "Spokane, WA", url: "Spokane-WA"},
                    {name: "Yakima, WA", url: "Yakima-WA"}
            );

            var DC = new Array(
                    {name: "Washington, DC", url: "Washington-DC"}
            );

            var WV = new Array(
                    {name: "Charleston, WV", url: "Charleston-WV"}
            );

            var WI = new Array(
                    {name: "Madison, WI", url: "Madison-WI"},
                    {name: "Milwaukee, WI", url: "Milwaukee-WI"},
                    {name: "Pewaukee, Wisconsin", url: "Pewaukee-Wisconsin"}
            );

            var WY = new Array(
                    {name: "Laramie, Wyoming", url: "Laramie-Wyoming"}
            );

            var PRico = new Array(
                    {name: "San Juan, Puerto Rico", url: "SanJuan-PuertoRico"}
            );

            var SouthAmerica = new Array(
                    {name: "Bogota, Columbia", url: "Bogota-Columbia-SouthAmerica"},
                    {name: "BuenosAires, Argentina", url: "BuenosAires-Argentina"},
                    {name: "Paramaribo, Surinam", url: "Paramaribo-Surinam"});
            var Canada = new Array(
                    {name: "Calgary, AB", url: "Calgary-AB-Canada"},
                    {name: "Edmonton, Alberta", url: "Edmonton-Alberta"},
                    {name: "Halifax, NovaScotia, Canada", url: "Halifax-NovaScotia-Canada"},
                    {name: "Montreal, Quebec", url: "Montreal-Quebec-Canada"},
                    {name: "Ottawa, ON", url: "Ottawa-ON-Canada"},
                    {name: "Saskatoon, Saskatchewan, Canada", url: "Saskatoon-Saskatchewan-Canada"},
                    {name: "Scarborough, Ontario, Canada", url: "Scarborough-OntarioCanada"},
                    {name: "St.John's, Newfoundland, Canada", url: "St.Johns-Newfoundland-Canada"},
                    {name: "Toronto, ON", url: "Toronto-ON-Canada"},
                    {name: "Vancouver, BC", url: "Vancouver-BC-Canada"},
                    {name: "Victoria, BC", url: "Victoria-BC-Canada"},
                    {name: "Winnipeg, MB", url: "Winnipeg-MB-Canada"});
            var Carrebian = new Array(
                    {name: "Bridgetown, Barbados", url: "Bridgetown-Barbados"},
                    {name: "Georgetown, Guyana", url: "Georgetown-Guyana"},
                    {name: "Kingston, Jamaica", url: "Kingston-Jamaica"},
                    {name: "Nassau, Bahamas", url: "Nassau-Bahamas"},
                    {name: "Port of Spain, Trinidad and Tobago", url: "PortofSpain-TrinidadandTobago-WestIndies"});
            var Australia = new Array(
                    {name: "Adelaide, Australia", url: "Adelaide-Australia"},
                    {name: "Brisbane, Australia", url: "Brisbane-Australia"},
                    {name: "Canberra, Australia", url: "Canberra-Australia"},
                    {name: "Darwin, Australia", url: "Darwin-Australia"},
                    {name: "Melbourne, Australia", url: "Melbourne-Australia"},
                    {name: "Perth, Australia", url: "Perth-Australia"},
                    {name: "Sydney, Australia", url: "Sydney-Australia"});

            var Newzeland = new Array(
                    {name: "Auckland, New Zealand", url: "Auckland-NZ"},
                    {name: "Hamilton, New Zealand", url: "Hamilton-NZ"});
            var Fiji = new Array(
                    {name: "Nadi, Fiji", url: "Nadi-Fiji"},
                    {name: "Suva, Fiji", url: "Suva-Fiji"});
            var Europe = new Array(
                    {name: "Aberdeen, Scotland (UK)", url: "Aberdeen-Scotland-UK"},
                    {name: "Amsterdam, Netherlands", url: "Amsterdam-Netherlands"},
                    {name: "Berlin, Germany", url: "Berlin-Germany"},
                    {name: "Birmingham, England, UK", url: "Birmingham-England-UK"},
                    {name: "Bonn, Germany", url: "Bonn-Germany"},
                    {name: "Bremen, Germany", url: "Bremen-Germany"},
                    {name: "Budapest, Hungary", url: "Budapest-Hungary"},
                    {name: "Copenhagen, Denmark", url: "Copenhagen-Denmark"},
                    {name: "Czarnow, Poland", url: "Czarnow-Poland"},
                    {name: "Dublin, Ireland", url: "Dublin-Ireland"},
                    {name: "Edinburgh, Scotland, UK", url: "Edinburgh-Scotland-UK"},
                    {name: "Fort-de-France Martinique", url: "Fort-de-France-Martinique"},
                    {name: "Frankfurt, Germany", url: "FrankfurtamMain-Germany"},
                    {name: "Geneva, Switzerland", url: "Geneva-Switzerland"},
                    {name: "Glasgow, Scotland, UK", url: "Glasgow-Scotland-UK"},
                    {name: "Hamburg, Germany", url: "Hamburg-Germany"},
                    {name: "Hannover, Germany", url: "Hannover-Germany"},
                    {name: "Helsinki, Finland", url: "Helsinki-Finland"},
                    {name: "Homburg-Saarland, Germany", url: "Homburg-Saarland-Germany"},
                    {name: "Ipswich, UK", url: "Ipswich-UK"},
                    {name: "Istanbul, Turkey", url: "Istanbul-Turkey"},
                    {name: "Leicester, UK", url: "Leicester-England-UK"},
                    {name: "Kiev, Ukraine", url: "Kiev-Ukraine"},
                    {name: "London, UK", url: "London-UnitedKingdom"},
                    {name: "Maastricht, Netherlands", url: "Maastricht-Netherlands"},
                    {name: "Madrid, Spain", url: "Madrid-Spain"},
                    {name: "Malaga, Spain", url: "Malaga-Spain"},
                    {name: "Manchester, UK", url: "Manchester-UK"},
                    {name: "Milano, Italy", url: "Milano-Italy"},
                    {name: "Munich, Germany", url: "Munich-Germany"},
                    {name: "Nuremberg, Germany", url: "Nuremberg-Germany"},
                    {name: "Odense, Denmark", url: "Odense-Denmark"},
                    {name: "Oslo, Norway", url: "Oslo-Norway"},
                    {name: "Paris, France", url: "Paris-France"},
                    {name: "Plovdiv, Bulgaria", url: "Plovdiv-Bulgaria"},
                    {name: "Regensburg, Germany", url: "Regensburg-Germany"},
                    {name: "Rome, Italy", url: "Rome-Italy"},
                    {name: "Rotterdam, Netherlands", url: "Rotterdam-Netherlands"},
                    {name: "Stockholm, Sweden", url: "Stockholm-Sweden"},
                    {name: "Warsaw, Poland", url: "Warsaw-Poland"},
                    {name: "Zurich, Switzerland", url: "Zurich-Switzerland"});
            var ArabianGulf = new Array(
                    {name: "AbuDhabi, UAE", url: "AbuDhabi-UAE"},
                    {name: "Doha, Qatar", url: "Doha-Qatar"},
                    {name: "Dubai, UAE", url: "Dubai-UAE"},
                    {name: "Kuwait City, Kuwait", url: "KuwaitCity-Kuwait"},
                    {name: "Manama, Bahrain", url: "Manama-Bahrain"},
                    {name: "Muscat, Oman", url: "Muscat-Oman"},
                    {name: "Riyadh, Saudi Arabia", url: "Riyadh-SaudiArabia"},
                    {name: "San'A' , Yemen", url: "SanAYemen"},
                    {name: "Sharjah, UAE", url: "Sharjah-UAE"},
                    {name: "Tehran, Iran", url: "Tehran-Iran"});
            var India = new Array(
                    {name: "Agra, UP", url: "Agra-UP"},
                    {name: "Ahemadabad (Amadavad), Gujarat", url: "Ahemadabad-Gujarat"},
                    {name: "Ajmer", url: "Ajmer"},
                    {name: "Aligarh, UP", url: "Aligarh-UP"},
                    {name: "Allahabad, UP", url: "Allahabad-UP"},
                    {name: "Amadavad, Gujarat", url: "Ahemadabad-Gujarat"},
                    {name: "Amaravati, Maharastra", url: "Amaravati-Maharastra"},
                    {name: "Amritsar", url: "Amritsar"},
                    {name: "Anand, Gujarat", url: "Anand-Gujarat-India"},
                    {name: "Aurangabad, Maharastra", url: "Aurangabad-Maharastra"},
                    {name: "Badrinath, Uttarakhand", url: "Badrinath-Uttarakhand"},
                    {name: "Banaras", url: "Varanasi-India"},
                    {name: "Bangalore / Bengaluru", url: "Bangalore-India"},
                    {name: "Baroda", url: "Baroda-India"},
                    {name: "Belgaum", url: "Belgaum-India"},
                    {name: "Bharuch", url: "Bharuch-India"},
                    {name: "Bhatinda, Punjab, India", url: "Bhatinda-India"},
                    {name: "Bhavnagar, Gujarat", url: "Bhavnagar-Gujarat-India"},
                    {name: "Bhopal, India", url: "Bhopal-India"},
                    {name: "Bhubaneswar", url: "Bhubaneswar-India"},
                    {name: "Bhuj", url: "Bhuj-India"},
                    {name: "Bikaner", url: "Bikaner"},
                    {name: "Bilaspur, Chhattisgarh", url: "Bilaspur-Chhattisgarh-India"},
                    {name: "Bombay / Mumbai, Maharastra", url: "Mumbai-Maharastra-India"},
                    {name: "Chandigarh", url: "Chandigarh-India"},
                    {name: "Chennai", url: "Chennai-India"},
                    {name: "Coimbatore", url: "Coimbatore-India"},
                    {name: "Culcutta / Kolkata", url: "Kolkata-India"},
                    {name: "Dakor, Kheda, Gujarat", url: "Dakor-Kheda-Gujarat"},
                    {name: "Darjiling, West Bengal", url: "Darjiling-WestBengal"},
                    {name: "Dehradun", url: "DehraDun"},
                    {name: "Delhi / New Delhi ", url: "NewDelhi-India"},
                    {name: "Deoria, UP", url: "Deoria-UP-India"},
                    {name: "Dharmapuri, AP", url: "Dharmapuri"},
                    {name: "Dharwad, Karnataka", url: "Dharwar-India"},
                    {name: "Dwarka", url: "Dwarka-India"},
                    {name: "Ernakulam", url: "Ernakulam-India"},
                    {name: "Gangotri, Uttarakhand", url: "Gangotri-Uttarakhand"},
                    {name: "Gauhati", url: "Gauhati-India"},
                    {name: "Gaya (Holy Gaya Ji), Bihar", url: "Gaya(HolyGayaJi)-Bihar"},
                    {name: "Ghaziabad, UP", url: "Ghaziabad-UP"},
                    {name: "Godhra, Gujarat", url: "Godhra-Gujarat"},
                    {name: "Guntur, Andra Pradesh", url: "Guntur-AndraPradesh-India"},
                    {name: "Gurgaon, Haryana", url: "Gurgaon-Haryana"},
                    {name: "Haridwar, Uttarakhand", url: "Haridwar-Uttarakhand"},
                    {name: "Himatnagar, Gujarat", url: "Himatnagar-Gujarat"},
                    {name: "Hubli", url: "Hubli-India"},
                    {name: "Hyderabad, AP", url: "Hyderabad-AP-India"},
                    {name: "Idar, Gujarat", url: "Idar-Gujarat"},
                    {name: "Imphal, Manipur", url: "Imphal-Manipur"},
                    {name: "Indore, MP", url: "Indore-India"},
                    {name: "Jaipur", url: "Jaipur"},
                    {name: "Jaisalmer", url: "Jaisalmer"},
                    {name: "Jalandhar (Punjab)", url: "Jullundhur"},
                    {name: "Jammu, Kashmir", url: "Jammu-Kashmir-India"},
                    {name: "Jamnagar", url: "Jamnagar-India"},
                    {name: "Jamshedpur", url: "Jamshedpur"},
                    {name: "Jhansi, UP", url: "Jhansi-UP"},
                    {name: "Jodhpur", url: "Jodhpur"},
                    {name: "Jullundhur (Punjab)", url: "Jullundhur"},
                    {name: "Kakinada, AP", url: "Kakinada-AP-India"},
                    {name: "Kalyan, India", url: "Kalyan-India"},
                    {name: "Kallakkurichchi, Viluppuram, India", url: "Kallakkurichchi-India"},
                    {name: "Kanchipuram, India", url: "Kanchipuram-India"},
                    {name: "Kanpur, UP", url: "Kanpur-UP"},
                    {name: "Kedarnath, Uttarakhand", url: "Kedarnath-Uttarakhand"},
                    {name: "Khedabrahma, Gujarat", url: "Khedabrahma-Sabarkantha-Gujarat"},
                    {name: "Kolhapur, Maharastra", url: "Kolhapur-Maharastra"},
                    {name: "Kolkata", url: "Kolkata-India"},
                    {name: "Kota, Rajasthan", url: "Kota-Rajasthan"},
                    {name: "Kumbakonam", url: "Kumbakonam-India"},
                    {name: "Kurukshetra", url: "Kurukshetra-India"},
                    {name: "Lucknow", url: "Lucknow-India"},
                    {name: "Ludhiana", url: "Ludhiana-India"},
                    {name: "Machilipatnam, AP ", url: "Machilipatnam-AP-India"},
                    {name: "Madurai", url: "Madurai-India"},
                    {name: "Manali, Himachal Pradesh", url: "Manali-HimachalPradesh-India"},
                    {name: "Mandi, Himachal Pradesh", url: "Mandi-HimachalPradesh-India"},
                    {name: "Mangalore, Karnataka", url: "Mangalore-Karnataka-India"},
                    {name: "Mathura, UP", url: "Mathura-UP"},
                    {name: "Meerut, UP", url: "Meerut-UP"},
                    {name: "Mehsana", url: "Mehsana-India"},
                    {name: "Mumbai, Maharastra", url: "Mumbai-Maharastra-India"},
                    {name: "Mysore, Karnataka, India", url: "Mysore-Karnataka-India"},
                    {name: "Nagpur, Maharastra", url: "Nagpur-Maharastra"},
                    {name: "Nasik, Maharastra", url: "Nasik-Maharastra"},
                    {name: "Nainital, Uttarakhand", url: "Nainital-Uttarakhand"},
                    {name: "Nathdwara (Lord Srinathji Temple)", url: "Nathdwara(LordSrinathjiTemple)-India"},
                    {name: "Nellore", url: "Nellore-India"},
                    {name: "New Delhi", url: "NewDelhi-India"},
                    {name: "Noida, UP", url: "Noida-UP"},
                    {name: "Palakkad(Palghat), Kerala", url: "Palakkad(Palghat)-Kerala"},
                    {name: "Panaji (Panjim), Goa", url: "Panaji(Panjim)-Goa"},
                    {name: "Pandharpur, Maharastra", url: "Pandharpur-Maharastra"},
                    {name: "Patan, Gujarat", url: "Patan-Gujarat"},
                    {name: "Patiala, Punjab, India", url: "Patiala-Punjab-India"},
                    {name: "Patna, Bihar", url: "Patna-Bihar-India"},
                    {name: "Pondicherry", url: "Pondicherry-India"},
                    {name: "Proddatur, Andhra Pradesh", url: "Proddatur-AndhraPradesh-India"},
                    {name: "Pune, Maharastra", url: "Pune-Maharastra-India"},
                    {name: "Puri (Jagganath Puri)", url: "Puri(CityofLordJaggnath)-India"},
                    {name: "Puttur (Near Mangalore)", url: "PutturnearMangalore"},
                    {name: "Raipur, Chhattisgarh", url: "Raipur-Chhattisgarh"},
                    {name: "Rajahmundry", url: "Rajahmundry-India"},
                    {name: "Rajkot", url: "Rajkot-India"},
                    {name: "Ranchi, Jharkhand", url: "Ranchi-Jharkhand"},
                    {name: "Rishikesh, Uttarakhand", url: "Rishikesh-Uttarakhand"},
                    {name: "Rohtak, Hariyana", url: "Rohtak-Hariyana"},
                    {name: "Roorkee", url: "Roorkee-India"},
                    {name: "Saharanpur, UP", url: "Saharanpur-UP"},
                    {name: "Sangli, Maharastra", url: "Sangli-Maharastra"},
                    {name: "Satara, Maharastra", url: "Satara-Maharastra"},
                    {name: "Secunderabad, Andra Pradesh", url: "Secunderabad-AndraPradesh-India"},
                    {name: "Shimla, Himachal Pradesh", url: "Shimla-HimachalPradesh"},
                    {name: "Shiradi (Saibaba Temple)", url: "Shiradi(SaibabaTemple)-Maharastra"},
                    {name: "Srirangam / Thiruvarangam, Tamilnadu", url: "Srirangam(Thiruvarangam)-India"},
                    {name: "Surat", url: "Surat-India"},
                    {name: "Thiruvananthapuram, Kerala", url: "Thiruvananthapuram-Kerala"},
                    {name: "Thiruvarangam / Srirangam, Tamilnadu", url: "Srirangam(Thiruvarangam)-India"},
                    {name: "Tirumala, AP", url: "Tirumala-AP-India"},
                    {name: "Udaipur", url: "Udaipur"},
                    {name: "Udipi, Karnataka, India", url: "Udipi-Karnataka-India"},
                    {name: "Ujjain", url: "Ujjain-India"},
                    {name: "Uttarkashi, Uttarakhand", url: "Uttarkashi-Uttarakhand"},
                    {name: "Vadodara", url: "Baroda-India"},
                    {name: "Varanasi", url: "Varanasi-India"},
                    {name: "Vijayawada", url: "Vijayawada-India"},
                    {name: "Vishakhapatnam", url: "Vishakhapatnam-India"},
                    {name: "Zirapur, Rajgarh, MP", url: "Zirapur-Rajgarh-MP"});
            var srilanka = new Array(
                    {name: "Colombo, Srilanka", url: "Colombo-Srilanka"},
                    {name: "Jaffna, Srilanka", url: "Jaffna-Srilanka"},
                    {name: "Kandy, SriLanka", url: "Kandy-SriLanka"});
            var pakistan = new Array(
                    {name: "Karachi, Pakistan", url: "Karachi-Pakistan"},
                    {name: "Islamabad, Pakistan", url: "Islamabad-Pakistan"},
                    {name: "Lahore, Pakistan", url: "Lahore-Pakistan"});
            var SouthEastAsia = new Array(
                    {name: "Antipolo, Philippines", url: "Antipolo-Philippines"},
                    {name: "Bali, Indonesia", url: "Bali-Indonesia"},
                    {name: "Bangkok, Thailand", url: "Bangkok-Thailand"},
                    {name: "Dhaka, Bangladesh", url: "Dhaka-Bangladesh"},
                    {name: "Hanoi, Vietnam", url: "Hanoi-Vietnam"},
                    {name: "HongKong, China", url: "HongKong-China"},
                    {name: "Jakarta, Indonesia", url: "Jakarta-Indonesia"},
                    {name: "Kuala Lumpur, Malaysia", url: "KualaLumpur-Malaysia"},
                    {name: "Singapore", url: "Singapore"});
            var ChinaJapan = new Array(
                    {name: "Shanghai, China", url: "Shanghai-China"},
                    {name: "Tokyo, Japan", url: "Tokyo-Japan"},
                    {name: "Ulaanbaatar, Mongolia", url: "Ulaanbaatar-Mongolia"},
                    {name: "Yiwu(Zhejiang), China", url: "Yiwu(Zhejiang)-China"});

            var Americas = new Array(
                    {name: "Alabama (AL)", level: 2, obj: AL},
                    {name: "Alaska (AK)", level: 2, obj: AK},
                    {name: "Arizona (AZ)", level: 2, obj: AZ},
                    {name: "Arkansas (AR)", level: 2, obj: AR},
                    {name: "California (CA)", level: 2, obj: CA},
                    {name: "Colorado (CO)", level: 2, obj: CO},
                    {name: "Connecticut (CT)", level: 2, obj: CT},
                    {name: "Delaware (DE)", level: 2, obj: DE},
                    {name: "Florida (FL)", level: 2, obj: FL},
                    {name: "Georgia (GA)", level: 2, obj: GA},
                    {name: "Hawaii (HI)", level: 2, obj: HI},
                    {name: "Idaho (ID)", level: 2, obj: ID},
                    {name: "Illinois (IL)", level: 2, obj: IL},
                    {name: "Indiana (IN)", level: 2, obj: IN},
                    {name: "Iowa (IA)", level: 2, obj: IA},
                    {name: "Kansas (KS)", level: 2, obj: KS},
                    {name: "Kentucky (KY)", level: 2, obj: KY},
                    {name: "Louisiana (LA)", level: 2, obj: LA},
                    {name: "Maine (ME)", level: 2, obj: ME},
                    {name: "Maryland (MD)", level: 2, obj: MD},
                    {name: "Massachusetts  (MA)", level: 2, obj: MA},
                    {name: "Michigan   (MI)", level: 2, obj: MI},
                    {name: "Minnesota (MN)", level: 2, obj: MN},
                    {name: "Mississippi (MS)", level: 2, obj: MS},
                    {name: "Missouri  (MO)", level: 2, obj: MO},
                    {name: "Montana (MT)", level: 2, obj: MT},
                    {name: "Nebraska (NE)", level: 2, obj: NE},
                    {name: "Nevada  (NV)", level: 2, obj: NV},
                    {name: "New Hampshire (NH)", level: 2, obj: NH},
                    {name: "New Jersey (NJ)", level: 2, obj: NJ},
                    {name: "New Mexico (NM)", level: 2, obj: NM},
                    {name: "New York (NY)", level: 2, obj: NY},
                    {name: "North Carolina (NC)", level: 2, obj: NC},
                    {name: "North Dakota (ND)", level: 2, obj: ND},
                    {name: "Ohio (OH)", level: 2, obj: OH},
                    {name: "Oklahoma (OK)", level: 2, obj: OK},
                    {name: "Oregon (OR)", level: 2, obj: OR},
                    {name: "Pennsylvania  (PA)", level: 2, obj: PA},
                    {name: "Puerto Rico", level: 2, obj: PRico},
                    {name: "Rhode Island (RI)", level: 2, obj: RI},
                    {name: "South Carolina (SC)", level: 2, obj: SC},
                    {name: "South Dakota (SD)", level: 2, obj: SD},
                    {name: "Tennessee (TN)", level: 2, obj: TN},
                    {name: "Texas (TX)", level: 2, obj: TX},
                    {name: "Utah (UT)", level: 2, obj: UT},
                    {name: "Vermont (VT)", level: 2, obj: VT},
                    {name: "Virginia (VA)", level: 2, obj: VA},
                    {name: "Washington (WA)", level: 2, obj: WA},
                    {name: "Washington, D.C.  (DC)", level: 2, obj: DC},
                    {name: "West Virginia  (WV)", level: 2, obj: WV},
                    {name: "Wisconsin (WI)", level: 2, obj: WI},
                    {name: "Wyoming (WY)", level: 2, obj: WY});


            var myCountries = new Array(
                    {name: "Africa (Daylight saving time adjusted)", level: 1, obj: Africa},
                    {name: "Americas (Daylight saving time adjusted)", level: 2, obj: Americas},
                    {name: "Canada (Daylight saving time adjusted)", level: 1, obj: Canada},
                    {name: "Caribbean", level: 1, obj: Carrebian},
                    {name: "South America (Daylight saving time adjusted)", level: 1, obj: SouthAmerica},
                    {name: "Europe (Daylight saving time adjusted)", level: 1, obj: Europe},
                    {name: "Middle East (Gulf)", level: 1, obj: ArabianGulf},
                    {name: "India", level: 1, obj: India},
                    {name: "Pakistan", level: 1, obj: pakistan},
                    {name: "Srilanka", level: 1, obj: srilanka},
                    {name: "China & Japan", level: 1, obj: ChinaJapan},
                    {name: "South East Asia (Daylight saving time adjusted)", level: 1, obj: SouthEastAsia},
                    {name: "Australia (Daylight saving time adjusted)", level: 1, obj: Australia},
                    {name: "Newzeland (Daylight adjusted)", level: 1, obj: Newzeland},
                    {name: "Fiji", level: 1, obj: Fiji});

            var curObj = myCountries;
            var curlvl = -1;
            var endObj = null;


            function populateListBox(lb, lvl, menuObj) {
                // cleanup listbox
                for (m = lb.options.length - 1; m > 0; m--)
                    lb.options[m] = null;
                lb.options[0] = new Option("Select", null);
                for (i = 0; i < menuObj.length; i++) {
                    if (lvl == 1) {
                        //var myurl="/panchang.php?getdata=getcity&yr=2015&cityhead="+menuObj[i].name+"&cityname="+menuObj[i].url;
                        var tobj = menuObj;
                        endObj = menuObj;
                        lb.options[i + 1] = new Option(menuObj[i].name, tobj);
                    } else {
                        lb.options[i + 1] = new Option(menuObj[i].name, menuObj[i].obj);
                    }
                }
            }

            function onRedirect(indx, x) {
                if (indx == 0)
                    return;

                var obj = myCountries[indx - 1].obj;
                var lvl = myCountries[indx - 1].level;
                //alert(obj);
                //alert(lvl);
                document.getElementById("citydisp").style.visibility = 'visible';
                document.getElementById("citydisp").disabled = false;
                //document.getElementById("embedframe").style.visibility = 'hidden';
                //document.getElementById("embedframe").disabled = true;
                //alert("hello");
                if (lvl == 2) {
                    populateListBox(document.formplaces.places, lvl, obj);
                    document.formplaces.places.selectedIndex = -1;
                    document.getElementById("statedisp").style.visibility = 'visible';
                    document.getElementById("statedisp").disabled = false;
                } else {
                    for (m = document.formplaces.places.options.length - 1; m > 0; m--)
                        document.formplaces.places.options[m] = null;
                    document.formplaces.places.options[0] = new Option("Select", null);

                    populateListBox(document.formplaces.cities, lvl, obj);
                    document.formplaces.cities.selectedIndex = -1;
                    document.getElementById("statedisp").style.visibility = 'hidden';
                    document.getElementById("statedisp").disabled = true;
                }

            }

            function onPlaces(indx, x) {
                var obj = Americas[indx - 1].obj;
                populateListBox(document.formplaces.cities, 1, obj);
                document.formplaces.cities.selectedIndex = -1;

            }

            function onCities(indx) {
                //this must be the third index
                if (indx == 0)
                    return;
                overridedefault = 1;
            }

            function printValues() {
                overridefault = 0;
                checkCookie();
                mladdevents();
                //alert("hi1");
                populateListBox(document.formplaces.countries, 0, myCountries);
                //alert("hi2");
                //alert(myCountries);
                document.getElementById("statedisp").style.visibility = 'hidden';
                document.getElementById("statedisp").disabled = true;
                document.getElementById("citydisp").style.visibility = 'hidden';
                document.getElementById("citydisp").disabled = true;
                //document.getElementById("embedframe").style.visibility = 'hidden';
                //document.getElementById("embedframe").disabled = true;
                document.formplaces.countries.selectedIndex = 0;
            }

            function onClickSave() {
                if (document.formplaces.cities.selectedIndex < 1 && overridedefault != 0)
                    return;

                var tobj = null;
                var myurl = "";

                if (overridedefault == 1 && endObj != null) {
                    tobj = endObj[document.formplaces.cities.selectedIndex - 1];
                    myurl = "http://www.mypanchang.com/panchang.php?getdata=getcity&amp;yr=2015&amp;cityname=" + tobj.url + "&cityhead=" + escape(tobj.name);
                    if (tobj != null) {
                        setCookie('cityname', tobj.url, 365);
                        setCookie('cityhead', tobj.name, 365);
                    }
                }
                window.location = myurl;
                //history.go(-1);
            }

            function onClearDefault() {
                setCookie('cityname', "", 365);
                setCookie('cityhead', "", 365);
                document.getElementById('defaultlocation').innerHTML = "Please use following form to set your current location";
                location.reload(true);

            }

            function onShowPanchang() {
                if (document.formplaces.cities.selectedIndex < 1 && overridedefault != 0)
                    return;

                var tobj = null;
                var myurl = "";
                if (overridedefault == 1 && endObj != null) {
                    tobj = endObj[document.formplaces.cities.selectedIndex - 1];
                    setCookie('cityname', tobj.url, 365);
                    setCookie('cityhead', tobj.name, 365);
                    //alert(tobj.url);
                    //alert(tobj);
                    //document.write("<br>");
                    //$("#iframe2").attr('src', 'http://www.mypanchang.com/mobilewidget.php?cityname=' + tobj.url + '&color=452603&displaymode=full');
                    location.reload();
                    //myurl = "http://www.mypanchang.com/panchang.php?getdata=getcity&yr=2015&cityname=" + tobj.url + "&cityhead=" + escape(tobj.name);
                } else {
                    //alert("no");
                    myurl = "http://www.mypanchang.com/panchang.php?getdata=getcity&amp;yr=2015&amp;cityname=" + defaultcity + "&cityhead=" + escape(defaultname.toString());
                }
                //window.location = myurl.toString();
            }

            function onShowcode() {
                if (document.formplaces.cities.selectedIndex < 1 && overridedefault != 0)
                    return;

                var tobj = null;
                var myurl = "";
                var myurl2 = "";
                var myurl3 = "http://www.mypanchang.com/jatakam/currentpos.php";
                var myurl4 = "http://www.mypanchang.com/jatakam/kundliwidget.php";


                if (overridedefault == 1 && endObj != null) {
                    tobj = endObj[document.formplaces.cities.selectedIndex - 1];
                    myurl = "http://www.mypanchang.com/mobilewidget.php?cityname=" + tobj.url;
                    myurl2 = "http://www.mypanchang.com/mobilehorawidget.php?cityname=" + tobj.url;
                } else {
                    myurl = "http://www.mypanchang.com/mobilewidget.php?cityname=" + defaultcity;
                    myurl2 = "http://www.mypanchang.com/mobilehorawidget.php?cityname=" + defaultcity;

                }
                var mydata = "<iframe name='iframe1' id='iframe1' src=\"" + myurl.toString() + "&color=452603\" scrolling=\"no\" width=\"150px\" height=\"400px\" frameborder=\"0\" style=\"border:none;\" allowTransparency=\"true\"></iframe>\n\nTo show full headers use this code:\n<iframe name='iframe1' id='iframe1' src=\"" + myurl.toString() + "&color=452603&displaymode=full\" scrolling=\"no\" width=\"190px\" height=\"460px\" frameborder=\"0\" style=\"border:none;\" allowTransparency=\"true\"></iframe>\n\nTo show hora widget use this code:\n<iframe name='iframe2' id='iframe2' src=\"" + myurl2.toString() + "&color=452603\" scrolling=\"no\" width=\"150px\" height=\"450px\" frameborder=\"0\" style=\"border:none;\" allowTransparency=\"true\"></iframe>\n\nTo display current planetary positions use following code:\n<iframe name='iframe3' id='iframe3' src=\"" + myurl3.toString() + "\" scrolling=\"no\" width=\"350px\" height=\"350px\" frameborder=\"0\" style=\"border:none;\" allowTransparency=\"true\"></iframe>\n\nTo prepare jatakam online use following code:\n<iframe name='iframe4' id='iframe4' src=\"" + myurl4.toString() + "\" scrolling=\"no\" width=\"360px\" height=\"250px\" frameborder=\"0\" style=\"border:none;\" allowTransparency=\"true\"></iframe>";
                //document.getElementById("embedframe").style.visibility = 'visible';
                //document.getElementById("embedframe").disabled = false;
                //document.getElementById("embedcode").style.visibility = 'visible';
                //document.getElementById("embedcode").disabled = false;
                //document.getElementById("embedcode").innerText = mydata;
            }

            // initialize tooltips in a seperate thread
            $(document).ready(function () {
                window.setTimeout(hovertipInit, 1);
            });
        </script>
        <script type="text/javascript">
            var BASE_URL = "../index.html";
        </script>
    
    </head>
    <body onload="printValues();">
         
              <div class="row">
        <div  topmargin="0" style="text-align: center;">
        <div align="center">

            <!--<p>You can chose the closest city from below or to see list of cities we are supporting you can <a href="/selectyourcity2015.html">click here</a>.<br><br></p>-->
            <!--<center><h3>First select your city</h3> </center>-->
            <br>
                <div align="center">
                    <div id="defaultlocation" style="margin-top:-40px;"></div>

                    <div id="todayspanchang">
                        <table width="55%" bgcolor="#ece5b6" style="border-width:2px; border-style: solid;margin-top:-10px; border-color: #333; border-collapse: collapse; vertical-align: middle"  onClick="onShowPanchang();">
                            <tr>
                                <td align="center" colspan="3"  style="border-width:2px; border-style: solid; border-color:#333;"  background="images/mp02.html">
                                    <span style="font-family:@Arial Unicode MS, Times New Roman, Verdana, Georgia; font-size: 24pt; color:#3345a2;">
                                        Today's Panchang for<br>
                                            <script type="text/javascript">
                                                document.write(cityname);
                                            </script>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td width="30%"  style="border-width:2px; border-style: solid; border-color:#333; vertical-align: middle" >
                                    <script type="text/javascript">
                                        var mydata = "<iframe name='iframe1' id='iframe1' src=\"http://www.mypanchang.com/mobilewidget.php?cityname=" + cityname + "&color=#333&displaymode=full\" scrolling=\"no\" width=\"200px\" height=\"400px\" frameborder=\"0\" style=\"border:none; vertical-align: middle;\" allowTransparency=\"true\"></iframe>";
                                        document.write(mydata);
                                    </script>
                                </td>
                                <td  align="center" style="border-width:2px; border-style: solid; border-color:#333; vertical-align: middle;">
                                    <script type="text/javascript">
                                        var tmonth = new Array(12);
                                        var tdays = new Array(7);
                                        var currentTime = null;
                                        var month = "";
                                        var day = "";
                                        var year = "";
                                        var dow = "";
                                        tmonth[0] = "Jan";
                                        tmonth[1] = "Feb";
                                        tmonth[2] = "Mar";
                                        tmonth[3] = "Apr";
                                        tmonth[4] = "May";
                                        tmonth[5] = "Jun";
                                        tmonth[6] = "Jul";
                                        tmonth[7] = "Aug";
                                        tmonth[8] = "Sep";
                                        tmonth[9] = "Oct";
                                        tmonth[10] = "Nov";
                                        tmonth[11] = "Dec";

                                        tdays[0] = "Sunday";
                                        tdays[1] = "Monday";
                                        tdays[2] = "Tuesday";
                                        tdays[3] = "Wednesday";
                                        tdays[4] = "Thursday";
                                        tdays[5] = "Friday";
                                        tdays[6] = "Saturday";


                                        currentTime = new Date();
                                        month = currentTime.getMonth();
                                        day = currentTime.getDate();
                                        year = currentTime.getFullYear();
                                        dow = currentTime.getDay();
                                        document.write('<span style="font-family:@Arial Unicode MS, Times New Roman, Verdana, Georgia; font-size: 30pt; font-variant: small-caps; margin: 0; padding:0;">');
                                        document.write(tdays[dow] + "<br></span>");
                                        document.write('<span style="font-family:@Arial Unicode MS, Times New Roman, Verdana, Georgia; font-size: 30pt; font-variant: small-caps; margin: 0; padding:0;">');
                                        document.write(tmonth[month] + " " + year);
                                        document.write('</span>	<br><span style="font-family:@Arial Unicode MS, Times New Roman, Verdana, Georgia; font-size: 120pt; margin: 0; padding: 0;">');
                                        document.write(day + "</span>");
                                    </script>		
                                </td>
                                <td width="30%"  style="border-width:2px; border-style: solid; border-color:#333; vertical-align: middle" >
                                    <script type="text/javascript">
                                        var mydata = "<iframe name='iframe2' id='iframe2' src=\"http://www.mypanchang.com/mobilehorawidget.php?cityname=" + cityname + "&color=#333&font-size=14px&displaymode=full\" scrolling=\"no\" width=\"200px\" height=\"370px\" frameborder=\"0\" style=\"border:none; vertical-align: middle;\" allowTransparency=\"true\"></iframe>";
                                        document.write(mydata);
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="3">
                                    <iframe name='iframe3' id='iframe3' src="http://www.mypanchang.com/jatakam/currentpos.php" scrolling="no" width="350px" height="225px" frameborder="0" style="border:none; vertical-align: middle;" allowTransparency="true"></iframe>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a name="changemylocation"/></a>
                    <div id="selectiondiv">
                        <h1>Please select a new location or Panchang for Another city</h1>
                        <form name="formplaces">
                            Please Select Country First:<br>
                                <select name="countries" size=1 onChange="onRedirect(this.selectedIndex, this.options[this.selectedIndex].value);">
                                    <option value="">Select</option>
                                </select>
                                <br/><br/>
                                <div id="statedisp">
                                    Select State (for Americas Only)<br>
                                        <select name="places"    size=1 onChange="onPlaces(this.selectedIndex, this.options[this.selectedIndex].value);">
                                            <option value="">Select</option>
                                        </select>
                                </div>
                                <br/><br/>
                                <div id="citydisp">
                                    Select City:<br>
                                        <select name="cities" size=1 onChange="onCities(this.selectedIndex);">
                                            <option value="">Select</option>
                                        </select>
                                </div>
                                <br/><br/>
                                <!--		<span hovertip="htdef1">
                                                <INPUT type="button" value="Save+Show Panchang" name="save" onClick="onClickSave();">
                                                </span>
                                                <span hovertip="htdef2">
                                                <INPUT type="button" value="Clear Default" name="clear" onClick="onClearDefault();">
                                                </span>-->
                                <span hovertip="htdef3">
                                    <input type="button" value="Show Panchang" name="back" onClick="onShowPanchang();">
                                </span>
                                <!--		<span hovertip="htdef4">
                                                <input type="button" value="Embed panchang code" name="showcode" onClick="onShowcode();">
                                                </span>-->
                        </form>
                    </div>
                </div>


        </div>
    </div>
              </div>    
    </body>

<!-- Mirrored from bhamhindutemple.org/panchang/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 12:50:01 GMT -->
</html>
</p>
<div>
</div>
			</div><!-- .entry-content -->
</article><!-- #post-## -->


						
					
			


					
				</main><!-- #main -->
			</div><!-- #primary -->

						
		</div><!--#content-inside -->
	</div><!-- #content -->


			<?php include 'footer.php';?>
	
</div><!-- #page -->


<!-- WP Audio player plugin v1.9.5 - https://www.tipsandtricks-hq.com/wordpress-audio-music-player-plugin-4556/ -->
    <script type="text/javascript">
        soundManager.useFlashBlock = true; // optional - if used, required flashblock.css
        soundManager.url = '../wp-content/plugins/compact-wp-audio-player/swf/soundmanager2.swf';
        function play_mp3(flg, ids, mp3url, volume, loops)
        {
            //Check the file URL parameter value
            var pieces = mp3url.split("|");
            if (pieces.length > 1) {//We have got an .ogg file too
                mp3file = pieces[0];
                oggfile = pieces[1];
                //set the file URL to be an array with the mp3 and ogg file
                mp3url = new Array(mp3file, oggfile);
            }

            soundManager.createSound({
                id: 'btnplay_' + ids,
                volume: volume,
                url: mp3url
            });

            if (flg == 'play') {
                    soundManager.play('btnplay_' + ids, {
                    onfinish: function() {
                        if (loops == 'true') {
                            loopSound('btnplay_' + ids);
                        }
                        else {
                            document.getElementById('btnplay_' + ids).style.display = 'inline';
                            document.getElementById('btnstop_' + ids).style.display = 'none';
                        }
                    }
                });
            }
            else if (flg == 'stop') {
    //soundManager.stop('btnplay_'+ids);
                soundManager.pause('btnplay_' + ids);
            }
        }
        function show_hide(flag, ids)
        {
            if (flag == 'play') {
                document.getElementById('btnplay_' + ids).style.display = 'none';
                document.getElementById('btnstop_' + ids).style.display = 'inline';
            }
            else if (flag == 'stop') {
                document.getElementById('btnplay_' + ids).style.display = 'inline';
                document.getElementById('btnstop_' + ids).style.display = 'none';
            }
        }
        function loopSound(soundID)
        {
            window.setTimeout(function() {
                soundManager.play(soundID, {onfinish: function() {
                        loopSound(soundID);
                    }});
            }, 1);
        }
        function stop_all_tracks()
        {
            soundManager.stopAll();
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].id.indexOf("btnplay_") == 0) {
                    inputs[i].style.display = 'inline';//Toggle the play button
                }
                if (inputs[i].id.indexOf("btnstop_") == 0) {
                    inputs[i].style.display = 'none';//Hide the stop button
                }
            }
        }
    </script>
    <script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/bhamhindutemple.org\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/thickbox/thickboxab87.js?ver=3.1-20121105'></script>
<script type='text/javascript' src='../wp-includes/js/underscore.minaff7.js?ver=1.6.0'></script>
<script type='text/javascript' src='../wp-includes/js/shortcode.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../wp-admin/js/media-upload.mind5d2.js?ver=4.4.18'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/bhamhindutemple.org\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptseb11.js?ver=4.4'></script>
<script type='text/javascript' src='../wp-content/plugins/bootstrap-for-contact-form-7/assets/scripts.mine7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='../wp-content/themes/onepress/assets/js/plugins8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/onepress/assets/js/bootstrap.mincce7.js?ver=4.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/onepress/assets/js/theme11a8.js?ver=20120206'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.mind5d2.js?ver=4.4.18'></script>

</body>
</html>


<!--Generated by Endurance Page Cache-->