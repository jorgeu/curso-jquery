function SuperTabs() {
}
SuperTabs.prototype.elId='';
SuperTabs.prototype.currentTab=0;
SuperTabs.prototype.tabs=new Array();
SuperTabs.prototype.init = function(id) {
    this.elId=id;
    id="#"+id;
    this.tabs=$(id+" div").clone();
    $(id+" div").detach();
    var st=this;
    $.each(this.tabs,function(idx,tab) {
        $(id).append(
          $("<button>tab"+idx+"</button>").attr('idx',idx)
          .click(function() {
              st.showTab($(this).attr('idx'));
          })
        );
    });
    this.showTab(0);
};
SuperTabs.prototype.showTab = function(idx) {
    $('#'+this.elId+" div").detach();
    $('#'+this.elId).append(this.tabs[idx]);
};
