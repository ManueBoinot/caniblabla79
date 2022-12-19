{{-- MISE EN FORME D'UN COMMENTAIRE --}}

<div class="card w-100 mx-auto p-3 mb-2 bg-dark border border-info rounded-0 rounded-bottom text-info text-center">

    <div class="d-flex justify-content-center">
        <a href="/user/profil/{{ $commentaire->user->id }}"><img class="img-thumbnail me-2 my-auto"
                style="object-fit: contain; height: 50px; width: 50px; border-radius: 50%;"
                src="/images/{{ $commentaire->user->image }}" alt="avatar de {{ $commentaire->user->pseudo }}"></a>
        <p class="fst-italic my-auto">Commentaire de <span class="fw-bold">{{ $commentaire->user->pseudo }}</span>
            du {{ $commentaire->created_at }}</p>
    </div>
    {{-- CARD IMAGE --}}
    <div class="image">
        <img src="/images/{{ $commentaire->image }}" class="card-img-top mx-auto"
            style="object-fit:contain; max-width: 300px; max-height: 300px;" alt="image">
    </div>

    {{-- CARD BODY --}}
    <div class="card-body text-center w-100 mx-auto">


        {{-- card title --}}
        <h5 class="card-title fw-bold">#{{ implode(' #', explode(' ', $commentaire->tags)) }}</h5>
        {{-- card text --}}
        <div class="card-text mx-auto">
            <p>{{ $commentaire->contenu }}</p>
        </div>
        {{-- On n'affiche les boutons MODIF et SUPPR que pour l'auteur du message --}}
        @can('update', $commentaire)
            <div id="boutons-user" class="text-center">
                <a href="{{ route('commentaire.edit', $commentaire) }}"><button class="btn btn-success m-2"
                        type="submit">Modifier
                        mon
                        commentaire</button></a>
                @can('delete', $commentaire)
                    <!-- Button trigger modal MESSAGE -->
                    <button type="button" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#modalCommentaire{{ $commentaire->id }}">
                        Supprimer mon commentaire
                    </button>
                @endcan
            </div>
        @endcan
    </div>
</div>

<!-- Modal COMMENTAIRE-->
<div class="modal modal-lg fade" id="modalCommentaire{{ $commentaire->id }}" tabindex="-1"
    aria-labelledby="modalCommentaireLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalCommentaireLabel">Supprimer le commentaire
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-3 text-danger">Êtes-vous sûr(e) de vouloir supprimer votre
                    commentaire
                    ?<br>
                    Cette action est irréversible.</p>
            </div>
            <div class="modal-footer mx-auto">
                <form action="{{ route('commentaire.destroy', $commentaire) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-lg" type="submit">Je confirme
                        vouloir
                        supprimer ce commentaire</button>
                </form>
            </div>
        </div>
    </div>
</div>
