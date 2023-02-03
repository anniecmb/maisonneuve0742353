@extends('layouts.layout')
@section('title', 'Détails de l\'étudiant')
@section('content')

        <!-- Détails -->
        <section class="page-section">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">{{ $etudiant->nom }}</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5 mb-5">
                            <div class="mb-2"><i class="bi-house-door fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Adresse (Ville)</h3>
                            <p class="text-muted mb-0">{{ $etudiant->adresse }} ({{ $etudiantVille }})</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-telephone fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Téléphone</h3>
                            <p class="text-muted mb-0">{{ $etudiant->telephone }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-envelope fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Courriel</h3>
                            <p class="text-muted mb-0">{{ $etudiant->courriel }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-calendar fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Date de naissance</h3>
                            <p class="text-muted mb-0">{{ $etudiant->naissance }}</p>
                        </div>
                    </div>
                    <hr class="divider" />
                    <div class="text-center mt-3">
                        <a class="btn btn-primary btn-xl" href="{{ route('edit', $etudiant->id) }}">Modifier l'étudiant</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer l'étudiant</button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un étudiant</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous certain de vouloir supprimer cet étudiant?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('edit', $etudiant->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="button" class="btn btn-primary btn-xl" data-bs-dismiss="modal" value="Annuler">
                                <input type="submit" class="btn btn-primary btn-xl" value="Supprimer">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

@endsection