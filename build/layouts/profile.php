<!doctype html>
<html lang="ru">
<?php require_once 'elems/head.php'?>
<body>

<?php require_once 'elems/header.php'?>

<main>
   <section class="registration">
       <form action="" class="form-registration form-profile" >
           <div class="form-title">Your information</div>
           <input type="image" src="img/logo.png" name="avatar" placeholder="Avatar" value="">
           <input type="text" name="name" placeholder="First Name">
           <input type="text" name="surname" placeholder="Last Name">
           <input type="text" name="email" placeholder="Email">
           <input type="password" name="password" placeholder="Choose Password">
           <input type="password" name="confirm_pass" placeholder="Confirm Password">
           <input type="submit" value="Save Now" class="btn btn-form-registration">
       </form>
   </section>
</main>

<?php require_once 'elems/footer.php'?>

</body>
</html>