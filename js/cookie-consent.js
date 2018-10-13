/**
 * UK Cookie Law Message Code:
 * ===========================
 * This file simply handles the "This site uses cookies" message on the initial
 * visit of the page.
 * 
 * The normal hiding showing of this bit of markup is handled by php, but the 
 * setting of the cookie that hides/shows this message is handled by a button
 * via some JS that is run here.
 * 
 * @author James McFall <james.mcfall@atlantishealthcare.com>
 */
jQuery(document).ready(function($) {
    
    /**
     * Click handler for the "Hide this" button. Set a "Hide this" cookie and 
     * then slide up the message div.
     */
    $("a#hideCookieMessage").click(function(e) {
        e.preventDefault; // Kill the default click event
        
        // Create a cookie so we can check if they've hidden the message before
        $.cookie("hideCookieMessage", "true", { 
            path: '/',
            expires: 365 
        });
        
        // Slide up the message if we find it in the markup
        if ($("#cookiesNotifier").length) {
            $("#cookiesNotifier").slideUp(500);
        }
    });
    
    /**
     * Cookie details page fancybox
     */
    $("a#cookieConsentDetailsLink").fancybox({
        "padding" : 10,
        "scrolling" : "no"
		
    });
    
});