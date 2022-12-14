{{-- AFFICHAGE DES MESSAGES --}}
<div class="col-9 mx-auto border border-dark rounded m-5 p-1 bg-white" id="message-et-commentaire">

    <div class="d-flex justify-content-center">
        <img class="img-thumbnail mx-2" style="object-fit: contain; height: 70px; width: 70px; border-radius: 50%;"
            src="/images/{{ $message->user->image }}" alt="avatar de {{ $message->user->pseudo }}">
        <p class="text-dark mt-3 text-center fst-italic">Posté par <span
                class="fs-4 fw-bold">{{ $message->user->pseudo }}</span> le
            {{ $message->created_at }}</p>
    </div>

    <div class="card m-2 px-5 py-3 bg-warning rounded-0 text-center">

        {{-- MESSAGE IMAGE --}}
        <img src="/images/{{ $message->image }}" class="card-img-top mx-auto"
            style="object-fit:contain; max-width: 500px; max-height: 500px;" alt="image">

        {{-- MESSAGE BODY --}}
        <div class="card-body w-100 p-2 mx-auto">

            {{-- message title --}}
            <h3 class="card-title p-2 fw-bold">{{ $message->tags }}</h3>

            {{-- message text --}}
            <div class="card-text">
                <p>{{ $message->contenu }}</p>
            </div>

            @include('commentaire.new-commentaire')

            {{-- On n'affiche les boutons MODIF et SUPPR que pour l'auteur du message --}}
            @if (Auth::user()->id == $message->user_id)
                <a href="{{ route('message.edit', $message) }}"><button class="btn btn-secondary m-2"
                        type="submit">Modifier mon message</button></a>

                <!-- Button trigger modal MESSAGE -->
                <button type="button" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Supprimer mon message
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
                        <form action="{{ route('message.destroy', $message) }}" method="POST">
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
    </div>

    @if (count($message->commentaires) > 0)

        <h5 class="mt-3 text-center text-danger fw-bold text-uppercase fs-3">COMMENTAIRES</h5>

        @foreach ($message->commentaires as $commentaire)
            @include('commentaire.commentaire')
        @endforeach

    @endif

</div>
