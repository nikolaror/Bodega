/*
 * Globalize Culture sr-Latn-RS
 *
 * http://github.com/jquery/globalize
 *
 * Copyright Software Freedom Conservancy, Inc.
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * This file was generated by the Globalize Culture Generator
 * Translation: bugs found in this file need to be fixed in the generator
 */

(function( window, undefined ) {

var Globalize;

if ( typeof require !== "undefined" &&
	typeof exports !== "undefined" &&
	typeof module !== "undefined" ) {
	// Assume CommonJS
	Globalize = require( "globalize" );
} else {
	// Global variable
	Globalize = window.Globalize;
}

Globalize.addCultureInfo( "sr-Latn-RS", "default", {
	name: "sr-Latn-RS",
	englishName: "Serbian (Latin, Serbia)",
	nativeName: "srpski (Srbija)",
	language: "sr-Latn",
	numberFormat: {
		",": ".",
		".": ",",
		negativeInfinity: "-beskonačnost",
		positiveInfinity: "+beskonačnost",
		percent: {
			pattern: ["-n%","n%"],
			",": ".",
			".": ","
		},
		currency: {
			pattern: ["-n $","n $"],
			",": ".",
			".": ",",
			symbol: "Din."
		}
	},
	calendars: {
		standard: {
			"/": ".",
			firstDay: 1,			days: {
				names: ["Nedelja","Ponedeljak","Utorak","Sreda","Četvrtak","Petak","Subota"],
				namesAbbr: ["Ned","Pon","Uto","Sre","Čet","Pet","Sub"],
				namesShort: ["Ne","Po","Ut","Sr","Če","Pe","Su"]
			},
			months: {
				names: ["Januar","Februar","Mart","April","Maj","Jun","Jul","Avgust","Septembar","Oktobar","Novembar","Decembar",""],
				namesAbbr: ["Jan","Feb","Mar","Apr","Maj","Jun","Jul","Avg","Sep","Okt","Nov","Dec",""]
			},

			AM: null,
			PM: null,
			eras: [{"name":"n.e.","start":null,"offset":0}],
			patterns: {
				d: "d.M.yyyy",
				D: "d. MMMM yyyy",
				t: "H:mm",
				T: "H:mm:ss",
				f: "d. MMMM yyyy H:mm",
				F: "d. MMMM yyyy H:mm:ss",
				M: "d. MMMM",
				Y: "MMMM yyyy"
			}
		}
	}
});

}( this ));
