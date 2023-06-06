<?php require __DIR__ .  '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/posts" method="POST" enctype="multipart/form-data"> <!-- failide lisamiseks postitustele -->
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input id="title" class="input" type="text" placeholder="Post Title" name="title">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Content</label>
            <div class="control">
                <textarea id="title" class="textarea" placeholder="Post content" name="body"></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="image">Image</label>
            <div class="control">
                <input id="image" class="input" type="file" name="image">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button is-link">
            </div>
            <div class="control">
                <input type="reset" class="button is-link is-light">
            </div>
        </div>
    </form>
</div>

<?php require __DIR__ .  '/../partials/footer.php' ?>