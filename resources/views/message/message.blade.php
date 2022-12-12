<section class="text-center mx-auto p-5">
    {{-- AFFICHAGE DES MESSAGES --}}
    <div class="card w-50 mx-auto p-3" style="width: 18rem;">

        {{-- MESSAGE IMAGE --}}
        <img src="{{ $message->image }}" class="card-img-top" alt="image">

        {{-- MESSAGE BODY --}}
        <div class="card-body p-2 mx-auto">

            {{-- message title --}}
            <h5 class="card-title p-2 fw-bold">{{ $message->tags }}</h5>

            {{-- message text --}}
            <div class="card-text">
                <p class="fst-italic">Posté par <span class="fw-bold">{{ $message->user->pseudo }}</span> le
                    {{ $message->created_at }}</p>
                <p>{{ $message->contenu }}</p>
            </div>
            <a href="{{ route('commentaire.create', Auth::user($message->id)) }}"
                class="btn btn-warning btn-lg m-3">Commenter</a>

            {{-- On n'affiche les boutons MODIF et SUPPR que pour l'auteur du message --}}
            @if (Auth::user()->id == $message->user_id)
                <a href="{{ route('message.edit', $message) }}"><button class="btn btn-secondary"
                        type="submit">Modifier</button></a>

                <!-- Button trigger modal MESSAGE -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Supprimer
                </button>
            @endif
        </div>

        <!-- Modal MESSAGE -->
        <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le message
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fs-3 text-danger">Êtes-vous sûr(e) de vouloir supprimer votre
                            message
                            ?<br>
                            Cette action est irréversible.</p>
                    </div>
                    <div class="modal-footer mx-auto">
                        <form action="{{ route('message.destroy', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-lg" type="submit">Je confirme
                                vouloir
                                supprimer ce message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @foreach ($message->commentaires as $commentaire)
            <div class="card w-50 mx-auto p-3" style="width: 18rem;">

                {{-- CARD IMAGE --}}
                <img src="{{ $commentaire->image }}" class="card-img-top" alt="image">

                {{-- CARD BODY --}}
                <div class="card-body p-2 mx-auto">

                    {{-- card title --}}
                    <h5 class="card-title p-2 fw-bold">{{ $commentaire->tags }}</h5>

                    {{-- card text --}}
                    <div class="card-text">
                        <p class="fst-italic">Posté par <span class="fw-bold">{{ $commentaire->user->pseudo }}</span>
                            le
                            {{ $commentaire->created_at }}</p>
                        <p>{{ $commentaire->contenu }}</p>
                    </div>

                    {{-- On n'affiche les boutons MODIF et SUPPR que pour l'auteur du commentaire --}}
                    @if (Auth::user()->id == $commentaire->user_id)
                        <a href="{{ route('commentaire.edit', $commentaire) }}"><button class="btn btn-secondary"
                                type="submit">Modifier</button></a>

                        <!-- Button trigger modal COMMENTAIRE -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modalCommentaire">
                            Supprimer
                        </button>
                    @endif
                </div>
            </div>

            <!-- Modal COMMENTAIRE-->
            <div class="modal modal-lg fade" id="modalCommentaire" tabindex="-1"
                aria-labelledby="modalCommentaireLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCommentaireLabel">Supprimer le message
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fs-3 text-danger">Êtes-vous sûr(e) de vouloir supprimer votre
                                message
                                ?<br>
                                Cette action est irréversible.</p>
                        </div>
                        <div class="modal-footer mx-auto">
                            <form action="{{ route('commentaire.destroy', $commentaire->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-lg" type="submit">Je confirme
                                    vouloir
                                    supprimer ce message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


</section>
