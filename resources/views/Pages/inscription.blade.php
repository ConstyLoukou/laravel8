@extends('layouts.app')


@section('title')

Inscription    

@endsection

@section('contenu')


<section class="section_login"> 
    {{--<form action="{{url('/saveetudiant')}}" method="POST" class="form-horizontal">--}}
        {!!Form::open(['action' => 'App\Http\Controllers\PagesController@inscription', 'method' => 'POST', 'class' => 'form-horizontal'])!!}
        {{csrf_field()}}  <br>
        <fieldset>
            <legend style="text-align: center">Inscription</legend><br><br>
                <section class="form_group">
                    {{-- <label for="nom"></label> --}}
                  {{--Form::label('', 'Nom')--}}
                  {{Form::text('etud_name', '', ['placeholder' => 'Votre Nom', 'class' => 'form-control'])}}<br>
                 {{--<input type="text" name="etud_name" id="nom" class="form-control" placeholder="Votre Nom" required> --}} 
                </section>
                <section class="form_group">
            
            {{--<input type="text" name="prenom" id="etud_firstname" class="form-control" placeholder="Votre Prénom" required>--}}
            {{Form::text('etud_firstname', '', ['placeholder' => 'Votre prenom', 'class' => 'form-control'])}}<br>
        </section>
                </section>
                <section class="form_group">
            
           {{--<input type="text" name="etud_number" id="diplome" class="form-control" placeholder="Votre Numero" required>--}}
            {{Form::number('etud_number', '', ['placeholder' => 'Votre Numero', 'class' => 'form-control'])}}<br>
        </section>
            <section class="form_group">
          
            {{--<input type="email" name="etud_email" id="email" class="form-control" placeholder="Votre Email" required>--}}
            {{Form::email('etud_email', '', ['placeholder' => 'Votre Email', 'class' => 'form-control'])}}<br>
        </section>
            <section class="form_group">
            
            {{--<input type="text" name="etud_diplo" id="diplome" class="form-control" placeholder="Votre Diplome" required>--}}
            {{Form::text('etud_diplo', '', ['placeholder' => 'Votre Diplome', 'class' => 'form-control'])}}<br>
        </section>
            <section class="form_group">
           
            {{--<input type="text" name="etud_sex" id="sexe" class="form-control" placeholder="Votre sexe" required>--}}
            {{Form::text('etud_sex', '', ['placeholder' => 'Votre sexe', 'class' => 'form-control'])}}<br>
        </section>
            <section class="form_group">
            
            <input type="password" name="password" id="password" class="form-control" placeholder="Votre Mot de Passe" required><br>
            {{--Form::password('password', '', ['placeholder' => 'Votre Mot de Passe', 'class' => 'form-control'])--}}
        </section>
            <section class="form_group">
            <input type="submit" name="Envoyer" value="Envoyer" class="btn btn-primary">
            {{--Form::submit('', 'submit', ['class' => 'btn btn-primary'])--}}
            </section>
        </fieldset>
    </form><br>
@endsection
