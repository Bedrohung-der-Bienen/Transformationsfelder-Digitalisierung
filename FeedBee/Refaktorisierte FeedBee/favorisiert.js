var favorisiert = false;
$("#markieren").click(function(){
    if(favorisiert == false){
        $("#markieren").html('bookmark');
        favorisiert = true;
        $("#weiterleiten").attr("href","insertMerkliste.php? id=<?php echo($id);?>");
        exit();
    }
    if(favorisiert == true){
        $("#markieren").html('bookmark_border');
        favorisiert = false;
    }
});
				   
    

		
