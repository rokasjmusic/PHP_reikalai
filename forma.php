<!DOCTYPE html>
<html>
<head><title>PHP Form Handling</title></head>
<body>

<form action = "" method = "get">
Enter Name <BR>
    <input type = "text" name = "studentname" value = "Your Name">
<BR>
<BR>
Favorite Subject(s)
<BR>
    <input type = "checkbox" name = "subj[]" value = "EL">English
    <input type = "checkbox" name = "subj[]" value = "MA">Math
    <input type = "checkbox" name = "subj[]" value = "PG">Programming
<BR>
<BR>
Gender
<BR>
    <input type = "radio" name = "gender" value = "M">Male
    <input type = "radio" name = "gender" value = "F">Female
<BR>
<BR>
    <input type = "submit" name="sm" value = "Submit Form">

</form>

</body>
</html>