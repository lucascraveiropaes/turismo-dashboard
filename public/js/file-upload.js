window.onload = function() {
	$('#upload-trigger').click(function() {
		$('#files').trigger('click');
	});
	
    //Check File API support
    if (window.File && window.FileList && window.FileReader) {
        $('#files').change( function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("file-preview");
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if (file.type.match('image.*')) {
                    if (this.files[0].size < 2097152) {
                        // continue;
                        var picReader = new FileReader();
                        picReader.addEventListener("load", function(event) {
                            var picFile = event.target;
                            var div = document.createElement("div");
                            div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "' " +"title='Preview Image'>";
                            output.insertBefore(div, null);
                        });
                        //Read the image
                        $('#clear, #file-preview').show();
                        picReader.readAsDataURL(file);
                    } else {
                        alert("Image Size is too big.Minimum size is 2 MB.");
                        $(this).val("");
                    }
                } else {
                    alert("You can only upload image file.");
                    $(this).val("");
                }
            }

        });
    } else {
        console.log("Your browser does not support File API");
    }
}

$('#files').click( function() {
    $('.thumbnail').parent().remove();
    $('#file-preview').hide();
    $(this).val("");
});

$('#clear').click( function() {
    $('.thumbnail').parent().remove();
    $('#file-preview').hide();
    $('#files').val("");
    $(this).hide();
});