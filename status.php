<?php if(isset($_SESSION['successfully_status'])):
?>
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: '<?= $_SESSION['successfully_status'] ?>'
    })
</script>
<?php 
    endif;
    unset($_SESSION['successfully_status']);
?>


<?php if(isset($_SESSION['error_status'])):
?>
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'error',
        title: '<?= $_SESSION['error_status'] ?>'
    })
</script>
<?php 
    endif;
    unset($_SESSION['error_status']);
?>
