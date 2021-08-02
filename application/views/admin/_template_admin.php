<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <!-- meta -->
        <?php echo @$_meta; ?>
        <title>Edmin</title>
        <!-- css -->
        <?php echo @$_css; ?>
       
    </head>
    <body>
        <!-- nav -->
        <?php echo @$_nav; ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!-- sidebar -->
                        <?php echo @$_sidebar; ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <!-- body -->
                            <?php echo @$_mainContent; ?>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <!-- footer -->
          <?php echo @$_footer; ?>
         <!-- js -->
          <?php echo @$_js; ?>
      
    </body>
