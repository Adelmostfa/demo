
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Application name : AAST _BIS registration form </h1>
<form action = "<?php $_PHP_SELF ?>" method = "POST"> 
    <P style="color: red;" > * Required field </p>
    <label> Name</label> 
    <input type="text" name="name" > <span style="color: red;">*</span>
    <br> <br>
    <label>E-mail</label> 
    <input type="text" name="mail" > <span style="color: red;">*</span>
    <br><br>
    <label> Group# </label> 
    <input type="number" name="group" >
    <br><br>
    <label > class details</label> 
    <textarea name="class_details" cols="35" rows="8"></textarea>
    <br> 
    <label> Gender :</label>
    <input type="radio" name="gender" value="male" >male <input value="female" type="radio" name="gender"> female <span style="color: red;">*</span>
    <br>
    <label> select courses:</label>
    <select name="select2[]" size="5" multiple="multiple" tabindex="1" >
        <option value="html" >html</option>
        <option value="php" >php</option>
        <option value="js" >JS</option>
        <option value="mysql" >mysql</option>
        <option value="database" >database</option>
    </select>
    *Hold down the control (ctrl) button to select multiple options*
    <br>
    <label>agree</label>
    <input type="checkbox" name="agree"><span style="color: red;">*</span>
    <br>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if (!empty($_POST["name"] ) || !empty($_POST["mail"]) || !empty($_POST["group"]) || !empty($_POST["class_details"])
|| !empty($_POST["gender"]) || !empty($_POST["course"]))
{
echo "<h2> your given values are as :</h2> <br> " ;
echo "name:" .$_POST['name']."<br>"  ;
echo "Email:" .$_POST['mail']."<br>" ;
echo "group:" .$_POST['group']."<br>" ;
echo "class_details:" .$_POST['class_details']."<br>" ;
echo "gender:" .$_POST['gender']."<br>" ;
}

if ($_POST) { 
    foreach($_POST['select2'] as $selected) {
        echo $selected."<br>";
    }
}







?>