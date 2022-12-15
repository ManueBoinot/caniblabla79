<!-- FORMULAIRE NOUVEAU COMMENTAIRE -->
<!-- dans un accordéon-->
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item bg-dark text-warning">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed bg-info rounded fw-bold text-white mx-auto mt-5" style="width: fit-content;"
                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $message->id }}"
                aria-expanded="false" aria-controls="flush-collapseOne">
                Écrire un commentaire...
            </button>
        </h2>

        <div id="flush-collapseOne{{ $message->id }}" class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">

                <form action="{{ route('commentaire.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input name="message_id" type="hidden" class="form-control" id="message_id"
                        value="{{ $message->id }}">

                    <label for="contenu" class="form-label fs-5">Corps du commentaire</label>
                    <textarea name="contenu" id="contenu" type="text" class="form-control"></textarea>

                    <label for="image" class="form-label fs-5 mt-3">Image (facultatif)</label>
                    <input name="image" type="file" class="form-control" id="image">

                    <label for="tags" class="form-label fs-5 mt-3">Tags (facultatif)</label>
                    <input name="tags" type="text" class="form-control" id="tags">

                    <button class="btn btn-lg btn-info mt-3" type="submit"
                        action="{{ route('home', Auth::user()) }}">Je commente !</button>
                </form>

            </div>
        </div>
    </div>
</div>
