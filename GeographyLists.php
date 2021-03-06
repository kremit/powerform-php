<?php

namespace WRPN\Web;

/* Some widely-used datasets */

trait GeographyLists
{
	/* List of US States */
	public $state_list = array(
		'AL'=>'Alabama',
		'AK'=>'Alaska', 
		'AZ'=>'Arizona', 
		'AR'=>'Arkansas', 
		'CA'=>'California', 
		'CO'=>'Colorado', 
		'CT'=>'Connecticut', 
		'DE'=>'Delaware', 
		'DC'=>'District of Columbia', 
		'FL'=>'Florida', 
		'GA'=>'Georgia', 
		'HI'=>'Hawaii', 
		'ID'=>'Idaho', 
		'IL'=>'Illinois', 
		'IN'=>'Indiana', 
		'IA'=>'Iowa', 
		'KS'=>'Kansas', 
		'KY'=>'Kentucky', 
		'LA'=>'Louisiana', 
		'ME'=>'Maine', 
		'MD'=>'Maryland', 
		'MA'=>'Massachusetts', 
		'MI'=>'Michigan', 
		'MN'=>'Minnesota', 
		'MS'=>'Mississippi', 
		'MO'=>'Missouri', 
		'MT'=>'Montana',
		'NE'=>'Nebraska',
		'NV'=>'Nevada',
		'NH'=>'New Hampshire',
		'NJ'=>'New Jersey',
		'NM'=>'New Mexico',
		'NY'=>'New York',
		'NC'=>'North Carolina',
		'ND'=>'North Dakota',
		'OH'=>'Ohio', 
		'OK'=>'Oklahoma', 
		'OR'=>'Oregon', 
		'PA'=>'Pennsylvania', 
		'PR'=>'Puerto Rico',
		'RI'=>'Rhode Island', 
		'SC'=>'South Carolina', 
		'SD'=>'South Dakota',
		'TN'=>'Tennessee', 
		'TX'=>'Texas', 
		'UT'=>'Utah', 
		'VI'=>'US Virgin Islands',
		'VT'=>'Vermont', 
		'VA'=>'Virginia', 
		'WA'=>'Washington', 
		'WV'=>'West Virginia', 
		'WI'=>'Wisconsin', 
		'WY'=>'Wyoming'
	);

	/* List of Canadian Provinces */
	public $ca_province_list = array(
		'AB' => 'Alberta',
		'BC' => 'British Columbia',
		'MB' => 'Manitoba',
		'NB' => 'New Brunswick',
		'NL' => 'Newfoundland and Labrador',
		'NT' => 'Northwest Territories',
		'NS' => 'Nova Scotia',
		'NU' => 'Nunavut',
		'ON' => 'Ontario',
		'PE' => 'Prince Edward Island',
		'QC' => 'Quebec',
		'SK' => 'Saskatchewan',
		'YT' => 'Yukon'
	);

