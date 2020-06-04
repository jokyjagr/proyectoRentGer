<?= $this->flashSession->output() ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $model_name ?> - [<?= $model_path ?>]</h3>
            </div>
            <div class="card-body">
                <form role="form" name="edit-model" method="post" action="<?= $this->url->get($webtools_uri . '/models/update') ?>">
                    <div class="form-group">
                        <?= $this->tag->textArea(['code', 'cols' => 50, 'rows' => 25, 'class' => 'form-control']) ?>
                        <?= $this->tag->hiddenField(['path']) ?>
                    </div>

                    <hr/>
                    <?= $this->tag->submitButton(['Save', 'class' => 'btn btn-success pull-right']) ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->assets->outputJs('codemirror') ?>
