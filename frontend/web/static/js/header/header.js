$(function () {
    headerNavHandle();
})

function headerNavHandle() {
    var navList = $("#header ul a ");
    var curLocation=window.location.href.split("/");
    var curPage=curLocation[curLocation.length-1];
    navList.each(function (index,item) {
        if(item.className==curPage){
            $(this).addClass("active").siblings().removeClass("active");
        }
    })

}