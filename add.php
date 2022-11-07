<?php
  $email=$title=$ingredients='';
  $errors=array('email'=>'','title'=>'','ingredients'=>'');
  if(isset($_POST['submit'])){
    
    if(empty($_POST['email'])){
      $errors['email'] = 'An email is required' . '</br>';
    } else {
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email must be a valid email adress' . '</br>';
      }
    }

    if(empty($_POST['title'])){
      $errors['title'] = 'A title is required' . '</br>';
    } else {
      $title = $_POST['title'] ;
      if (!preg_match('/^[a-zA-Z\s]+$/' , $title)) {
        $errors['title'] = 'Title must be letters and spaces only' . '</br>';
      }
    }

    if(empty($_POST['ingredients'])){
      $errors['ingredients'] = 'At least one ingredient is required' . '</br>';
    } else {
      $ingredients = $_POST['ingredients'] ;
      if (!preg_match('/^([a-zA-Z\s]+)(,*[a-zA-Z\s]*)*$/' , $ingredients)) {
      $errors['ingredients'] = 'Ingredients must be a comma separated list' . '</br>';
      }
      
  }
  }
?>

<!DOCTYPE html>
<html >
    <?php include('templates/header.php'); ?>
    <section class="container">
        <h4 class="center">Ajouter un Plat</h4>
        <form class="white" action="add.php" method="POST">
            <label>Votre Email</label>
            <input type="text" name="email">
            <div class="red-text"><?php echo $errors['email'];?></div>
            <label>Nom du Plat</label>
            <input type="text" name="title">
            <div class="red-text"><?php echo $errors['title'];?></div>
            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingredients">
            <div class="red-text"><?php echo $errors['ingredients'];?></div>
            <div class="centre">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include('templates/footer.php'); ?>
</html>



