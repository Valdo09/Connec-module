<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom(s)') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="birth_date" value="{{ old('name') }}" required autocomplete="name" autofocus>

            
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="telephone" class="form-control " name="telephone" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse_email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         <div class="row mb-3">
                            <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('CV') }}</label>

                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control @error('name') is-invalid @enderror" name="cv" required autocomplete="name" autofocus>

                               
                            </div>
                        </div> 

                        
                         <div class="row mb-3">
                            <label for="school" class="col-md-4 col-form-label text-md-right ">{{ __('Ecole de formation') }}</label>

                            <div class="col-md-6 ">
                               <select name="school" id="school">

                                    <option value="ifri" selected>IFRI</option>
                                    <option value="epac">EPAC</option>
                                    <option value="fast">FAST</option>
                                    <option value="fsa">FSA</option>

                               </select>
                              
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="field" class="col-md-4 col-form-label text-md-right">{{ __('Filière de formation') }}</label>

                            <div class="col-md-6 ">
                                <input id="stpv" type="radio" class="form-control" name="field" value='sptv' required autocomplete="name" autofocus>
                                <label for="sptv">SPTV</label>

                                <input id="stpa" type="radio" class="form-control" name="field" value='stpa' required autocomplete="name" autofocus>
                                <label for="spta">STPA</label>

                                <input id="agrn" type="radio" class="form-control" name="field" value='agrn' required autocomplete="name" autofocus>
                                <label for="agrn">AGRN</label>

                                <input id="nsta" type="radio" class="form-control" name="field" value='nsta' required autocomplete="name" autofocus>
                                <label for="nsta">NSTA</label>

                                <input id="grpa" type="radio" class="form-control" name="field" value='grpa' required autocomplete="name" autofocus>
                                <label for="grpa">GRPA</label>

                                <input id="erse" type="radio" class="form-control" name="field" value='erse' required autocomplete="name" autofocus>
                                <label for="erse">ERSE</label>

                                <input id="gta" type="radio" class="form-control" name="field" value='gta' required autocomplete="name" autofocus>
                                <label for="gta">GTA</label>

                                <input id="psa" type="radio" class="form-control" name="field" value='psa' required autocomplete="name" autofocus>
                                <label for="psa">PSA</label>

                                <input id="ge" type="radio" class="form-control" name="field" value='ge' required autocomplete="name" autofocus>
                                <label for="ge">GE</label>

                                <input id="gl" type="radio" class="form-control" name="field" value='gl' required autocomplete="name" autofocus>
                                <label for="gl">GL</label>

                                <input id="si" type="radio" class="form-control" name="field" value='si' required autocomplete="name" autofocus>
                                <label for="si">SI</label>

                                <input id="im" type="radio" class="form-control" name="field" value='im' required autocomplete="name" autofocus>
                                <label for="im">IM</label>

                                

                              
                                  
                            </div>
                        </div>
                        
                         <div class="row mb-3">
                            <label for="prof-field" class="col-md-4 col-form-label text-md-right">{{ __('Secteur professionnel d\'intérêt ') }}</label>

                            <div class="col-md-6">
                                <input id="nutrition" type="radio" class="form-control " name="prof-field" value="nutrition" required autocomplete="name" autofocus>
                                <label for="nutrition"> Nutrition (technologie alimentaire, diététique, restauration)</label>

                                <input id="agriculture" type="radio" class="form-control " name="prof-field" value="agriculture" required autocomplete="name" autofocus>
                                <label for="agriculture"> Agriculture (production animale, santé animale, production végétale)</label>

                                <input id="numeric" type="radio" class="form-control " name="prof-field" value="numeric" required autocomplete="name" autofocus>
                                <label for="numeric"> Numérique (développement, réseaux, multimédia)</label>

                                <input id="nature" type="radio" class="form-control " name="prof-field" value="nature" required autocomplete="name" autofocus>
                                <label for="nature"> Ressources naturelles (eau, forêt, aménagement)</label>

                                <input id="infrastrcture" type="radio" class="form-control " name="prof-field" value="infrastrcture" required autocomplete="name" autofocus>
                                <label for="infrastrcture"> Infrastructures (construction, énergies, environnement)</label>

                               
                            </div>
                        </div>
                        
                         <div class="row mb-3">
                            <label for="status-entreprenariat" class="col-md-4 col-form-label text-md-right">{{ __('Intéressé par l\'entrepreneriat?') }}</label>

                            <div class="col-md-6">
                                <input id="yes" type="radio" class="form-control" name="status-entreprenariat"  value="yes" required autocomplete="name" autofocus>
                                <label for="yes">Oui</label>

                              <input id="no" type="radio" class="form-control" name="status-entreprenariat" value="no" required autocomplete="name" autofocus>
                                <label for="no">Non</label>

                              
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="commitment-level" class="col-md-4 col-form-label text-md-right">{{ __('Si oui, niveau d\'engagement dans un projet d\'entreprise') }}</label>

                            <div class="col-md-6">
                                <input id="idea" type="radio" class="form-control" value="idea" name="commitment-level"  required autocomplete="name" autofocus>
                                <label for="idea">Phase d'idée</label>

                              <input id="econ-model" type="radio" class="form-control" value="econ-model"name="commitment-level"  required autocomplete="name" autofocus>
                              <label for="econ-model">Modèle économique</label>

                               <input id="prototype" type="radio" class="form-control" name="commitment-level"  required autocomplete="name" autofocus>
                              <label for="prototype">Prototype</label>

                               <input id="business-plan" type="radio" class="form-control" value=" business-plan" name="commitment-level" required autocomplete="name" autofocus>
                              <label for="business-plan">Rédaction du plan d'affaire</label>

                               <input id="already" type="radio" class="form-control" value=" already"name="commitment-level" required autocomplete="name" autofocus>
                              <label for="already">Existence sur le marché(fait déjà des ventes)</label>

                               <input id="n-a" type="radio" class="form-control" name="commitment-level" value="n-a" required autocomplete="name" autofocus>
                              <label for="n-a">Pas applicable</label>

                              
                            </div>
                        </div>
                        
                        
                        

                       

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
