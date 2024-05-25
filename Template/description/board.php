<style>
    .description-above-board form textarea, .description-above-board form .text-editor-view-mode, .description-above-board form .text-editor-preview-area {
        width: 100% !important;
    }
    #description-above-board-submit {
        margin: 20px;
    }
</style>

<div class="description-above-board">
    <form id="description-form" method="post" action="<?= $this->url->href('ProjectDescriptionController', 'update', ['plugin' => 'DescriptionAboveBoard', 'project_id' => $project['id']]) ?>">
        <?php
            $controller = isset($_GET['controller']) ? $_GET['controller'] : '';
            if ($controller === 'BoardViewController' && !empty($project['description'])) {
                echo $this->helper->form->textEditor(
                    'descripcion',
                    ['descripcion' => $project['description'], 'project_id' => $project['id']],
                    [],
                    ['autofocus' => false, 'required' => false]
                );
                echo '<button id="description-above-board-submit" type="submit" class="btn btn-blue">' . t('Save') . '</button>';
            }
        ?>
    </form>
</div>
