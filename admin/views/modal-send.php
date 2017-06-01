<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Написать нам</h4>
            </div>
            <div class="modal-body">
                <form id="sendMessageForm" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="messageEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea type="text" name="message"  rows="5" id="messageText" class="form-control" placeholder="Текст"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="sendBtn">Отправить</button>
            </div>
        </div>
    </div>
</div>