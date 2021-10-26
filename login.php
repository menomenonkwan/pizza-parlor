<?php

  if(isset($_POST['submit'])){

    // cookie
    setcookie('gender', $_POST['gender'], time() + 86400);

    // session
    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
  }

?> 

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php'); ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Your Name:</label>
    <input type="text" name="name">
    <div class="input-field">
      <select name="gender">
        <option value="" disabled selected>Choose your gender</option>
        <option value="female">female</option>
        <option value="male">male</option>
        <option value="">declined to state</option>
      </select>
      <label>Your Gender:</label>
    </div>
    <input type="submit" name="submit" value="submit">
  </form>

  <?php include('templates/footer.php'); ?>
  
</html>