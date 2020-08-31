 <!-- Main Footer -->
 <footer class="main-footer my-3">
   <!-- To the right -->
   <div class="float-right d-none d-sm-inline">
     <?php
      $tanggal = mktime(date("m"), date("d"), date("Y"));
      echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
      date_default_timezone_set('Asia/Jakarta');
      $jam = date("H:i:s");
      echo "| Pukul : <b>" . $jam . " " . "</b>";
      $a = date("H");
      if (($a >= 00) && ($a <= 11)) {
        echo "<b>, Selamat Pagi !!</b>";
      } else if (($a > 11) && ($a <= 15)) {
        echo ", Selamat Siang !!";
      } else if (($a > 15) && ($a <= 18)) {
        echo ", Selamat Sore !!";
      } else {
        echo ", <b> Selamat Malam </b>";
      }
      ?> Created by Masrianto.
   </div>
   <!-- Default to the left -->
   <strong>Copyright &copy; <a
       href="https://www.lakip.co.id"><?php echo SITE_NAME . ".CO.ID</a></strong> 2018 - " . Date('Y') ?>
       All rights reserved.
 </footer>