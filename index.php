<!Doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="https://dad0jvgioe6jb.cloudfront.net/logos/17/1028617/Myindo1.png" type="image/png">
        <title>Myindo Cyber Media</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="vendors/linericon/style.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" type="text/css" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" type="text/css" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    </head>
    <body data-spy="scroll" data-target="#mainNav" data-offset="70">

        <!--================Header Menu Area =================-->
        <?php include('db_connect.php');
              include("section/header_menu.php");
        ?>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <?php include("section/home_banner.php"); ?>
        <!--================End Home Banner Area =================-->

        <!--================Capability Area =================-->
        <?php include("section/capability.php"); ?>
        <!--================End Capability Area =================-->

        <!--================Milestone Area =================-->
        <?php include("section/milestone.php"); ?>
        <!--================End Milestone Area =================-->


        <!--================Product One Area =================-->
        <?php include("section/product_one.php"); ?>
        <!--================End Product One Area =================-->

        <!--================Product Two Area =================-->
        <?php include("section/product_two.php"); ?>
        <!--================End Product Two Area =================-->

        <!--================Testimonials Area =================-->
        <?php include("section/testimony.php"); ?>
        <!--================End Testimonials Area =================-->

        <!--================Download App Area =================-->
        <?php include("section/cat.php"); ?>
        <!--================End Download App Area =================-->

        <!--================Career Area =================-->
        <?php include("section/career.php"); ?>
        <!--================End Career Area =================-->

        <!--================Latest News Area =================-->
        <?php //include("section/latest.php"); ?>
        <!--================End Latest News Area =================-->

        <!--================ start footer Area  =================-->
        <?php include("section/footer.php"); ?>
		    <!--================ End footer Area  =================-->



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/theme.js"></script>


        <script>
        $(document).ready(function () {
            handle();

          });

          var configsDefault = {
            dataAttrTabName: "data-tab-to",
            dataAttrTabContentName: "data-tab-content",
            dataAttrTabDefaultActive: "data-tab-default-active" };


          var handle = function handle() {var configs = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : configsDefault;var _configs$dataAttrTabN =




            configs.dataAttrTabName,dataAttrTabName = _configs$dataAttrTabN === undefined ? configsDefault.dataAttrTabName : _configs$dataAttrTabN,_configs$dataAttrTabC = configs.dataAttrTabContentName,dataAttrTabContentName = _configs$dataAttrTabC === undefined ? configsDefault.dataAttrTabContentName : _configs$dataAttrTabC,_configs$dataAttrTabD = configs.dataAttrTabDefaultActive,dataAttrTabDefaultActive = _configs$dataAttrTabD === undefined ? configsDefault.dataAttrTabDefaultActive : _configs$dataAttrTabD;

            var tabItems = $("*[" + dataAttrTabName + "]");
            var tabContents = $("*[" + dataAttrTabContentName + "]");

            // Actions
            var addActive = function addActive(el) {return el.addClass("active");};
            var removeActive = function removeActive(el) {return el.removeClass("active");};
            var addCurrent = function addCurrent(el) {return el.addClass("current");};
            var removeCurrent = function removeCurrent(el) {return el.removeClass("current");};
            var loopAction = function loopAction(func) {return function (targets) {return (
                  targets.each(function (index, el) {
                    func($(el));
                  }));};};
            var loopActionActive = function loopActionActive(value) {return function (targets) {
                return targets.each(function (index, el) {
                  var tab = $(el);
                  var targetName = tab.attr(dataAttrTabName);
                  if (Number(value) > Number(targetName)) {
                    addActive(tab);
                  } else {
                    removeActive(tab);
                  }
                });
              };};

            // Handle clicked
            var handleClickTab = function handleClickTab(tab, tabItems, tabContents) {
              loopAction(removeCurrent)(tabItems);
              loopAction(removeActive)(tabContents);
              var targetName = tab.attr(dataAttrTabName);
              var targets = $("*[" + dataAttrTabContentName + "='" + targetName + "']");
              loopActionActive(targetName)(tabItems);
              addCurrent(tab);
              loopAction(addActive)(targets);
              anime({
                targets: targets[0],
                translateY: [200, 0],
                duration: 3000 });

            };

            // First call
            tabItems.each(function (index, el) {
              var tab = $(el);
              var isDefautlActive = tab.attr(dataAttrTabDefaultActive);

              tab.click(function () {
                handleClickTab(tab, tabItems, tabContents);
              });

              if (isDefautlActive !== undefined) {
                handleClickTab(tab, tabItems, tabContents);
              }
            });
          };
        </script>
    </body>
</html>
