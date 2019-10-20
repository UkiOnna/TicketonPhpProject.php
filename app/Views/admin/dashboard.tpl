{include file="admin/blocks/head.tpl"}
{*created by Yernar*}
<div class="container">
    {foreach $blocks as $block}
        <div class="card text-center">
            <div class="card-header">
                {$block.title}
            </div>
            <div class="card-body">
                <p class="card-text">{$block.text}</p>
                <a href="{$block.link}" class="btn btn-primary">Открыть</a>
            </div>
            <div class="card-footer text-muted">
            </div>
        </div>
    {/foreach}
</div>

{include file="global/footer.tpl"}