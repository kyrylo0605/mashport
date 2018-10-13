<?php $activeNav = 2; ?>
<?php $activeNavAside = 1; ?>

<?php require_once 'blocks/meta.php' ?>
<?php require_once 'blocks/header.php' ?>

    <section class="container breadcrumbs">
        <a href="/">Головна</a>
        <span class="breadcrumbDivide"> &gt; </span>
        Продукти для стилю життя
    </section>
    <div class="clear"></div>

    <section id="main" class="containerWide">
        <div id="content_wrapper">
            <?php require_once 'blocks/product-aside.php' ?>

            <section id="productList">
                <div class="intro">


                    <img src="img/BBQCategoryImage.jpg" width="250"
                         height="250" alt="Lifestyle Products" class="floatRight mainImg">


                    <h1>Барбекюшниці</h1>

                    <p>Ніщо не заважатиме вам отримувати задоволення від гарного барбекю в оточенні ваших друзів та
                        родичів. Завдяки барбекюшниці, що відповідає різноманітним потребам, Masport зможе приготувати
                        сосиски, гамбургери та стейки з мінімумом зусиль, щоб ви могли проводити більше часу,
                        насолоджуючись гарною компанією та гарною їжею.</p>


                    <a class="trackDownload download" data-tracktype="Masport Brochure Download"
                       data-trackname="/masport/uploads/content/Documents/Masport_BBQ_NZ_2018.pdf"
                       href="/common/download/F/L21hc3BvcnQvdXBsb2Fkcy9jb250ZW50L0RvY3VtZW50cy9NYXNwb3J0X0JCUV9OWl8yMDE4LnBkZg==">Download
                        the Barbecue Range brochure</a>
                    <div class="clear"></div>
                </div>

                <hr>

                <!-- For the top level nav links, make it display a list of categories and a blurb rather than list of products-->

                <div class="results">
                    <span id="showing_pages">Showing page <strong>1</strong> of <strong>2</strong></span>
                    <form name="form1" method="post" action="/category/lifestyle-products/barbecues">
                        <div class="floatRight">Display
                            <div class="selector" id="uniform-display"><span>12</span><select name="limit" id="display"
                                                                                              onchange="document.form1.submit()"
                                                                                              style="opacity: 0;">
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                                    <option value="10">10</option>
                                    <option value="12" selected="selected">12</option>
                                    <option value="0">All</option>
                                </select></div>
                            per page
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>

                <hr>
                <div id="prodListInfinite">
                    <ul id="list" class="prodListInfiniteList">


                        <li class="firstChild">


                            <div class="img">
                                <a href="/products/lifestyle-products/barbecues/mb4000">
                                    <img src="img/p-img-3.jpg"
                                         width="145" height="167" alt="MB4000">
                                </a>
                            </div>

                            <div class="details">
                                <h2>
                                    <a href="/products/lifestyle-products/barbecues/mb4000">MB4000</a>
                                </h2>
                                <span class="code">#552995</span><span class="code">RRP $699.00</span><br>

                                <!-- Compare Checkbox -->
                                <span class="compare">
                <div class="checker" id="uniform-product-mb4000"><span><input type="checkbox" id="product-mb4000"
                                                                              name="552995" style="opacity: 0;"></span></div>
                <label for="product-mb4000">Compare</label>
            </span>

                                <p>4 main burners with side burner. Finished in durable powdercoat with vitreous enamel
                                    window hood...</p>
                                <a href="/products/lifestyle-products/barbecues/mb4000">Find out more</a>
                            </div>
                        </li>



                        <script>
                            document.getElementById("showing_pages").innerHTML = "Showing page <strong>1</strong> of <strong>2</strong>";
                        </script>

                    </ul>

                    <p class="rrpDisclaimer">RRPs are provided as a guide only and the actual retail sale price of goods
                        is at the retailer's discretion.</p><br>


                    <div class="clear"></div>
                    <hr>

                    <div id="pagination" class="productPagination">

                        <ul>
                            <li class="active firstChild">1</li>
                            <li class="lastChild"><a href="/category/lifestyle-products/barbecues/P12">2</a></li>
                        </ul>
                        <div class="next"><a href="http://www.masport.co.nz/category/lifestyle-products/barbecues/P12">Next
                                Page</a></div>
                    </div>
                </div>

                <div class="clear"></div>

            </section>

            <div class="clear"></div>
        </div><!-- /content wrapper-->
    </section>

<?php require_once 'blocks/footer.php' ?>