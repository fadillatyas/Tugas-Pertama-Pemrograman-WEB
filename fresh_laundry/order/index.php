<?php include 'koneksi.php'; ?>
<?php require_once('../_functions.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Redirect</title>
</head>
<body>
   <script>
      window.location='<?=url('order/order.php');?>';
   </script>
</body>
</html>