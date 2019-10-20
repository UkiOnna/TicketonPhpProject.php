{include file="global/head.tpl"}

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-3 offset-lg-4 text-center">

            {foreach $flashes as $flash}
                <div class="alert alert-{$flash.type} mb-3">
                    {$flash.message}
                </div>
            {/foreach}

            <h3 class="mb-3">{$title}</h3>

            <form method="post" action="/login">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group m-0">
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>

{include file="global/footer.tpl"}