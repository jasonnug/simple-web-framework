{if isset($app['_error']) and $app['_error'] != ""}
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {$app['_error']}
    </div>
{/if}
{if isset($app['_warning']) and $app['_warning'] != ""}
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {$app['_warning']}
    </div>
{/if}
{if isset($app['_success']) and $app['_success'] != ""}
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {$app['_success']}
    </div>
{/if}