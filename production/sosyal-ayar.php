<?php include 'header.php';
include '../ayarlar/baglan.php';

if($_SESSION['kullanici_yetki'] == "editor"){
    header('Location:../production/yetki-yok.php');
}
$ayarsor=$db->prepare("SELECT * FROM ayarlar WHERE site_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>API Ayarları<small>
                       <?php 
                        if ($_GET['durum']=='ok') { ?>
       
                         <b style="color:green;">Güncelleme başarılı...</b>
                         
                         <?php } elseif ($_GET['durum']=='no'){ ?>
                           
                            <b style="color:red;">Güncelleme başarısız...</b>
                            
                       <?php } ?>  
                         </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                   
                 <form action="../ayarlar/islem.php"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="Facebook linkinizi yazınız" name="site_facebook" value="<?php echo $ayarcek['site_facebook']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="Twitter linkinizi yazınız." name="site_twitter" value="<?php echo $ayarcek['site_twitter']; ?>"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Instagram</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="Instagram linkinizi yazınız." name="site_instagram" value="<?php echo $ayarcek['site_instagram']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google+
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="Google+ linkinizi yazınız." name="site_googleplus" value="<?php echo $ayarcek['site_googleplus']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-primary" type="reset">Temizle</button>
                          <button type="submit" name="sosyalayarkaydet" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>
                      
                       </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
