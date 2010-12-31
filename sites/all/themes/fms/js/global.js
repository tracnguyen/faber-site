$(document).ready(function(){

	navdropdown();
	landingnav();
	loginslider();
	ieRemoveCallback();

});

function loginslider() {

    $("#loginbutton").click(function(evt) {

        $('.addthis').toggle();

        $('#at15s').hide();

        evt.preventDefault();

        $("#loginwindow").toggle('fast', function() {
            if ($("#loginwindow").is(":visible")) {
                $("#loginwindow #email").focus();
            }
        });
	  $("#message-login").remove();

    });
};

// IE6 element hover event fix
function navdropdown() {

	$("#topnav li").hover(
		function() { $(this).addClass("sfHover"); },
		function() { $(this).removeClass("sfHover"); }
	);
};

// IE6 element hover event fix for landing pages
function landingnav() {

	$("#tabs li.tab").hover(
		function() { $(this).addClass("iehover"); },
		function() { $(this).removeClass("iehover"); }
	);
};

function ieRemoveCallback () {

	// This is a fix about the "__flash__removeCallback" bug.
	if ( ( navigator.userAgent.toLowerCase().indexOf('msie') != -1 ) && ( navigator.userAgent.toLowerCase().indexOf( 'opera' ) == -1 ) ) {
		window.attachEvent( 'onunload', function() {
			window['__flash__removeCallback'] = function ( instance, name ) {
				try { if ( instance ) {instance[name] = null;} }
				catch ( flashEx ) { };
			};
		});
	};

};