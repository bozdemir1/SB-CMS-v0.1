<?php include 'header.php';
include '../ayarlar/baglan.php';

 $duzenlemenusor=$db->prepare("SELECT * from menu WHERE menu_id=:menu_id");
    $duzenlemenusor->execute(array(
    'menu_id'=> $_GET['menu_id']
    ));
$duzenlemenucek=$duzenlemenusor->fetch(PDO::FETCH_ASSOC);

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
                    <h2>Menü İşlemleri<small>
                       <?php 
                        if ($_GET['durum']=='ok') { ?>
       
                         <b style="color:green;">Güncelleme başarılı...</b>
                         
                         <?php } elseif ($_GET['durum']=='no'){ ?>
                           
                            <b style="color:red;">Güncelleme başarısız...</b>
                            
                       <?php } ?>  
                         </small>
                         </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                   
                 <form action="../ayarlar/islem.php" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     
                      <input type="hidden" name="menu_id" value="<?php echo $duzenlemenucek['menu_id']; ?>">
                             
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-2 col-xs-12">Üst Menü Seç</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="select2_single form-control" required="required" name="menu_ust" tabindex="-1">
                            <option></option>
                            
                             <option value="0">Üst Menü</option>
                             
                            <?php
                             $menusor = $db->prepare("SELECT * FROM menu WHERE menu_ust=:menu_ust ORDER BY menu_sira");
                                    $menusor->execute(array(
                                        'menu_ust' => 0));
                            
                            while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
                                ?>
                            
                            <option value="<?php echo  $menucek['menu_id' ]; ?>"><?php echo $menucek['menu_ad']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                          
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Ad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="menu_ad" value="<?php echo $duzenlemenucek['menu_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Icon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="menu_icon" value="<?php echo $duzenlemenucek['menu_icon']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                          
                            <div class="form-group">
            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name">Menü Detay<span class="required">*</span> 
            </label>
            <div class="col-md-6 col-sm-9 col-xs-12">
              <textarea class="ckeditor" id="editor1" name="menu_detay"><?php echo $duzenlemenucek['menu_']; ?></textarea>
            </div>
          </div>
                      
                      <div class="form-group">
                 <label class="control-label col-md-3 col-sm-2 col-xs-12" for="first-name">Menü URL<span class="required">*</span> 
                  </label>
                 <div class="col-md-6 col-sm-9 col-xs-12">
                 <input type="text" id="first-name"  name="menu_url" value="<?php echo $duzenlemenucek['menu_url']; ?>" class="form-control col-md-7 col-xs-12">
                 </div>
                    </div>
                          
                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Sıra <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="menu_sira" value="<?php echo $duzenlemenucek['menu_sira']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Durum <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="heard" name="menu_durum" class="form-control" required>
                           <?php 
                               if($duzenlemenucek['menu_durum']==1) {?>
                               
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                                   
                               <?php } else {?>
                               
                            <option value="0">Pasif</option>
                            <option value="1">Aktif</option>
                                   
                               <?php } ?>
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">          
                          <button type="submit" name="menuduzenle" class="btn btn-success">Kaydet</button>
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
