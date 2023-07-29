<footer class="footer pt-3">-

 </footer>

<script srce"assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/sweetalert.js"></script>

</main>

<?php

if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
?>

<script>

swal({

title: '<?php echo $_SESSION['status']; ?>',
 icon:'<?php echo $_SESSION['status_code']; ?>',

button: "Aww yiss!",
})
</script>

<?php

unset($_SESSION['status']);

}
?>