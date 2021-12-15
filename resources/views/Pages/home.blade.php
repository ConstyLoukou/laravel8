   @extends('layouts.app')

   @section('title')

       Home    

   @endsection

   @section('contenu')

   <section class="container">

   <section class="section_login">  

    <form action="tableau" method="POST">
        <fieldset>
            <legend>Login Up</legend>
            <label for="email">EMAIL</label><br>
            <input type="email" name="email" id="email" class="form-control"><br><br>
            <label for="password">MOT DE PASSE</label><br>
            <input type="password" name="password" id="password" class="form-control"><br><br>
            <input type="submit" name="Envoyer" class="btn btn-primary">
        </fieldset>
    </form>
    <h4>Vous n'avez pas de compte <a href="inscription">Créer un compte</a></h4>
    </section>
    <section class="perso">
        <h1>Bienvenue a Ivoire Geek School</h1>
        <img src="C:\Users\hp\Desktop/consty123.png" alt="" sizes="" srcset="">
    </section>
</section>

       
   @endsection

   <style>


       .container{
           display: flex;
           flex-wrap: wrap;
           color: white;
           background-color: black;
           

       }   
       
       .section_login{
           margin-right: 100px;
           width: 400px;
           background: ;
           padding: 50px;
           
       }

       .perso{
           width: 580px;
           background-color:; 
           height: 500px;
          
       }

   </style>


   
   

