{include file="manager/blocks/head.tpl"}

<div class="container">

    {foreach $customer_tickets as $ticket}

        <div class="card card-body md-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                    <span class="badge badge-secondary">
                        {$ticket.status.name}
                    </span>

                    <div class="card-header">
                        {$ticket.title}
                    </div>
                    <div class="card-body">
                        {$ticket.description}
                    </div>

                </div>

                <small class="text-muted">
                    <a href="/manager/users/{$ticket.customer.id}">{$ticket.customer.name}</a>
                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <form action="/manager/tickets/appoint_order/re">
                    <select name="employee_id" class="form-control">
                        {foreach $eployees as $employee}
                            <option value="{$employee.id}">{$employee.name}</option>
                        {/foreach}
                    </select>
                    <input name="id" value="{$ticket.id}" type="text" hidden/>
                    <button type="submit" class="btn btn-primary">Назначить</button>
                </form>

{*                <a href="/manager/tickets/appoint_order/{$ticket.id}/{$ticket.employee_id}" class="btn btn-primary">*}
{*                    Назначить*}
{*                </a>*}

                <a href="/manager/tickets/cancel_order/{$ticket.id}" class="btn btn-danger">
                    Отклонить
                </a>

            </div>

        </div>

    {foreachelse}

        <div class="m-5 alert alert-secondary">
            Tickets not found
        </div>

    {/foreach}
    {foreach $employee_tickets as $ticket}

        <div class="card card-body md-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                    <span class="badge badge-secondary">
                        {$ticket.status.name}
                    </span>

                    <div class="card-header">
                        {$ticket.title}
                    </div>
                    <div class="card-body">
                        {$ticket.description}
                    </div>

                </div>

                <small class="text-muted">
                    <a href="/manager/users/{$ticket.customer.id}">{$ticket.customer.name}</a>
                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <a href="/manager/tickets/complete/{$ticket.id}" class="btn btn-primary">
                    Завершить
                </a>

                <a href="/manager/tickets/cancel_work/{$ticket.id}" class="btn btn-danger">
                    Отклонить
                </a>

            </div>

        </div>

    {/foreach}
</div>

{include file="global/footer.tpl"}