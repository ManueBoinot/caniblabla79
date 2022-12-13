{{-- MISE EN FORME D'UN COMMENTAIRE --}}
<div class="card w-50 mx-auto my-1 p-3 bg-danger text-white" style="width: 18rem;">

    {{-- CARD IMAGE --}}
    <img src="{{ $commentaire->image }}" class="card-img-top" alt="image">
    {{-- CARD BODY --}}
    <div class="card-body p-2 mx-auto">
        {{-- card title --}}
        <h5 class="card-title p-2 fw-bold">{{ $commentaire->tags }}</h5>
        {{-- card text --}}
        <div class="card-text">
            <p class="fst-italic">Commentaire de <span class="fw-bold">{{ $commentaire->user->pseudo }}</span><br>
                du {{ $commentaire->created_at }}</p>
            <p>{{ $commentaire->contenu }}</p>
        </div>
        {{-- On n'affiche les boutons MODIF et SUPPR que pour l'auteur du commentaire --}}
        @if (Auth::user()->id == $commentaire->user_id)
            <a href="{{ route('commentaire.edit', $commentaire) }}"><button class="btn btn-warning"
                    type="submit">Modifier</button></a>

            <!-- Button trigger modal COMMENTAIRE -->
            <button type="button" class="btn btn-dark border-white" data-bs-toggle="modal"
                data-bs-target="#modalCommentaire{{ $message->id }}">
                Supprimer
            </button>
        @endif
    </div>
</div>

<!-- Modal COMMENTAIRE-->
<div class="modal modal-lg fade" id="modalCommentaire{{ $message->id }}" tabindex="-1"
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

