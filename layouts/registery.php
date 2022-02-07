<!doctype html>
<html lang="ru">
<?php require_once 'elems/head.php'?>
<body>

<?php require_once 'elems/header.php'?>

<main>
   <section class="registration">

       <form action="" class="form-registration">
           <div class="form-title">Apply Now</div>
           <input type="text" name="name" placeholder="First Name">
           <input type="text" name="surname" placeholder="Last Name">
           <input type="text" name="email" placeholder="Email">
           <input type="password" name="password" placeholder="Choose Password">
           <input type="password" name="confirm_pass" placeholder="Confirm Password">
           <input type="submit" value="Apply Now" class="btn btn-form-registration">
       </form>
   </section>
</main>

<?php require_once 'elems/footer.php'?>

</body>
</html>