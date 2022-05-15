
<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .border 
    {
        display: inline-block;
        width: 70px;
        height: 70px;
        margin: 6px;
    }
</style>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome</h1>
  <p>HAMARAY BACHAY</p> 
</div>

<div class="container mt-5">
  <div class="row">

    <div class="col-sm-4">
        <div class="container p-5 my-5 bg-dark text-white">
            <p><a href="student_form.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">add new students</a></p>
        </div>

        <div class="container p-5 my-5 bg-dark text-white">
            <p><a href="student.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">view students</a></p>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="container p-5 my-5 bg-dark text-white">
            <p><a href="update_student1.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">edit students</a></p>
        </div>

        <div class="container p-5 my-5 bg-dark text-white">
            <p><a href="del_student.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">delete students</a></p>
        </div>
    </div>

    <div class="col-sm-4">  
        <div class="container p-5 my-5 bg-dark text-white">
            <p><a href="info_student.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">student information</a></p>
        </div>

        <div class="container p-5 my-5 bg-dark text-white"er">
            <p><a href="count_student.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Count of student per class</a></p>
        </div>
    </div>
  </div>
</div>

</body>
</html>
