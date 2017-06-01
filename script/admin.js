/* Adding new TR to admin/cat and admin/images
var addCatBtn = document.getElementById('addCategory');
var addImageBtn = document.getElementById('addImage');
var catTable = document.querySelector('#categories table tbody');
var imgTable = document.querySelector('#images table tbody');
var operations = '<a href="#" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Редактировать"></a>'+
    '<a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Удалить"></a>'+
    '<a href="#" class="glyphicon glyphicon-ok" data-toggle="tooltip" title="Сохранить"></a>'+
    '<div class="tooltip top" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>';

addCatBtn.addEventListener('click', addCatTr);
addImageBtn.addEventListener('click', addImgTr);

function addCatTr() {
    var newTr = document.createElement('tr');
    newTr.innerHTML = '<th></th><th><input type="text" class="form-change" value="..."></th><th>' + operations + '</th>';
    catTable.appendChild(newTr);
}

function addImgTr () {
    var newTr = document.createElement('tr');
    newTr.innerHTML = '<th></th><th><img class="miniature"><input type="file" class="form-change"></th>'+
        '<th><input type="text" class="form-change" value="..."></th>'+
        '<th><select class="form-change"><option>Категория1</option>'+
        '<option>Категория2</option>'+
        '<option>Категория3</option>'+
        '<option>Категория4</option>'+
        '<option>Категория5</option>'+
        '</select></th>'+
        '<th>' + operations + '</th>';
    imgTable.appendChild(newTr);
}
*/

