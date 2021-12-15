@extends('layouts.app')

@section('title')

Tableau    

@endsection

@section('contenu')

<main class="container">
        <div class="row">
            <section class="col-12">
         
                <h1>Liste des Etudiants</h1><br>
                <a href="add.php" class="btn btn-primary">Ajouter un Etudiant</a>
                <a style="background-color:green" href="index.php" class="btn btn-primary">Retour</a><br><br>
                <table class="table table-bordered border-success table-success table-striped">
                    
<section class="afficher_produit">

             </section>  
                    <thead>
                        <th class="table-primary">ID</th>
                        <th class="table-primary">NOM</th>
                        <th class="table-primary">PRENOM</th>
                        <th class="table-primary">NUMERO</th>
                        <th class="table-primary">EMAIL</th>
                        <th class="table-primary">DIPLOME</th>
                        <th class="table-primary">SEXE</th>
                        <th class="table-primary">MOT DE PASSE</th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
               
            </section>
        </div>
    </main>

    @foreach ($etudiants as $etudiant)
    <section class="well">
        <h1> <a href="/show/{{$etudiant->id}}">{{$etudiant->etud_name}}</a>  </h1>
    </section>
        
    @endforeach
        
    @endsection