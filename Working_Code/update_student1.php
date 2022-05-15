<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<html>
    <form action="update_student.php" method="post">
        <div class="container p-5 my-5 bg-dark text-white">
            Enter student id:
            <input type="text" name="Sid" required>
        </div>
        
        <div class="container p-5 my-5 bg-dark text-white">
            Update student name:
            <input type="text" name="Name" required>
        </div>
        <div class="col text-center">
            <button type="submit"  class="btn btn-dark">Submit</button>
        </div>
    </form>
</html>