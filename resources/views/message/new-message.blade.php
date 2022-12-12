    <section class="bg-info container mx-auto my-4 text-center text-white rounded w-75 border">
        <!-- NOUVEAU MESSAGE-->
        <div class="row gap-5 p-3 mx-auto my-3">

            <div class="row">
                <h2 class="text-center text-uppercase">Publier un nouveau message</h2>
            </div>

            <div class="row mx-auto">
                <form action="{{ route('message.store') }}" method="POST">
                    @csrf

                    <label for="contenu" class="form-label fs-5">Corps du message</label>
                    <textarea name="contenu" id="message" type="text" class="form-control"></textarea>

                    <label for="image" class="form-label fs-5 mt-3">Image (facultatif)</label>
                    <input name="image" type="file" class="form-control" id="image">

                    <label for="tags" class="form-label fs-5 mt-3">Tags (facultatif)</label>
                    <input name="tags" type="text" class="form-control" id="tags">

                    <button class="btn btn-lg btn-warning mt-3" type="submit"
                        action="{{ route('home', Auth::user()) }}">Je publie !</button>

                </form>
            </div>
        </div>

    </section>
