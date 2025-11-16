<!DOCTYPE html>
<head>
    <title>my file</title>
</head>
<center>
<h1>Student registration</h1>
<table>
  <body>
    enter your full name:
    <input type="text" id="fullname"><br>
    enter email:
    <input type="text" id="email"><br>
    enter passward:
    <input type="text" id="passward"><br>
    confirm passward:
    <input type="text" id="confirm passward"><br>
    <button id="register" onclick="register()">register</button>
    <script>
        function register()
        {
            var body=document.body;
            var name=document.getElementbyId("fullname") 
            var email=document.getElementbyId("email") 
            var passward=document.getElementbyId("passward")
            var confirmPassward=document.getElementbyId("confirm passward")
        
     if(fullname=="" ||email==""|| passward=="" || confirm passward=="" )
     {
        alert("all fields are required")
        return false
     }
     if(!email.includes("@"))
        {
        alert("the email must contain@")
        return false
     }
    if(passward==confirm passward )
     {
        alert("passward and confirm passward must match")
        return false
     }
     else
     {
        alert("registration successful")
        console.log("the name is :",fullname)
        console.log("the name is :",email)
    }
    <h1>Course registration</h1>
    enter your course name:
    <input type="text" id="coursename"><br>
    <button id="addcourse" onclick="addcourse()">add course</button>
    Add course:
    <select>
        <option>web tech</option>
        <option>AI</option>
        <option>compiler</option>
        <option>java</option>
        <option>BGS</option>
   </select>
   function addcourse(){
            var body=document.body;
            var name=document.getElementbyId("coursename") 
        }
        console.log("the name is :",coursename)
        
     
    
    }
    </script>
        </body>
        </table>
        </center>
</html>


   
