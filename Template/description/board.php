<style>
    #descripcion-above-board {
        width: 100%;
    }
</style>

<div class="description-above-board">
    <form id="description-form" method="post" action="<?= $this->url->href('ProjectDescriptionController', 'update', ['plugin' => 'DescriptionAboveBoard', 'project_id' => $project['id']]) ?>">
        <textarea name="descripcion" id="descripcion-above-board"><?= $project['description']?></textarea>
        <br/>
        <br/>
        <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
        <br/>
        <br/>
    </form>
</div>