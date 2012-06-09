function Cuadro(w,h) {
    var cuadro=this;
    $(this.el).mousedown(function(evn){
        cuadro.drag=true;
        cuadro.dragOffsetX=evn.offsetX;
        cuadro.dragOffsetY=evn.offsetY;
    });
    $(this.el).mouseup(function(){
        cuadro.drag=false;
    });
    $(this.el).mousemove(function(evn){
        cuadro.mmove(evn);
    });
    $(this.el).css("position","absolute");
    $(this.el).css("left","20px");
    $(this.el).css("top","20px");
    $(this.el).css("width",w+"px");
    $(this.el).css("height",h+"px");
    $(this.el).css("border","3px coral solid");
}

Cuadro.prototype.el=$("<div></div>");
Cuadro.prototype.drag=false;
Cuadro.prototype.mmove = function(evn) {
    if(this.drag) {
        $(this.el).css("left",(evn.pageX-this.dragOffsetX)+"px");
        $(this.el).css("top",(evn.pageY-this.dragOffsetY)+"px");
    }
}
