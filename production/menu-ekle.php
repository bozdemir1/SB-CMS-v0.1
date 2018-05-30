<?php include 'header.php';
include '../ayarlar/baglan.php';
?>
<head>
     
</head>
     
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
                         </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                   
                 <form action="../ayarlar/islem.php" method="post"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      
                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Üst Menü Seç</label>
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
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Ad<span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="first-name"  name="menu_ad"  class="form-control col-md-7 col-xs-12"  required="required">
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü URL<span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="first-name"  name="menu_url"  class="form-control col-md-7 col-xs-12" >
            </div>
          </div>
                     
            <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Detay<span class="required">*</span> 
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <textarea class="ckeditor" id="editor1" name="menu_detay"></textarea>
            </div>
          </div>

            <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Sıra<span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="firt-name"  name="menu_sira"  class="form-control col-md-7 col-xs-12"  required="required" value="0">
            </div>
          </div>
 
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Durum<span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
             <select id="heard" class="form-control" name="menu_durum"  required>
               <option value="1">Aktif</option>
               <option value="0">Pasif</option>
             </select>
           </div>
         </div>
                      
    <div class="form-group">
        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
     <button class="btn btn-primary" type="reset">Temizle</button>
        <button type="submit" name="menukaydet" class="btn btn-success">Kaydet</button>
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
 <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
 <script>
     $(document).ready(function(){
         $(".select2_single").select2({
             placeholder:"Slecet a state",
             allowClear:true
         });
         $(".select2_group").select2({});
         $(".select2_multiple").select2({
             maximumSelectionLength:4,
             placeholder:"With max selection limit 4",
             allowClear:true
         });
     });
 </script>
        <?php include 'footer.php'; ?>
