

<?php include "admin_includes/admin_header.php" ?>
        <!-- Navigation -->
       

<?php include "admin_includes/admin_navigation.php" ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            Welcome To CMS 
                            <small>Author</small>
                        </h1>

        

                        <div class="col-xs-12">
<?php



if (isset($_GET['source'])) {

    $source=$_GET['source'];
}
else {
    $source='';
}


    switch ($source) {
        case '1':
            echo "source 1 ";
            break;
        case '2':
            echo "source 2";
            break;
        case 'add_post':
            include "admin_includes/add_post.php";
          
            break;
        case 'edit_post':
            include "admin_includes/edit_post.php";
            break;
        
        default:
            include "admin_includes/view_all_comments.php";
            break;
    
}

?>     
                        </div>


                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "admin_includes/admin_footer.php" ?>