<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <script src="js/jquery-2.1.1.js"></script>
    
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    
	<title>Helpdesk</title>
</head>
<body>

	<form class="cd-form floating-labels" method="POST" action="index.php" name="ticket">
		<fieldset>
			<legend>Ticketing Helpdesk</legend>

            <input type="hidden" name="id_tiket" value="<?php echo date("dmYHis"); ?>" id="id_ticket"/>
            <input type="hidden" name="id_user" value="<?php echo date("dmYHis"); ?>" id="id_user"/>
            <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>" id="tanggal"/>

		    <div class="icon">
		    	<label class="cd-label" for="nama">Subject</label>
				<input class="subject" type="text" name="subject" id="subject" autocomplete="off" required="required">
		    </div> 
            
            <div class="icon">
                <label for="departemen" class="cd-label">Departemen</label>
                <select class="form-departemen" name="departemen">
                    <option>Keuangan</option>
                    <option>Sarana Prasarana</option>
                    <option>Keilmuan</option>
                </select>
            </div>

            <div class="icon">
				<label class="cd-label" for="cd-textarea">Keluhan</label>
      			<textarea class="message" name="keluhan" id="keluhan" autocomplete="off" required="required"></textarea>
			</div>

            <div>
                <input type="submit" onclick="notifikasi()" name="Submit" id="Submit" value="Send Message">
		    </div>
            
            <a href="datatiket.php">Data Ticket</a>
		    
		</fieldset>
		<center><a href="helpdesk.html">Kembali</a></center>
	</form>

    <?php
    
        if(isset($_POST['Submit'])) {
            $tanggal = $_POST['tanggal'];
            $id_user = $_POST['id_user'];
            $subject= $_POST['subject'];
            $departemen = $_POST['departemen'];
            $keluhan = $_POST['keluhan'];
            $status = 'waiting';
            $solusi = $_POST['solusi'];
            
            include_once("koneksi.php");
    
            $tiket = mysqli_query($mysqli, "INSERT INTO users(tanggal,id_user,subject,departemen,keluhan,status,solusi) VALUES('$tanggal','$id_user','$subject','$departemen','$keluhan','$status','$solusi')");
    
            header("Location: datatiket.php");
        }
    ?>

    <script src="js/main.js"></script> <!-- Resource jQuery -->

           <!-- <script>
  sweetAlert("Hello world!");
  </script> --> 
  
<script>
            $(document).ready(function() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });
             
            function notifikasi() {
                if (!Notification) {
                    alert('Browsermu tidak mendukung Web Notification.'); 
                    return;
                }
                if (Notification.permission !== "granted")
                    Notification.requestPermission();
                else {
                    var notifikasi = new Notification('Helpdesk Tiket', {
                        icon: 'logo.png',
                        body: "Tiket Baru dari <?php echo $nama; ?>",
                    });
                    notifikasi.onclick = function () {
                        window.open("http://tsuchiya-mfg.com");      
                    };
                    setTimeout(function(){
                        notifikasi.close();
                    }, 1000);
                }
            };
</script>
</body>
</html>