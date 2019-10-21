{include file="admin/blocks/head.tpl"}
{*created by Yernar*}


<p class="h2">Tickets</p>
<br/>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Заголовок</th>
        <th scope="col">Описание</th>
        <th scope="col">Статус</th>
        <th scope="col">Исполнитель</th>
        <th scope="col">Заказчик</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    {foreach $tickets as $ticket}
        {print_r($ticket)}<br/>
        <tr>
    <th scope="row">{$ticket.id}</th>
    <td>{$ticket.title}</td>
    <td>{$ticket.description}</td>
    <td>{$ticket.status.name}</td>
    <td>{$ticket.employee.username}</td>
    <td>{$ticket.customer.username}</td>
    <td>
        <a  class="btn btn-warning btn-sm " href="/admin/dashboard/tickets/update/{$ticket.id}" >Редактировать</a>
        <a  class="btn btn-danger btn-sm " href='/admin/dashboard/tickets/delete/{$ticket.id}' >Удалить</a>
    </td>
        </tr>
    {/foreach}

    </tbody>
</table>

{include file="global/footer.tpl"}
