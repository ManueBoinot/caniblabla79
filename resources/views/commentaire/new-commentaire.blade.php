<!-- FORMULAIRE NOUVEAU COMMENTAIRE -->
<!-- dans un accordéon-->
<div class="accordion accordion-flush m-2" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header bg-warning" id="flush-headingOne">
            <button class="accordion-button collapsed bg-info text-white fw-bold mx-auto" style="width: fit-content;" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Écrire un commentaire...
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body bg-info">

                <form action="{{ route('commentaire.store') }}" method="POST">
                    @csrf

                    <input name="message_id" type="hidden" class="form-control" id="message_id"
                        value="{{ $message->id }}">

                    <label for="contenu" class="form-label fs-5">Corps du commentaire</label>
                    <textarea name="contenu" id="contenu" type="text" class="form-control"></textarea>

                    <label for="image" class="form-label fs-5 mt-3">Image (facultatif)</label>
                    <input name="image" type="file" class="form-control" id="image">

                    <label for="tags" class="form-label fs-5 mt-3">Tags (facultatif)</label>
                    <input name="tags" type="text" class="form-control" id="tags">

                    <button class="btn btn-lg btn-warning mt-3" type="submit"
                        action="{{ route('home', Auth::user()) }}">Je commente !</button>
                </form>

            </div>
        </div>
    </div>
</div>
