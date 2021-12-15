@extends('layouts.app')

@section('title')

Details   

@endsection

@section('contenu')

<h1>je suis la page show</h1>

{{--<main class="container">
        <div class="row">
            <section class="col-12">
         
                <h1>Le detail de l'etudiant</h1><br>
                <h3>{{$etudiant->etud_name}}</h3>
                <h3>{{$etudiant->etud_firtname}}</h3>
                <h3>{{$etudiant->etud_number}}</h3>
                <h3>{{$etudiant->etud_email}}</h3>
                <h3>{{$etudiant->etud_diplo}}</h3>
                <h3>{{$etudiant->etud_sex}}</h3>
                <h3>{{$etudiant->password}}</h3>
                <hr>
                <h4>{{$etudiant->created_at}}</h4>
                <a href="" class="btn btn-primary">Edith</a>
                  
                  



                <!--a href="add.php" class="btn btn-primary">Ajouter un Etudiant</a>
                <a style="background-color:green" href="index.php" class="btn btn-primary">Retour</a-->
                <!--table class="table table-bordered border-success table-success table-striped"-->
                    
{{--<section class="afficher_produit">

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
                        <tbody>
                            
                           
                            
                            
                                <!--tr class="table-">
                                    <td>{{$etudiant->etud_name}}</td>
                                    <td>{{$etudiant->etud_firstname}}</td>
                                    <td>{{$etudiant->etud_number}}</td>
                                    <td>{{$etudiant->etud_email}}</td>
                                    <td>{{$etudiant->etud_diplo}}</td>
                                    <td>{{$etudiant->etud_sex}}</td>
                                    <td>{{$etudiant->password}}</td>
                                    
                                    <td>
                                        <a href="" class="btn btn-primary">Ajouter</a>
                                        <a href="" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            
                        </tbody>
                    </table>
                    </tbody>
                </table>
               
            </section>
        </div>
    </main>--}} 

  
    @endsection