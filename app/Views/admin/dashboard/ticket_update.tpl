{include file="admin/blocks/head.tpl"}
{*created by Yernar*}


<form action="/admin/dashboard/tickets/update" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" style="visibility:hidden; width:0px"
        name="id" value="{$ticket.id}">
      <label >Title</label>
      <input type="text" class="form-control" placeholder="Name"
      name="title" value="{$ticket.title}">
    </div>
    <div class="form-group shadow-textarea">
  <label for="exampleFormControlTextarea6">Description</label>
  <textarea class="form-control z-depth-1" name="description"
  id="exampleFormControlTextarea6" rows="3" placeholder="Write something here...">
  {$ticket.description}
</textarea>
</div>
  </div>

  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>


{include file="global/footer.tpl"}
