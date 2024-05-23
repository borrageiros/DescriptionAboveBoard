<?php

namespace Kanboard\Plugin\DescriptionAboveBoard\Controller;

use Kanboard\Controller\BaseController;

class ProjectDescriptionController extends BaseController
{
    public function update()
    {

        $project_id = $this->request->getIntegerParam('project_id');
        $description = $_POST['descripcion'];

        $result = $this->projectModel->update([
            'id' => $project_id,
            'description' => "$description",
        ]);

        if ($result) {
            $message = t('Project description updated successfully.');
            $this->flash->success($message);
        } else {
            $message = t('Unable to update project description.');
            $this->flash->failure($message);
        }

        $this->response->redirect($this->helper->url->to('BoardViewController', 'show', ['project_id' => $project_id]));
    }
}
