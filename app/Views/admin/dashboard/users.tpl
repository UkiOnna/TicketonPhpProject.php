{include file="admin/blocks/head.tpl"}
{*created by Yernar*}

<p class="h2">{$users[0].role.name}</p>
<br/>

<a style="width: 150px; "
   class="btn btn-primary btn-sm" href="/admin/dashboard/users/create" role="button">Добавить +</a>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
    </tr>
    </thead>
    <tbody>
    {foreach $users as $user}
        <tr>
    <th scope="row">{$user.id}</th>
    <td>{$user.username}</td>
    <td>
        <a  class="btn btn-warning btn-sm " href="/admin/dashboard/users/update/{$user.id}" >Редактировать</a>
        <a  class="btn btn-danger btn-sm " href='/admin/dashboard/users/delete/{$user.id}' >Удалить</a>
    </td>
        </tr>
    {/foreach}

    </tbody>
</table>

{include file="global/footer.tpl"}