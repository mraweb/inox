$(document).ready(function(){
	// link com target _blank
    $("a[rel=external]").attr('target','_blank');

    // desabilita skype
    $('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />');

    // tira padding-right de lista de links na home
    $(".alinha ul li:nth-child(3n), .box-tanques ul li:nth-child(4n)").css("padding-right", "0");

    // colorbox
    $(".group1, .group2").colorbox();
    
    // pega link e coloca na div toda
    $(".feature div").click(function(){
	    window.location = $(this).find("a").attr("href");
        return false;
	});
});