<?php include 'header.php';
include '../ayarlar/baglan.php';

if(isset($_POST['arama'])){
    $aranan=$_POST['aranan'];

$etkinliklersor=$db->prepare("SELECT * FROM etkinlikler WHERE etkinlikler_ad LIKE '%$aranan%' ORDER BY etkinlikler_id ASC limit 25");
$etkinliklersor->execute();
$say=$etkinliklersor->rowCount();
    
} else {
    
    $etkinliklersor=$db->prepare("SELECT * FROM etkinlikler ORDER BY etkinlikler_id DESC limit 25");
$etkinliklersor->execute();
$say=$etkinliklersor->rowCount();  
}
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Etkinlikler</h3>     
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form action="" method="post">
                   <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar kelime...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara!</button>
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İçerik İşlemleri<small>
                       <?php  echo $say. " kayıt listelendi";
                        if ($_GET['durum']=='ok') { ?>
       
                         <b style="color:green;">İşlem başarılı...</b>
                         
                         <?php } elseif ($_GET['durum']=='no'){ ?>
                           
                            <b style="color:red;">İşlem başarısız...</b>
                            
                       <?php } ?>
                       </small>
                       </h2>
                    <div align="right" class="col-md-12">
                     <a href="etkinlikler-ekle.php"><button style="margin-top:30px;" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button></a>
                      </div>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                    
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Etkinlik Ad</th>
                            <th class="column-title">Etkinlik Tarih </th>
                            <th class="column-title">Etkinlik Sahibi Ad Soyad</th>
                            <th class="column-title">Etkinlik Sahibi Motor Modeli</th>
                            <th class="column-title">Etkinlik Açıklama </th>
                            <th class="column-title">Etkinlik Harita ID </th>
                            <th class="column-title">Etkinlik Harita Özel Anahtar </th>
                            <th class="column-title">Etkinlik Durum</th>
                            <th width="80" class="column-title"> </th>
                            <th width="80" class="column-title"> </th>
                            
                          
                          </tr>
                        </thead>
                        <tbody>
    
                        <?php
                            
                        
                        while($etkinliklercek=$etkinliklersor->fetch(PDO::FETCH_ASSOC)){
                        ?>
                          <tr>
                           
                            
                            <td class=""> <?php echo $etkinliklercek['etkinlikler_ad'] ?></td>
                            <td class=" "> <?php echo $etkinliklercek['etkinlikler_zaman'] ?></td>
                             <td class=""> <?php echo $etkinliklercek['etkinlikler_sahip'] ?></td>
                             <td class=""> <?php echo $etkinliklercek['etkinlikler_motor_modeller'] ?></td>
                            <td class=" "> <?php echo $etkinliklercek['etkinlikler_aciklama'] ?></td>
                             <td class=""> <?php echo $etkinliklercek['etkinlikler_harita_id'] ?></td>
                            <td class=" "> <?php echo $etkinliklercek['etkinlikler_harita_privatekey'] ?></td>
                            <td class=" "><?php 
                                
                                if($etkinliklercek['etkinlikler_durum']=="1"){
                                    echo "AKTİF";
                                } else {
                                    echo "PASİF";
                                }
                            
                            ?></td>
                            
                              <td class=" "><a href="etkinlikler-duzenle.php?etkinlikler_id=<?php echo $etkinliklercek['etkinlikler_id']; ?>"><button style="width:80px" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                            
                            <td class=" "><a href="../ayarlar/islem.php?etkinliksil=ok&etkinlikler_id=<?php echo $etkinliklercek['etkinlikler_id']; ?>"><button style="width:80px" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
                            
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>	
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
