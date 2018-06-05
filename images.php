var index = 0;

var jq = document.createElement('jq');
jq.src="https://code.jquery.com/jquery-1.10.2.min.js";
jq.type='text/javascript';
document.getElementsByTagName('head')[0].appendChild(jq);

<?php

    echo "var directories = new Map();";
    chdir("assets/images");
    $dirs = array_filter(glob('*'), 'is_dir');
    echo "var arr; \n";
    foreach($dirs as $dir){
        echo "arr = new Array(); \n";
        $files = scandir($dir);
        foreach($files as $file){
            if($file == "." || $file == ".."){
                continue;
            }
            echo "arr.push(\"" . $file . "\"); \n";
        }
        echo "directories.set(\"" . $dir ."\", arr); \n";
    }
?>

function refreshImage(folder, noIndexReset){
	if(!noIndexReset)
		index = 0;
	console.log(index);
    document.getElementById("next").setAttribute("onclick","next(\"" + folder +"\")");
    document.getElementById("prev").setAttribute("onclick","prev(\"" + folder +"\")");
    document.getElementById("picture").src = 
        "assets/images/" + folder + "/" + directories.get(folder)[index]; 
    $('.ui.modal').modal('show');
    


}

function next(folder){
	index++;
	if(index >= directories.get(folder).length)
		index = 0;
	refreshImage(folder, true);
}
function prev(folder){
	index--;
	if(index < 0)
		index = directories.get(folder).length-1;
	refreshImage(folder, true);
}
