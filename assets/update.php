<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="number" class="form-control" name="edit_reader_id" value="<?=$value['reader_id'] ?>" placeholder="Номер читателя">
        	</div>
        	<div class="form-group">
        		<input type="number" class="form-control" name="edit_book_id" value="<?=$value['book_id'] ?>" placeholder="Номер книги">
        	</div>
          <div class="form-group">
        		<input type="datetime" class="form-control" name="edit_returned_at" placeholder="Дата возврата">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>