	/* List of Country Codes (ISO 3166-1 alpha-2) */
	public $country_list = array(
		"AF" => array('name'=>"Afghanistan", 'native'=>"‫افغانستان‬‎"),
		"AX" => array('name'=>"Åland Islands", 'native'=>"Åland"),
		"AL" => array('name'=>"Albania", 'native'=>"Shqipëri"),
		"DZ" => array('name'=>"Algeria", 'native'=>"‫الجزائر‬‎"),
		"AS" => array('name'=>"American Samoa", 'native'=>""),
		"AD" => array('name'=>"Andorra", 'native'=>""),
		"AO" => array('name'=>"Angola", 'native'=>""),
		"AI" => array('name'=>"Anguilla", 'native'=>""),
		"AQ" => array('name'=>"Antarctica", 'native'=>""),
		"AG" => array('name'=>"Antigua and Barbuda", 'native'=>""),
		"AR" => array('name'=>"Argentina", 'native'=>""),
		"AM" => array('name'=>"Armenia", 'native'=>"Հայաստան"),
		"AW" => array('name'=>"Aruba", 'native'=>""),
		"AC" => array('name'=>"Ascension Island", 'native'=>""),
		"AU" => array('name'=>"Australia", 'native'=>""),
		"AT" => array('name'=>"Austria", 'native'=>"Österreich"),
		"AZ" => array('name'=>"Azerbaijan", 'native'=>"Azərbaycan"),
		"BS" => array('name'=>"Bahamas", 'native'=>""),
		"BH" => array('name'=>"Bahrain", 'native'=>"‫البحرين‬‎"),
		"BD" => array('name'=>"Bangladesh", 'native'=>"বাংলাদেশ"),
		"BB" => array('name'=>"Barbados", 'native'=>""),
		"BY" => array('name'=>"Belarus", 'native'=>"Беларусь"),
		"BE" => array('name'=>"Belgium", 'native'=>"België"),
		"BZ" => array('name'=>"Belize", 'native'=>""),
		"BJ" => array('name'=>"Benin", 'native'=>"Bénin"),
		"BM" => array('name'=>"Bermuda", 'native'=>""),
		"BT" => array('name'=>"Bhutan", 'native'=>"འབྲུག"),
		"BO" => array('name'=>"Bolivia", 'native'=>""),
		"BA" => array('name'=>"Bosnia and Herzegovina", 'native'=>"Босна и Херцеговина"),
		"BW" => array('name'=>"Botswana", 'native'=>""),
		"BV" => array('name'=>"Bouvet Island", 'native'=>""),
		"BR" => array('name'=>"Brazil", 'native'=>"Brasil"),
		"IO" => array('name'=>"British Indian Ocean Territory",'native'=>""),
		"VG" => array('name'=>"British Virgin Islands", 'native'=>""),
		"BN" => array('name'=>"Brunei", 'native'=>""),
		"BG" => array('name'=>"Bulgaria", 'native'=>"България"),
		"BF" => array('name'=>"Burkina Faso", 'native'=>""),
		"BI" => array('name'=>"Burundi", 'native'=>"Uburundi"),
		"KH" => array('name'=>"Cambodia", 'native'=>"កម្ពុជា"),
		"CM" => array('name'=>"Cameroon", 'native'=>"Cameroun"),
		"CA" => array('name'=>"Canada", 'native'=>""),
		"IC" => array('name'=>"Canary Islands", 'native'=>"islas Canarias"),
		"CV" => array('name'=>"Cape Verde", 'native'=>"Kabu Verdi"),
		"BQ" => array('name'=>"Caribbean Netherlands", 'native'=>""),
		"KY" => array('name'=>"Cayman Islands", 'native'=>""),
		"CF" => array('name'=>"Central African Republic",'native'=>"République centrafricaine"),
		"EA" => array('name'=>"Ceuta and Melilla", 'native'=>"Ceuta y Melilla"),
		"TD" => array('name'=>"Chad", 'native'=>"Tchad"),
		"CL" => array('name'=>"Chile", 'native'=>""),
		"CN" => array('name'=>"China", 'native'=>"中国"),
		"CX" => array('name'=>"Christmas Island", 'native'=>""),
		"CP" => array('name'=>"Clipperton Island", 'native'=>""),
		"CC" => array('name'=>"Cocos (Keeling) Islands", 'native'=>"Kepulauan Cocos (Keeling)"),
		"CO" => array('name'=>"Colombia", 'native'=>""),
		"KM" => array('name'=>"Comoros", 'native'=>"‫جزر القمر‬‎"),
		"CD" => array('name'=>"Congo (DRC)", 'native'=>"Jamhuri ya Kidemokrasia ya Kongo"),
		"CG" => array('name'=>"Congo (Republic)", 'native'=>"Congo-Brazzaville"),
		"CK" => array('name'=>"Cook Islands", 'native'=>""),
		"CR" => array('name'=>"Costa Rica", 'native'=>""),
		"CI" => array('name'=>"Côte d’Ivoire", 'native'=>""),
		"HR" => array('name'=>"Croatia", 'native'=>"Hrvatska"),
		"CU" => array('name'=>"Cuba", 'native'=>""),
		"CW" => array('name'=>"Curaçao", 'native'=>""),
		"CY" => array('name'=>"Cyprus", 'native'=>"Κύπρος"),
		"CZ" => array('name'=>"Czech Republic", 'native'=>"Česká republika"),
		"DK" => array('name'=>"Denmark", 'native'=>"Danmark"),
		"DG" => array('name'=>"Diego Garcia", 'native'=>""),
		"DJ" => array('name'=>"Djibouti", 'native'=>""),
		"DM" => array('name'=>"Dominica", 'native'=>""),
		"DO" => array('name'=>"Dominican Republic", 'native'=>"República Dominicana"),
		"EC" => array('name'=>"Ecuador", 'native'=>""),
		"EG" => array('name'=>"Egypt", 'native'=>"‫مصر‬‎"),
		"SV" => array('name'=>"El Salvador", 'native'=>""),
		"GQ" => array('name'=>"Equatorial Guinea",'native'=>"Guinea Ecuatorial"),
		"ER" => array('name'=>"Eritrea", 'native'=>""),
		"EE" => array('name'=>"Estonia", 'native'=>"Eesti"),
		"ET" => array('name'=>"Ethiopia", 'native'=>""),
		"FK" => array('name'=>"Falkland Islands", 'native'=>"Islas Malvinas"),
		"FO" => array('name'=>"Faroe Islands", 'native'=>"Føroyar"),
		"FJ" => array('name'=>"Fiji", 'native'=>""),
		"FI" => array('name'=>"Finland", 'native'=>"Suomi"),
		"FR" => array('name'=>"France", 'native'=>""),
		"GF" => array('name'=>"French Guiana", 'native'=>"Guyane française"),
		"PF" => array('name'=>"French Polynesia", 'native'=>"Polynésie française"),
		"TF" => array('name'=>"French Southern Territories", 'native'=>"Terres australes françaises"),
		"GA" => array('name'=>"Gabon", 'native'=>""),
		"GM" => array('name'=>"Gambia", 'native'=>""),
		"GE" => array('name'=>"Georgia", 'native'=>"საქართველო"),
		"DE" => array('name'=>"Germany", 'native'=>"Deutschland"),
		"GH" => array('name'=>"Ghana", 'native'=>"Gaana"),
		"GI" => array('name'=>"Gibraltar", 'native'=>""),
		"GR" => array('name'=>"Greece", 'native'=>"Ελλάδα"),
		"GL" => array('name'=>"Greenland", 'native'=>"Kalaallit Nunaat"),
		"GD" => array('name'=>"Grenada", 'native'=>""),
		"GP" => array('name'=>"Guadeloupe", 'native'=>""),
		"GU" => array('name'=>"Guam", 'native'=>""),
		"GT" => array('name'=>"Guatemala", 'native'=>""),
		"GG" => array('name'=>"Guernsey", 'native'=>""),
		"GN" => array('name'=>"Guinea", 'native'=>"Guinée"),
		"GW" => array('name'=>"Guinea-Bissau", 'native'=>"Guiné Bissau"),
		"GY" => array('name'=>"Guyana", 'native'=>""),
		"HT" => array('name'=>"Haiti", 'native'=>""),
		"HM" => array('name'=>"Heard & McDonald Islands", 'native'=>""),
		"HN" => array('name'=>"Honduras", 'native'=>""),
		"HK" => array('name'=>"Hong Kong", 'native'=>"香港"),
		"HU" => array('name'=>"Hungary", 'native'=>"Magyarország"),
		"IS" => array('name'=>"Iceland", 'native'=>"Ísland"),
		"IN" => array('name'=>"India", 'native'=>"भारत"),
		"ID" => array('name'=>"Indonesia", 'native'=>""),
		"IR" => array('name'=>"Iran", 'native'=>"‫ایران‬‎"),
		"IQ" => array('name'=>"Iraq", 'native'=>"‫العراق‬‎"),
		"IE" => array('name'=>"Ireland", 'native'=>""),
		"IM" => array('name'=>"Isle of Man", 'native'=>""),
		"IL" => array('name'=>"Israel", 'native'=>"‫ישראל‬‎"),
		"IT" => array('name'=>"Italy", 'native'=>"Italia"),
		"JM" => array('name'=>"Jamaica", 'native'=>""),
		"JP" => array('name'=>"Japan", 'native'=>"日本"),
		"JE" => array('name'=>"Jersey", 'native'=>""),
		"JO" => array('name'=>"Jordan", 'native'=>"‫الأردن‬‎"),
		"KZ" => array('name'=>"Kazakhstan", 'native'=>"Казахстан"),
		"KE" => array('name'=>"Kenya", 'native'=>""),
		"KI" => array('name'=>"Kiribati", 'native'=>""),
		"XK" => array('name'=>"Kosovo", 'native'=>"Kosovë"),
		"KW" => array('name'=>"Kuwait", 'native'=>"‫الكويت‬‎"),
		"KG" => array('name'=>"Kyrgyzstan", 'native'=>"Кыргызстан"),
		"LA" => array('name'=>"Laos", 'native'=>"ລາວ"),
		"LV" => array('name'=>"Latvia", 'native'=>"Latvija"),
		"LB" => array('name'=>"Lebanon", 'native'=>"‫لبنان‬‎"),
		"LS" => array('name'=>"Lesotho", 'native'=>""),
		"LR" => array('name'=>"Liberia", 'native'=>""),
		"LY" => array('name'=>"Libya", 'native'=>"‫ليبيا‬‎"),
		"LI" => array('name'=>"Liechtenstein", 'native'=>""),
		"LT" => array('name'=>"Lithuania", 'native'=>"Lietuva"),
		"LU" => array('name'=>"Luxembourg", 'native'=>""),
		"MO" => array('name'=>"Macau", 'native'=>"澳門"),
		"MK" => array('name'=>"Macedonia (FYROM)",'native'=>"Македонија"),
		"MG" => array('name'=>"Madagascar", 'native'=>"Madagasikara"),
		"MW" => array('name'=>"Malawi", 'native'=>""),
		"MY" => array('name'=>"Malaysia", 'native'=>""),
		"MV" => array('name'=>"Maldives", 'native'=>""),
		"ML" => array('name'=>"Mali", 'native'=>""),
		"MT" => array('name'=>"Malta", 'native'=>""),
		"MH" => array('name'=>"Marshall Islands", 'native'=>""),
		"MQ" => array('name'=>"Martinique", 'native'=>""),
		"MR" => array('name'=>"Mauritania", 'native'=>"‫موريتانيا‬‎"),
		"MU" => array('name'=>"Mauritius", 'native'=>"Moris"),
		"YT" => array('name'=>"Mayotte", 'native'=>""),
		"MX" => array('name'=>"Mexico", 'native'=>""),
		"FM" => array('name'=>"Micronesia", 'native'=>""),
		"MD" => array('name'=>"Moldova", 'native'=>"Republica Moldova"),
		"MC" => array('name'=>"Monaco", 'native'=>""),
		"MN" => array('name'=>"Mongolia", 'native'=>"Монгол"),
		"ME" => array('name'=>"Montenegro", 'native'=>"Crna Gora"),
		"MS" => array('name'=>"Montserrat", 'native'=>""),
		"MA" => array('name'=>"Morocco", 'native'=>"‫المغرب‬‎"),
		"MZ" => array('name'=>"Mozambique", 'native'=>"Moçambique"),
		"MM" => array('name'=>"Myanmar (Burma)", 'native'=>"မြန်မာ"),
		"NA" => array('name'=>"Namibia", 'native'=>"Namibië"),
		"NR" => array('name'=>"Nauru", 'native'=>""),
		"NP" => array('name'=>"Nepal", 'native'=>"नेपाल"),
		"NL" => array('name'=>"Netherlands", 'native'=>"Nederland"),
		"NC" => array('name'=>"New Caledonia", 'native'=>"Nouvelle-Calédonie"),
		"NZ" => array('name'=>"New Zealand", 'native'=>""),
		"NI" => array('name'=>"Nicaragua", 'native'=>""),
		"NE" => array('name'=>"Niger", 'native'=>"Nijar"),
		"NG" => array('name'=>"Nigeria", 'native'=>""),
		"NU" => array('name'=>"Niue", 'native'=>""),
		"NF" => array('name'=>"Norfolk Island", 'native'=>""),
		"MP" => array('name'=>"Northern Mariana Islands", 'native'=>""),
		"KP" => array('name'=>"North Korea", 'native'=>"조선 민주주의 인민 공화국"),
		"NO" => array('name'=>"Norway", 'native'=>"Norge"),
		"OM" => array('name'=>"Oman", 'native'=>"‫عُمان‬‎"),
		"PK" => array('name'=>"Pakistan", 'native'=>"‫پاکستان‬‎"),
		"PW" => array('name'=>"Palau", 'native'=>""),
		"PS" => array('name'=>"Palestine", 'native'=>"‫فلسطين‬‎"),
		"PA" => array('name'=>"Panama", 'native'=>""),
		"PG" => array('name'=>"Papua New Guinea", 'native'=>""),
		"PY" => array('name'=>"Paraguay", 'native'=>""),
		"PE" => array('name'=>"Peru", 'native'=>"Perú"),
		"PH" => array('name'=>"Philippines", 'native'=>""),
		"PN" => array('name'=>"Pitcairn Islands", 'native'=>""),
		"PL" => array('name'=>"Poland", 'native'=>"Polska"),
		"PT" => array('name'=>"Portugal", 'native'=>""),
		"PR" => array('name'=>"Puerto Rico", 'native'=>""),
		"QA" => array('name'=>"Qatar", 'native'=>"‫قطر‬‎"),
		"RE" => array('name'=>"Réunion", 'native'=>"La Réunion"),
		"RO" => array('name'=>"Romania", 'native'=>"România"),
		"RU" => array('name'=>"Russia", 'native'=>"Россия"),
		"RW" => array('name'=>"Rwanda", 'native'=>""),
		"BL" => array('name'=>"Saint Barthélemy", 'native'=>"Saint-Barthélemy"),
		"SH" => array('name'=>"Saint Helena", 'native'=>""),
		"KN" => array('name'=>"Saint Kitts and Nevis", 'native'=>""),
		"LC" => array('name'=>"Saint Lucia", 'native'=>""),
		"MF" => array('name'=>"Saint Martin", 'native'=>""),
		"PM" => array('name'=>"Saint Pierre and Miquelon", 'native'=>"Saint-Pierre-et-Miquelon"),
		"WS" => array('name'=>"Samoa", 'native'=>""),
		"SM" => array('name'=>"San Marino", 'native'=>""),
		"ST" => array('name'=>"São Tomé and Príncipe", 'native'=>"São Tomé e Príncipe"),
		"SA" => array('name'=>"Saudi Arabia", 'native'=>"‫المملكة العربية السعودية‬‎"),
		"SN" => array('name'=>"Senegal", 'native'=>"Sénégal"),
		"RS" => array('name'=>"Serbia", 'native'=>"Србија"),
		"SC" => array('name'=>"Seychelles", 'native'=>""),
		"SL" => array('name'=>"Sierra Leone", 'native'=>""),
		"SG" => array('name'=>"Singapore", 'native'=>""),
		"SX" => array('name'=>"Sint Maarten", 'native'=>""),
		"SK" => array('name'=>"Slovakia", 'native'=>"Slovensko"),
		"SI" => array('name'=>"Slovenia", 'native'=>"Slovenija"),
		"SB" => array('name'=>"Solomon Islands", 'native'=>""),
		"SO" => array('name'=>"Somalia", 'native'=>"Soomaaliya"),
		"ZA" => array('name'=>"South Africa", 'native'=>""),
		"GS" => array('name'=>"South Georgia & South Sandwich Islands", 'native'=>""),
		"KR" => array('name'=>"South Korea", 'native'=>"대한민국"),
		"SS" => array('name'=>"South Sudan", 'native'=>"‫جنوب السودان‬‎"),
		"ES" => array('name'=>"Spain", 'native'=>"España"),
		"LK" => array('name'=>"Sri Lanka", 'native'=>"ශ්‍රී ලංකාව"),
		"VC" => array('name'=>"St. Vincent & Grenadines", 'native'=>""),
		"SD" => array('name'=>"Sudan", 'native'=>"‫السودان‬‎"),
		"SR" => array('name'=>"Suriname", 'native'=>""),
		"SJ" => array('name'=>"Svalbard and Jan Mayen", 'native'=>"Svalbard og Jan Mayen"),
		"SZ" => array('name'=>"Swaziland", 'native'=>""),
		"SE" => array('name'=>"Sweden", 'native'=>"Sverige"),
		"CH" => array('name'=>"Switzerland", 'native'=>"Schweiz"),
		"SY" => array('name'=>"Syria", 'native'=>"‫سوريا‬‎"),
		"TW" => array('name'=>"Taiwan", 'native'=>"台灣"),
		"TJ" => array('name'=>"Tajikistan", 'native'=>""),
		"TZ" => array('name'=>"Tanzania", 'native'=>""),
		"TH" => array('name'=>"Thailand", 'native'=>"ไทย"),
		"TL" => array('name'=>"Timor-Leste", 'native'=>""),
		"TG" => array('name'=>"Togo", 'native'=>""),
		"TK" => array('name'=>"Tokelau", 'native'=>""),
		"TO" => array('name'=>"Tonga", 'native'=>""),
		"TT" => array('name'=>"Trinidad and Tobago", 'native'=>""),
		"TA" => array('name'=>"Tristan da Cunha", 'native'=>""),
		"TN" => array('name'=>"Tunisia", 'native'=>"‫تونس‬‎"),
		"TR" => array('name'=>"Turkey", 'native'=>"Türkiye"),
		"TM" => array('name'=>"Turkmenistan", 'native'=>""),
		"TC" => array('name'=>"Turks and Caicos Islands", 'native'=>""),
		"TV" => array('name'=>"Tuvalu", 'native'=>""),
		"UM" => array('name'=>"U.S. Outlying Islands", 'native'=>""),
		"VI" => array('name'=>"U.S. Virgin Islands", 'native'=>""),
		"UG" => array('name'=>"Uganda", 'native'=>""),
		"UA" => array('name'=>"Ukraine", 'native'=>"Україна"),
		"AE" => array('name'=>"United Arab Emirates", 'native'=>"‫الإمارات العربية المتحدة‬‎"),
		"GB" => array('name'=>"United Kingdom", 'native'=>""),
		"US" => array('name'=>"United States", 'native'=>""),
		"UY" => array('name'=>"Uruguay", 'native'=>""),
		"UZ" => array('name'=>"Uzbekistan", 'native'=>"Oʻzbekiston"),
		"VU" => array('name'=>"Vanuatu", 'native'=>""),
		"VA" => array('name'=>"Vatican City", 'native'=>"Città del Vaticano"),
		"VE" => array('name'=>"Venezuela", 'native'=>""),
		"VN" => array('name'=>"Vietnam", 'native'=>"Việt Nam"),
		"WF" => array('name'=>"Wallis and Futuna", 'native'=>""),
		"EH" => array('name'=>"Western Sahara", 'native'=>"‫الصحراء الغربية‬‎"),
		"YE" => array('name'=>"Yemen", 'native'=>"‫اليمن‬‎"),
		"ZM" => array('name'=>"Zambia", 'native'=>""),
		"ZW" => array('name'=>"Zimbabwe", 'native'=>"")
	);
}
