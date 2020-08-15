<div class="header" style="text-align: center;height: 82px;background-color:#000033;color: white;padding: 16px">
        <?php 
        if (isset($_SESSION['user'])) {

        	echo"WELCOME MR ".$_SESSION['user'];
        	# code...
        }

         ?>
    </div>