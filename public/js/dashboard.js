$().ready(function() {
    $sidebar = $('.sidebar');
    $sidebar_img_container = $sidebar.find('.sidebar-background');
    
    jQuery("body").addClass("sidebar-mini");
});

function addSelect(array) {
	id = array["id"];
	nome = array["nome"];
	imagem = array["imagem"];
	i = array["i"]; 
	selectID = array["selectID"];
	listID = array["listID"];

	if (imagem) {
		imagem = '<img src="'+imagem+'">';
	}
	else {
		imagem = "";
	}	

    option = '<option class="bs-title-option" value="'+id+'">'+nome+'</option>';

    li = '<li data-original-index="'+(i+1)+'"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text select-item">'+imagem+nome+'</span></a></li>';

    $(selectID).append(option);
    $(listID).append(li);
}