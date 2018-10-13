<?php $activeNav = 2; ?>

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
            <?php require_once 'blocks/product-aside.php'?>

            <section id="productList">
                <div class="intro">


                    <img src="img/p-img-1.jpg" width="250"
                         height="250" alt="Lifestyle Products" class="floatRight mainImg">


                    <h1>Продукти для стилю життя</h1>

                    <p>Незалежно від того, чи хочете ви, щоб барбекюшниця зайняла центральне місце у вашій зоні відпочинку надворі, або вам просто потрібно щось, щоб смажити стейки і ковбаски у квартирі чи будинку, Masport має потрібну модель відповідно до ваших потреб, стилю життя та бюджету. Усі барбекюшниці Masport мають широкий діапазон додаткових функцій, призначених для застосування максимуму ваших кулінарних навичок надворі. Приєднуйтесь до чудового стилю життя новозеландців цього літа за допомогою барбекюшниць Masport.</p>


                    <a class="trackDownload download" data-tracktype="Masport Brochure Download"
                       data-trackname="/masport/uploads/content/Documents/Masport_BBQ_NZ_2018.pdf"
                       href="/common/download/F/L21hc3BvcnQvdXBsb2Fkcy9jb250ZW50L0RvY3VtZW50cy9NYXNwb3J0X0JCUV9OWl8yMDE4LnBkZg==">Download
                        the Barbecue Range brochure</a>
                    <div class="clear"></div>
                </div>

                <hr>

                <!-- For the top level nav links, make it display a list of categories and a blurb rather than list of products-->

                <ul id="landingList">
                    <li class="firstChild">

                        <img src="img/BBQCategoryImage.jpg" width="125"
                             height="140" alt="Barbecues">

                        <a href="products-2.php">
                            <h2>Барбекюшниці</h2>
                        </a>
                        <p>Ніщо не заважатиме вам отримувати задоволення від гарного барбекю в оточенні ваших друзів та родичів. Завдяки барбекюшниці, що відповідає різноманітним потребам, Masport зможе приготувати сосиски, гамбургери та стейки з мінімумом зусиль, щоб ви могли проводити більше часу, насолоджуючись гарною компанією та гарною їжею.</p>
                    </li>

                </ul>

                <!-- If not top nav, display a list of products -->

                <div class="clear"></div>

            </section>

            <div class="clear"></div>
        </div><!-- /content wrapper-->
    </section>

<?php require_once 'blocks/footer.php' ?>