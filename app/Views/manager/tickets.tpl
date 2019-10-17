{foreach $tickets as $ticket}

    <div class="card mb-3">

        <div class="card-header">
            {$ticket.title}
        </div>
        <div class="card-body">
            {$ticket.description}
        </div>

    </div>

{/foreach}