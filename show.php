<?php foreach($post as $posts): ?>
<a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $post["name"]; ?></h5>
        <small><?= $post["status_task"]; ?></small>
    </div>
    <p class="mb-1"><?= $post["task_text"]; ?></small>
</a>
<?php endforeach; ?>