<?php require __DIR__ .  '/../partials/header.php' ?>
<div class="container">
    <a class="button is-primary" href="/admin/posts/create">New Post</a>
    <table class="table is-striped is-fullwidth">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->title ?></td>
                    <td>
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-link">View</a>
                            </p>
                            <p class="control">
                                <a class="button is-warning">Edit</a>
                            </p>
                            <p class="control">
                                <a class="button is-danger">Delete</a>
                            </p>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>
        </tfoot>
    </table>
</div>

<?php require __DIR__ .  '/../partials/footer.php' ?>