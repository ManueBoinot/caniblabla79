{{-- AFFICHAGE DES MESSAGES --}}
<div class="col-9 mx-auto border border-warning rounded-bottom py-3 mb-4" id="message-et-commentaire">

    <div id="message">
        <div class="d-flex justify-content-center">
            <a href="/user/profil/{{ $message->user->id }}"><img class="img-thumbnail m-2"
                    style="object-fit: contain; height: 70px; width: 70px; border-radius: 50%;"
                    src="/images/{{ $message->user->image }}" alt="avatar de {{ $message->user->pseudo }}"></a>
            <p class="text-warning my-auto text-center fst-italic">Posté par <span
                    class="fs-4 fw-bold">{{ $message->user->pseudo }}</span> le
                {{ date_format($message->created_at, 'd-m-Y H:i:s') }}</p>
        </div>

        {{-- On n'affiche les boutons MODIF et SUPPR que pour l'auteur du message --}}
        @can('update', $message)
            <div id="boutons-user" class="text-center">
                <a href="{{ route('message.edit', $message) }}"><button class="btn btn-success m-2" type="submit">Modifier
                        mon
                        message</button></a>
                @can('delete', $message)
                    <!-- Button trigger modal MESSAGE -->
                    <button type="button" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Supprimer mon message
                    </button>
                @endcan
            </div>
        @endcan

        <div class="card m-2 px-5 py-3 rounded-0 text-center bg-dark text-warning border-0">

            {{-- MESSAGE IMAGE --}}
            <div class="image">
                <img src="/images/{{ $message->image }}" class="card-img-top mx-auto rounded"
                    style="object-fit:contain; max-width: 500px; max-height: 500px;" alt="image">
            </div>

            {{-- MESSAGE BODY --}}
            <div class="card-body w-100 p-2 mx-auto">

                {{-- message title --}}
                <h3 class="card-title p-2 fw-bold">#{{ implode(' #', explode(' ', $message->tags)) }}</h3>

                {{-- message text --}}
                <div class="card-text">
                    <p>{{ $message->contenu }}</p>
                </div>

                @include('commentaire.new-commentaire')

            </div>

            <!-- Modal MESSAGE -->
            <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le message
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
                            <form action="{{ route('message.destroy', $message) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-lg" type="submit">Je confirme
                                    vouloir
                                    supprimer ce message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-75 mx-auto" id="commentaires">
        @if (count($message->commentaires) > 0)

            <h5 class="mt-3 text-center text-info fw-bold text-uppercase fs-3">COMMENTAIRES</h5>

            @foreach ($message->commentaires as $commentaire)
                @include('commentaire.commentaire')
            @endforeach

        @endif
    </div>
</div>
