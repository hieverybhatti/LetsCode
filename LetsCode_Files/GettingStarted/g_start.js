var top_img = "starting_out";
var img_src = new Array ("starting_out", "videos", "documentation", "practice", "projects");                 
var index = 0

function get_img (current_index) {

    if (current_index == img_src.length-1) {
        index = 0
        console.log("index is now: ",index)
        return img_src[index]
        } 

    index += 1
    console.log("index is now: ",index)
    return img_src[index];
}

function changeImg() {
    console.log("Commencing changeImg()")
    var new_img = get_img(index);
    console.log("top_img is: ",top_img) 
    console.log("new_img is: ",new_img) 

    styleTop = document.getElementById(top_img).style;
    styleNew = document.getElementById(new_img).style;

   
    styleTop.zIndex = "0";
    styleNew.zIndex = "10";
    top_img = new_img;
    console.log("top_img is now ",top_img)

}

function startTimer() {
    console.log("starting timer")
    timer = setInterval(function(){ changeImg(); }, 3000);
}


function stopTimer(){ 
    console.log("stopping timer")
    clearInterval(timer);
}


