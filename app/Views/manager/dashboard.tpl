{include file="manager/blocks/head.tpl"}

<div class="container">

    {foreach $tickets as $ticket}

        <div class="card card-body md-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                <span class="badge badge-secondary">
                    {$ticket.category.name}
                </span>
                    <strong>{$ticket.title}</strong>
                </div>

                <small class="text-muted">
                    <a href="/manager/users/{$ticket.author.id}">{$ticket.author.name}</a>, {$ticket.date}
                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <a href="/tickets/{$ticket.id}" class="btn btn-primary" target="_blank">
                    Просмотреть
                </a>
                <a href="/admin/tickets/update/{$ticket.id}" class="btn btn-secondary">
                    Изменить
                </a>
                <a href="/admin/tickets/delete/{$ticket.id}" class="btn btn-danger">
                    Удалить
                </a>

            </div>

        </div>

    {/foreach}
</div>

{include file="global/footer.tpl"}