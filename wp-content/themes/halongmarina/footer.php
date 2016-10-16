<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
                    <div class="footer-logo">

                    <?php echo get_custom_logo();?>
                    <p>Kết nối chúng tôi tại:</p>
                        <ul class="list-inline footer-social">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-list">
                        <table class="footer-table">
                            <tr>
                            <th>
                                <a href="#">.  Trang chủ</a>
                            </th>
                            <th>
                                  <a href="#">.  Giới thiệu chung</a>
                            </th>
                          
                            <th>  <a href="#">.  Liên hệ</a>
                            </th>
                            <th>  <a href="#">.  Site map</a>
                            </th>
                            </tr>
                            <tr>
                            <th>  <a href="#">.  Hệ thống phân phối</a>
                            </th>
                            <th>  <a href="#">.  Tư liệu bán hàng</a>
                            </th>
                            <th>  <a href="#">.  Tiến độ thi công</a>
                            </th>
                            <th>  <a href="#">.  Hỏi đáp</a>
                            </th>
                            </tr>
                            
                        </table>
                         <input type="text" class="form-control" id="usr" placeholder="Email nhận tin mới nhất">
                         <button type="button" class="btn btn-primary">Đăng ký</button>
                    </div>
          
        </div>
        
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div id="scroll-button" class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

  <!--LOADING SCRIPT-->
    <?php wp_footer(); ?>
    <!-- jQuery -->
    <script src="<?php echo  get_template_directory_uri()?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo  get_template_directory_uri()?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo  get_template_directory_uri()?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo  get_template_directory_uri()?>/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo  get_template_directory_uri()?>/js/freelancer.js"></script>

    <!-- Plugin JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->


</body>

</html>
