$(document).ready(function() {

    /**
     * ONLY RUN THIS CODE IF WE HAVE THE MOBILE SITE CLASS.
     */
    if ($("html.mobileSite").length > 0) {

        var scrollingLoading = '<div class="infiniteLoader"><img src="/templates/default_site/images/ajax-loader.gif" alt="Loading" /><span>Loading...</span></div>';
        /**
         * Product category pages infinite scrolling
         */
        if ($(".productPagination").length > 0) {
            $('div#prodListInfinite').jscroll({
                loadingHtml: scrollingLoading,
                padding: 20,
                nextSelector: '#pagination .next a:last',
                contentSelector: '#prodListInfinite'
            });
        }

        /**
         * News page infinite scrolling
         *
         * Make sure it's only run if we find pagination
         */
        else if ($(".newsPagination").length > 0) {
            $('section#news').jscroll({
                loadingHtml: scrollingLoading,
                padding: 20,
                nextSelector: '.next a:last',
                contentSelector: 'div.innerNewsWrapper'
            });
        }

        // Accordions for mobile
        $('.collapse').collapse();

        /**
         * Where to buy, when clicking on one of the items in the list of available
         * dealers, scroll to the top of the page.
         */
        $("#store_results_list li a").live("click", function() {
            window.scrollTo(0,0);
        });

        $("a.seeFilters").live("click", function(e) {
            e.preventDefault();

            if ($(this).hasClass("collapsed")) {
                $(this).text("Show filters");
                $('div.expandCollapse').addClass('hide');
                $('#collapseAll').collapse('toggle');
            } else {
                $(this).text("Hide filters");
                $('div.expandCollapse').removeClass('hide');
                $('#collapseAll').collapse('toggle');
            }
        });


        $("a.expandAll").click(function () {
            $("#help-me-choose-form > .collapse").collapse('show');
            $('#help-me-choose-form > a').removeClass('collapsed');
        });

        $("a.collapseAllThings").click(function () {
            $("#help-me-choose-form > .collapse").collapse('hide');
            $('#help-me-choose-form > a').addClass('collapsed');
        });


        /**
         * Home page banners mobile swipe
         */
        if ($('.showcase').cycle) {
            $('.showcase').hammer({
                dragLockToAxis: true,
                dragBlockHorizontal: true
            }).on("swipeleft", function(e) {
                $(e.currentTarget).cycle("prev");
                e.preventDefault();
            }).on("swiperight", function(e) {
                $(e.currentTarget).cycle("next");
                e.preventDefault();
            });
        };


    } // MOBILE CHECK



    /*

     if ($("div.pagination", '#blogArticles').length > 0) {
     $('#blogArticles').jscroll({
     loadingHtml: scrollingLoading,
     padding: 20,
     nextSelector: 'div.pagination a.page-next:last',
     contentSelector: 'div.blogArticlesWrapper'
     });
     }

     */

});