<html>
    <head>
        <meta charset="utf-8">
        <title> Formulaire </title>
       <style type="text/css">
        body
        {
            background-image: url("index.jpg");
            background-size: 1400px;
            padding: 10px;
        }
   label {
       width: 110px;
       display: inline-block;
       margin: 6px;
       padding-left: 20px;
       border: 2px solid rgba(0,0,0,0);
       background-color: rgb(169,169,169,0.3);
       margin-left: 450px;
       transition: .3s;
       color: black;

       
}

label:hover
{
    background-color: rgba(0,0,0,0.1);;
}
.connexion
{
    background-color: whitesmoke;
    background-color: rgba(230,230,230,0.6);
    box-shadow: 2px 2px 5px #888888;
    margin: 50px;
}
  h1 {
  padding: 10px;
  border-radius: 3px;
  background-color: #04AA6D;
  background-size: 50px;
  color: whitesmoke;
  text-align: CENTER;
  letter-spacing: 5px;
}
.container
{
    padding: 20px;
    padding-left: 100px;
    padding-right: 200px;
}
#boutton
{
  font-family: 'Maven Pro', sans-serif;
  font-size: 14px;
  display: inline-block;
  padding: 16px 38px;
  border: 2px solid transparent;
  border-radius: 40px;
  color: #fff;
  font-weight: 400;
  transition: 0.2s all;
  background-color: #04AA6D;
  border-radius: 3px;
  color: white;
  margin-left: 550px;
}
a{
    margin-left: 500px;
    margin-top: 100px;
    color: Black;
    text-decoration: none;
    font-size: 30px;
    letter-spacing: 5px;
}
 
</style>
    </head>
    <body>
        <div class="connexion">
           <div class="container"> <h1>CONNECTEZ VOUS!</h1></div>
    <table width="50%" padding="10%" cellspacing="1" cellpadding="3">
    <form action="traitement.php" method="post">
         <tr>
          <td><label for="name" >Email</label></td><br>
          <td><input type="texte" name="email" id="email"> <br/><br/></td>
         </tr>
         <tr>
          <td><label for="name">PASSWORD</label></td><br>
            <td><input type="texte" name="password" id="password"><br><br></td>
         </tr>
        <tr>
        <td><div class="envoyer"><input type="submit" value="LOGIN" id="boutton"></td></tr></div>    
    </form></div>
    </table>







