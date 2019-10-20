{include file="admin/blocks/head.tpl"}
{*created by Yernar*}
<div class="container">
    <div class="row">
    {foreach $blocks as $block}
<div class="col-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{$block.title}</h5>
                <p class="card-text">{$block.text}</p>
                <a href="{$block.link}" class="btn btn-info">Открыть</a>
            </div>
        </div>
</div>
    {/foreach}
    </div>
</div>

{include file="global/footer.tpl"}