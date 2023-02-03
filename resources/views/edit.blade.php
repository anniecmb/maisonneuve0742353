@extends('layouts.layout')
@section('title', 'Modification de l\'étudiant')
@section('content')

        <!-- Formulaire de modification -->
        <section class="page-section">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Modification du profil de l'étudiant:</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">{{ $etudiant->nom }}</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" method="POST">
                            @csrf
                            @method('put')
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nom" name="nom" type="text" placeholder="Entrez votre nom..." data-sb-validations="required" value="{{ $etudiant->nom }}"/>
                                <label for="nom">Nom</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Vous devez entrer votre nom.</div>
                            </div>
                            <!-- Adress input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="adresse" name="adresse" type="text" placeholder="Entrez votre adresse..." data-sb-validations="required" value="{{ $etudiant->adresse }}"/>
                                <label for="adresse">Adresse</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Vous devez entrer votre adresse.</div>
                            </div>
                            <!-- Ville input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="ville_id" id="ville">
                                    @forelse($villes as $ville)
                                    <option value="{{ $ville->id }}" {{ ($etudiant->ville_id == $ville->id) ? 'selected' : '' }}> {{ $ville->nom }} </option>
                                    @empty
                                    <option value="">Aucune ville</option>
                                    @endforelse
                                </select>
                                <label for="ville">Ville</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Vous devez entrer votre adresse.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="telephone" name="telephone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" value="{{ $etudiant->telephone }}"/>
                                <label for="telephone">Téléphone</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Vous devez entrer votre numéro de téléphone.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="courriel" name="courriel" type="email" placeholder="nom@exemple.com" data-sb-validations="required,email" value="{{ $etudiant->courriel }}"/>
                                <label for="courriel">Courriel</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Vous devez entrer votre courriel.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Courriel non valide.</div>
                            </div>
                            <!-- Birthday input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="naissance" name="naissance" type="date" placeholder="nom@exemple.com" data-sb-validations="required" value="{{ $etudiant->naissance }}"/>
                                <label for="naissance">Date de naissance</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Vous devez entrer votre date de naissance.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Modification réussie!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is an error submitting the form -->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Une erreur s'est produite!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Modifier</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection