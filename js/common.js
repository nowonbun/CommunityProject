var _ = (function(obj){
	obj.init();
	$(obj.onLoad);
	return obj;
})({
	data: null,
	init: function(){
		this.data = "hello world";
	},
	onLoad: function(){
		console.log(_.data);
		$("#scriptTest").html(_.data);
	}
});