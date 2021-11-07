<?php
  $btnRegister = get_field('registrate', 'option');
?>

<div class=" btn btn-danger btn-register-popup mx-auto m-4"><?php echo $btnRegister; ?></div>

<?php if (is_admin() ) { ?>
<style type="text/css">
.btn-register-popup {
  min-height: 50px;
  max-width: 200px;
  margin: auto;
  background: #fffb06;
  content: 'registrate';
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
}

</style>
<?php } ?>
