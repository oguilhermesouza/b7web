<?php 
echo '<pre>';
print_r($_FILES);

$validate = ['image/jpg', 'image/jpeg', 'image/png'];
if(in_array($_FILES['arquivo']['type'], $validate)) {
	$nome = md5(time().rand(0,100)).'.jpg';
	move_uploaded_file($_FILES['arquivo']['tmp_name'], 'upload/'.$nome);

	echo 'Upload feito com sucesso. ';
}else {
	echo "Formato de arquivo não suportado.";
}