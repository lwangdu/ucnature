function onloadCallback() {
	document.querySelectorAll( '.g-recaptcha-response' ).forEach( ( element ) => {
		element.setAttribute( 'aria-hidden', 'true' );
		element.setAttribute( 'aria-label', 'do not use' );
		element.setAttribute( 'aria-readonly', 'true' );
	} );
}
