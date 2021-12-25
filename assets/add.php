<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить запись</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	        	<div class="form-group">
	        		<input type="number" class="form-control" name="reader_id" value="" placeholder="Номер читателя">
	        	</div>
	        	<div class="form-group">
	        		<input type="number" class="form-control" name="book_id" value="" placeholder="Номер книги">
	        	</div>
	        	<div class="form-group">
	        		<input type="datetime" class="form-control" name="taking_at" value="" placeholder="Взята">
	        	</div>
	      </div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        	<button type="submit" name="submit" class="btn btn-primary">Добавить</button>
	      	</div>
	  		</form>
	    </div>
	  </div>
	</div>