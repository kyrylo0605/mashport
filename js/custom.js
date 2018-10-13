var toggleCompareMobile = function() {
    var compareMobile = $('.compareMobile');
    compareMobile.toggle(compareMobile.find('ul li').length > 0);
}

$(document).ready(function() {
    
    /**
    * Search page loading animation
    */
    $("#resultsList ul.tabs li a").click(function(){ 
        $(".loader").slideDown();
    });
    $("#search form").submit(function() {
        $(".loader").slideDown();
    });

   
    /**
     * Attach a Google analytics tracking call to a link with the "trackDownload" 
     * class.
     */
    //$("a.trackDownload").each(function(index) {
    //
    //    var linkEl = $(this);
    //
    //    // Get the file name (if not supplied, read from URL)
    //    var documentName = "";
    //    if (typeof $(this).data("trackname") !== "undefined") {
    //        documentName = $(this).data("trackname");
    //    } else {
    //        documentName = $.trim($(this).attr("href"));
    //    }
    //
    //    // Remove the trailing slash if there is one
    //    documentName = $.trim(documentName).replace(/\/$/, "");
    //    documentName = /[^|]*$/.exec(documentName)[0]; // For the asset repo, take from the last |
    //    documentName = /[^/]*$/.exec(documentName)[0];
    //
    //    // Get whether it's an "Asset Repository Download" etc
    //    var documentType = $(this).data("tracktype");
    //
    //    // Build the GA track string and create an onclick attribute.
    //    var trackString = "_gaq.push(['_trackEvent', 'Document Download', '" + documentType + "', '" + documentName + "'])";
    //
    //    linkEl.attr("onclick", trackString);
    //})



    $(".faq-submit").click(function (e)
       { 
        e.preventDefault();
        var url = $("#faqCategory").val();
            document.location.href= url;
        });

    /**
     * If the console object doesn't work (Looking at you IE9), set an empty 
     * object up.
     * 
     * @author James McFall <james@96black.co.nz>
     */
    if (!(window.console && console.log)) {
        console = {
            log: function(){},
            debug: function(){},
            info: function(){},
            warn: function(){},
            error: function(){}
        };
    }

    $(".megaMenu").show();

    // videos page click handler
    $('.fancybox').fancybox();

    // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });


    /*
     *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
     */
    $('.fancybox-media')

       .fancybox({
           openEffect : 'none',
           closeEffect : 'none',
           prevEffect : 'none',
           nextEffect : 'none',

           arrows : false,
           helpers : {
           media : {},
           buttons : {}
           }
           });

    var thisHash = window.location.hash;  
    if(window.location.hash) {
        $(thisHash).trigger('click');
    };

    //tabbed content for product detail page
    //When page loads...
    if (! /\/common\/results\//.test(window.location.toString())) {
        $(".tab-content").hide(); //Hide all content
        $("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(".tab-content:first").show(); //Show first tab content		
    }
    //On Click Event
    $("ul.tabs li").click(function(e) {
        $("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".tab-content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active ID content
        e.preventDefault();
        
    });
	
    //auto column for navigation
    $('ul.megaList > li:parent').addClass("dontsplit");
    // Columnizer dies if there is only 1 result, so we have to make sure there
    // are more elements than 1 before trying to columnize
    if ($('.lifestyle ul.megaList li').length > 2) {
        $('ul.megaList').each(function() {
            if ($('> li', this).length > 4) {
                if ($(this).columnize) {
                    $(this).columnize({
                        columns:3,
                        lastNeverTallest:true
                    });
                }			
            }
        });

        $('.lifestyle ul.megaList > li:parent').addClass("dontsplit");
        // Columnizer dies if there is only 1 result, so we have to make sure there
        // are more elements than 1 before trying to columnize
        $('.lifestyle ul.megaList').each(function() {
            if ($('> li', this).length > 4) {
                $(this).columnize({
                    columns:2,
                    lastNeverTallest:true
                });
            }
        });
    }

    //Nav hover effect
    $('div.megaMenu', this).hide();
    $('ul#menu li').hoverIntent(
        function(){
            $(this).find("a.topList").addClass("hovered");
            //Making support navigation move faster
            $('div.megaMenu.support', this).slideDown(500); 
            $('div.megaMenu', this).slideDown(1000);
			
        },
        function() {
            $(this).find("a.topList").removeClass("hovered");
            $('div.megaMenu', this).hide();
        }
        );
	

    // Products page images
    $("a[rel=group]").fancybox({
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600, 
        'speedOut'		:	200
    });
		
    // give every first and last li a selector as IE doesn't support the CSS3 selectors
    $("ul li:first-child").addClass("firstChild");
    $("ul li:last-child").addClass("lastChild");
	
	
    // FORM FIELD REMOVE VALUE ON FOCUS
    if($('form').length!=0) {
        $.fn.focus_blur = function() { 
            return this.focus(function() {
                if (this.id == "region") { // hack to fix default value being mysteriously replaced
                    this.defaultValue = "Search your nearest town, city";
                }
                if( this.value == this.defaultValue ) {
                    this.value = "";
                    this.style.color = "#393939";
                }
            }).blur(function() {
                if( !this.value.length ) {
                    this.value = this.defaultValue;
                    this.style.color = "#959595";
                }
            });
        };
        $('input:not(:submit,:radio,:checkbox,#toLocation)').focus_blur();
    }
	
	
	
    //find all form with class jqtransform and apply the plugin
    $("form .jqtransform").jqTransform();

    // Hide the compare mobile list if necessary
    toggleCompareMobile();

    if ($('#compareProducts') != null) {
        $("aside .compare a.blueBtn").live("click", function() {
            
            // Track the compare box being opened
            //if (typeof _gaq !== "undefined") {
            //    console.log('GA Event: Compare: Open compare list');
            //    _gaq.push(['_trackEvent', 'Compare Products', 'Open compare list']);
            //} else {
            //    console.log('Fake GA Event: Compare: Open compare list');
            //}
            
            $.ajax({
                url: "/outdoor-garden-products/ajax-compareproducts-view",
                success: function(data) {
                    if (data.indexOf("<") == -1) {
                        var obj = jQuery.parseJSON(data)
                        if (obj && ! obj.ok) return;
                    }
                    $("#wrap").addClass("compareprint");
                    $("footer").addClass("compareprint");
                    $.fancybox(data, {
                        'autoDimensions'	: true,
                        'width'        		: 'auto',
                        'height'       		: 'auto',
                        'transitionIn'		: 'none',
                        'transitionOut'		: 'none',
                        'overlayColor'		: '#000000',
                        'padding'			: '0'
                    });
                    $("#fancybox-close, #fancybox-overlay").click(function() {
                        $("#wrap").removeClass('compareprint');
                        $("footer").removeClass("compareprint");
                        $.fancybox.close();
                    });
                }
            });
        });
    }
    

    // help me choose
    var loadProducts = function(limit, offset) {
        $("#loading").show();
        var qstr = $("#help-me-choose-form").serialize().replace("&",",");
        if (qstr=="") qstr = "0";
        
        var URLSegments = window.location.pathname.split('/');
        var hmcType = URLSegments[2];
        
        // @todo change to just /ajax/ or something as all use this now
        var url = '/help-me-choose/bbqs-ajax/'+qstr+'/'+limit+'/'+hmcType+'/'+offset;
        
        $.ajax({
            url: url,
            success: function(response) {
                $("section#productList #helpList").html(response);
                $("#loading").hide();
                
                /**
                 * Grab the "Total listings" number from the hidden hmcCount div
                 * that is returned by the xxx-ajax help me choose files.
                 */
                $("#totalHMCListings").text($("#hmcCount").text());
            }
        });
    } 
  
    $("div#content_wrapper.helpmechoose div#pagination a").live('click', function(e){
        e.preventDefault();
        var str = $(this).attr("href");
        var matches = str.match(/P(\d+)$/);
        var limit = $("#limit").attr("value");
        var offset = (matches != null)? matches[1] : 0;
        loadProducts(limit, offset);
    });

    $("#help-me-choose-form input[type='checkbox']").click(function() {
        var limit = $("#limit").attr("value");
        loadProducts(limit, 0);
    });
    
    $("#limit").change(function() {
        var limit = $(this).attr("value");
        loadProducts(limit, 0);
    });
    
    if ($(".helpmechoose").html() != null) {
        loadProducts(9, 0);
    }
    
    $("a.resetHelp").click(function() {
        $("#help-me-choose-form span input").prop('checked', false);
        $("#help-me-choose-form span.checked").removeProp('checked');
        var limit = $("#limit").attr("value");
        loadProducts(limit, 0);
    });

   $("a.selectAllHelp").click(function() {
        $("#help-me-choose-form span input").prop('checked', true);
        $("#help-me-choose-form span").addClass('checked');
        var limit = $("#limit").attr("value");
        loadProducts(limit, 0);
    });    
    
   // $("a.selectAllHelp").click(function() {
   //     $("#help-me-choose-form span input").prop('checked', false);
   //     $("#help-me-choose-form span.checked").removeClass('checked');
   //     var limit = $("#limit").attr("value");
   //     loadProducts(limit, 0);
   // });
    
    // date pickers
    $("#purchase_date").datepicker();

    $("#purchase_date_field").datepicker({
        showOn: "button",
        buttonText: "Select date"
    });

    $( "#purchase_date_field" ).on("click",function (e) {
        $(this).datepicker( "show" );
    });

    //ipad and iphone hover fix
    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
        $("#regionSelect li").click(function(){
            //we just need to attach a click event listener to provoke iPhone/iPod/iPad's hover event
            //strange
            });
    }

    // preload loading.gif
    new Image().src = "./images/loading.gif";
	
        
    /**
     * Compare Products Functionality
     * ===============================
     */
    // Product Comparison Checkboxes (product page, category page, help me choose etc).
    $("#productList ul#list li input, .intro input, ul#contentHelp input").live("click", function(){
        var action = $(this).prop('checked')? "add" : "remove";
        var productId = $(this).attr("name");
        
        // Track the addition and removal of products
        //if (typeof _gaq !== "undefined") {
        //    console.log('GA Event: Compare: ' + action + ' product ' + productId)
        //    _gaq.push(['_trackEvent', 'Compare Products', action + ' product ' + productId]);
        //} else {
        //    console.log('Fake GA Event: Compare: ' + action + ' product ' + productId)
        //}
        var url = "/outdoor-garden-products/ajax-compareproducts?action=" + action + "&productId=" + productId;
        updateComparisonList(url, $(this));
    });
    
    // The compare list Remove (X) links
    $("aside .compare li a").live("click", function() {
        showLoadingGif($(this));
        // Get the product ID from the link name, and build the remove URL
        var productId = $(this).attr("name");
        var url = "/outdoor-garden-products/ajax-compareproducts?action=remove&productId=" + productId;
        
        // Track the addition and removal
        //if (typeof _gaq !== "undefined") {
        //    console.log('GA Event: Compare: remove product ' + productId)
        //    _gaq.push(['_trackEvent', 'Compare Products', 'Compare: remove product ' + productId]);
        //} else {
        //    console.log('Fake GA Event: Compare: remove product ' + productId)
        //}
        
        updateComparisonList(url, $(this));
        
        // Uncheck the relevant checkbox on the page and remove the checked class from the parent.
        var productCompareCheckbox = $(".checker input[type=checkbox][name=" + productId + "], .compare input[type=checkbox][name=" + productId + "]");
        productCompareCheckbox.prop("checked", false);
        productCompareCheckbox.parent().removeClass("checked");
    });

    /**
     * Splash page change region.
     * ==========================
     * When you click a link on the splash page, update the region. The ajax
     * update region script sends back a path (like /category/outdoor-garden...)
     * and we update the window.location pathname to redirect to that page.
     * 
     * @author James McFall <james@96black.co.nz>
     */
    $("ul.countrySelect li a").click(function() {
        
        // Show the splash page overlay.
        $("#regionChangeLoadingOverlay").show();
        
        var region = $(this).data('region');
        $.ajax({
            url: "/splash/ajax-updateregion/"+region,
            success: function(data){
                if (data != "/" )
                {
                window.location = data;
                } else {
                window.location.pathname = data;
                }
            }
        });
        
        return false;
    });

    $("ul.countrySelectNew li a").click(function() {
        
        // Show the splash page overlay.
        $("#regionChangeLoadingOverlay").show();
        
        var region = $(this).data('region');
        $.ajax({
            url: "/splash/ajax-updateregion-new/"+region,
            success: function(data){
                if (data != "/" )
                {
                window.location = data;
                } else {
                window.location.pathname = data;
                }
            }
        });
        
        return false;
    });


    // IE6 li hover fix
    var menu = document.getElementById('menu');
    if(menu) {
        var sfEls = menu.getElementsByTagName("li");
        for (var i=0; i<sfEls.length; i++)
        {
            sfEls[i].onmouseover=function()
            {
                this.className+=" sfhover";
            }
            sfEls[i].onmouseout=function()
            {
                this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
            }
        }
    }

    // Attach to the top menu
    $('#menu-hamburger').click(function(e) {
        var $this = $(this);
        $('header nav').slideToggle();
        $(this).toggleClass('active');
    });


    // Make registered trademarks superscript on the fly
    $('h1, h2, h3, h4, a, p, span').not(".compare, .checker span").each(function() {  
        html = $(this).html();
        if (html) {
            html = html.replace(/[™®]/g, '<sup>$&</sup>');
            $(this).html(html);
        }
    });
    

});

// home page slider
if ($('.slideshow').cycle) {
    $('.slideshow').cycle({
        fx: 'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        timeout: 7000,
        prev: '#prev',
        next: '#next', 
        pager: '#dots'
    });
}

// product detail page slider
if ($('.showcase').cycle && typeof $.hammer != "undefined") {
    $('.showcase').cycle({
        fx: 'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        timeout: 0,
        pager: '#dotss'
    });
} else if ($('.showcase').cycle) {
    $('.showcase').cycle({
        fx: 'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        timeout: 0,
        pager: '#dotss'
    });
}

//uniform styles
$("select, input:checkbox, #contentHelp .compare input").uniform();


/**
 * Whenever the compare products list is interacted with then we need to update
 * the html on the page.
 */
function updateComparisonList(url, element) {
    $.ajax({
        url: url,
        dataType: 'json',
        success: function(response) {
            
            if (response.ok) {
                /**
                 * Now we want to use the same compare list markup, so request the
                 * compare list to get the HTML back and replace the current html.
                 */
                $.ajax({
                    url: "/common/compare-list",
                    success: function(markup) {
                        // Replace the compare list with the new one from the ajax 
                        // response.
                        $("aside .compare").replaceWith(markup);

                        // Toggle the visibility of the compare list
                        toggleCompareMobile();
                    }
                });
                
                // On mobile, if we add a product we want a notification
                var compareLen = $("html.mobileSite").length;
                if (compareLen > 0 && url.indexOf("?action=add") > 0) {
                    noty({
                        text: 'This product has been added to your compare list. Scroll up to access your list.',
                        speed: '700', 
                        timeout: '7000', 
                        closable: 'true',
                        closeOnSelfClick: 'true',
                        layout: 'center', 
                        textAlign: 'center',
                        easing: 'swing',
                        animateOpen: {
                            "height":"toggle"
                        },
                        animateClose: {
                            "height":"toggle"
                        },
                        type: 'success'
                    });
                }
                
            } else {
                noty({
                    text: 'You can only have ' + response.tooMany + ' items in your compare list,<br/> please remove one before adding another.',
                    speed: '700', 
                    timeout: '7000', 
                    closable: 'true',
                    closeOnSelfClick: 'true',
                    layout: 'center', 
                    textAlign: 'center',
                    easing: 'swing',
                    animateOpen: {
                        "height":"toggle"
                    },
                    animateClose: {
                        "height":"toggle"
                    },
                    type: 'success'
                });
                element.prop('checked', false);
                element.parent().removeClass('checked');
            }
        }
    });
}
function bindCompareItems() {
    // bind new element
    $("aside .compare li a").click(function() {
        showLoadingGif($(this));
        var url_title = $(this).data('producturl');
        var url = "/outdoor-garden-products/ajax-compareproducts?remove_product=" + escape(url_title + "|");
        updateComparisonList(url, $(this));
        $("#product-"+url_title).prop("checked", false);
        $("#product-"+url_title).parent().removeClass("checked");
        return false;
    });
}

function showLoadingGif(el) {
    el.addClass("loading-gif");
    el.hover(
        function () {
            el.css("background-position", "0 0");
        }, 
        function () {
        // nothing
        }
        );	
}

function updateProductsPerPage(value) {
    $.ajax({
        url: "/outdoor-garden-products/ajax-products-per-page/"+value,
        success: function() {
            window.location.reload()
        }
    });
}

// wheretobuy search results updated on checkbox click
$("#gasAppliances, #electrical, #petrol").click(function() {
    if ($(this).prop("checked")) {
        $("#serviceAgents").prop("checked", true);
        $("#serviceAgents").parent().addClass("checked");
    } else {
        if (!($("#gasAppliances").prop("checked") || $("#electrical").prop("checked") || $("#petrol").prop("checked"))) {
            $("#serviceAgents").prop("checked", false);
            $("#serviceAgents").parent().removeClass("checked");			
        }
    }
    $('#dealerLocation').trigger("submit", "partialLoad");
});

$("#serviceAgents").click(function() {
    var checked = $(this).prop("checked");
    $("#gasAppliances, #electrical, #petrol").prop('checked', checked);
    if (checked) {
        $("#gasAppliances, #electrical, #petrol").parent().addClass('checked');
    } else {
        $("#gasAppliances, #electrical, #petrol").parent().removeClass('checked');
    }
    $('#dealerLocation').trigger("submit", "partialLoad");
})

$("#outdoorProducts, #lifestyleProducts").click(function() {
    // Note partial load is used to determine if we want to re-center the map.
    $('#dealerLocation').trigger("submit", "partialLoad");
});

// results limit on category pages
function updateCategoryLimit(value) {
    $.ajax({
        url: "/common/ajax-updatelimit/"+value,
        success: function(data) {
            window.location.refresh();
        }
    });
}



/**
 * This method runs an ajax call to clear the comparison list, then unchecks any
 * compare checkboxes and hides the compare list.
 * 
 * 
 */
function clearComparisonList() {
    var url = "/outdoor-garden-products/ajax-compareproducts?action=clearAll";
    $.ajax({
        url: url,
        dataType: 'json',
        success: function(response) {
                $("aside .compare ul").html("");
                //$("aside .compare").slideUp("slow");
                
                // #helpList #list #details
                
                $(".pageRight .details div.checker .checked input").prop("checked", false);
                $("#productList .details div.checker .checked input").prop("checked", false);
                $("#helpList input[type=checkbox]").prop("checked", false);
                $(".pageRight span.checked").removeClass("checked");
                $("#productList span.checked").removeClass("checked");
                $("aside .compare").fadeOut();
        }
    });
}

	
//video carousel 
jQuery('.mycarousel').jcarousel({
    scroll: 1,
    itemFirstInCallback: {
        onAfterAnimation: function(a, b, video_number, d) {
            var el = $(b).parents(".carousel-outer").find(".count");
            var count = el.html().split("/");
            count[0] = video_number;
            el.html(count.join("/"));
        }
    }
});


// Form validate
$("#freeform").validate({
    rules: {
        from: {
            required: true,
            email: true
        }
    }
});

$(".generalForm").validate();

function imposeMaxLength(e, Object, MaxLen) {
    var keycode;
    if (window.event) keycode = window.event.keyCode;
    else if (e) keycode = e.which;
    else return true;
    if (keycode==8 || keycode==46) return true;
    //console.log(keycode);
    return (Object.value.length <= MaxLen);
}

// tooltip event handlers for the help me choose section
$(function(){
    if ($("#help-me-choose-form").length) {
        $("#help-me-choose-form span.tip").tipTip({
            defaultPosition: "right"
        });
        $("#help-me-choose-form p.titleTip").tipTip({
            defaultPosition: "right"
        });
    }
});

// PIE using JS
$(function() {
    if (window.PIE) {
        $('input.form-field, #submit, textarea.msg-field, #dealerLocation input.blueBt, .registration input.form-field, #search, .splash .container, #main.containerWide, #dots, #homeThirds img, header nav li a.topList, #topnav ul#topmenu li ul, .megaMenu, .ie7 .megaMenu, ul.countrySelect, a.blueBtn, #tiptip_content').each(function() {
            PIE.attach(this);
        });
    }
});
