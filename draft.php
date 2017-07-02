var prov_id = "", ActionHref = '', speed="", region="";
var filter_empty_sel_check = false;
var cookieValue = $.cookie("city_select");
var cookieRegion = $.cookie("region");


$(document).ready(function () {
if(cookieProvince == '27'){
$('#Mazandaran-Packages').css('display','inline');
}
function updateQueryStringParameter(uri, key, value) {
var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
var separator = uri.indexOf('?') !== -1 ? "&" : "?";
if (uri.match(re)) {
return uri.replace(re, '$1' + key + "=" + value + '$2');
}
else {
return uri + separator + key + "=" + value;
}
}

if (cookieValue == '1'){
$('.province-list-section').hide();
$('.sale_pallet').show();
$('#'+ cookieRegion).slideDown();

//set Qstr in href
jQuery.each($('.special_offer a'), function (i, val) {
ActionHref = $(this).attr('href');
var NewActionHref = updateQueryStringParameter(ActionHref, 'ref_province', cookieProvince);
$(this).attr('href',NewActionHref);
});


}else{
$('.province-list-section').show();
}


$('#province').on('change', function () {
filter_empty_sel_check = true;
$('.sale-packages').hide();
prov_id = $(this).val();

//set Qstr in href
jQuery.each($('.special_offer a'), function (i, val) {
ActionHref = $(this).attr('href');
var NewActionHref = updateQueryStringParameter(ActionHref, 'ref_province', prov_id);
$(this).attr('href',NewActionHref);
});
if (prov_id == '10' || prov_id == '31') {
$('.sale_pallet').show();
$('#region-1').slideDown();
region = "region-1";
}
else if (prov_id == '12' || prov_id == '14' || prov_id == '15' || prov_id == '2' || prov_id == '16') {
$('.sale_pallet').show();
$('#region-2').slideDown();
region = "region-2";
}
else if (prov_id == '11' || prov_id == '27') {
$('.sale_pallet').show();
$('#region-3').slideDown();
region = "region-3";
if(prov_id == '27'){
$('#Mazandaran-Packages').css('display','inline');
}
}
else if (prov_id == '1' || prov_id == '17' || prov_id == '8' || prov_id == '20' || prov_id == '5' || prov_id == '4' || prov_id == '3' || prov_id == '9' || prov_id == '18' || prov_id == '22' || prov_id == '23' || prov_id == '24' || prov_id == '25' || prov_id == '29' || prov_id == '7' || prov_id == '19' || prov_id == '26' || prov_id == '28' || prov_id == '30') {
$('.sale_pallet').show();
$('#region-4').slideDown();
region = "region-4";
}
else if (prov_id == '21' || prov_id == '13') {
$('.sale_pallet').show();
$('#region-5').slideDown();
region = "region-5";
}

$('.province-list-section').hide();
//Set Cookie
$.cookie("city_select", 1, {
expires : 30,

path    : '/',

domain  : 'parsonline.com',

secure  : false
});
$.cookie("region", region, {
expires : 30,

path    : '/',

domain  : 'parsonline.com',

secure  : false
});
$.cookie("prov_id", prov_id, {
expires : 30,

path    : '/',

domain  : 'parsonline.com',

secure  : false
});

});

$('.sale_tab').click(function () {
$('.sale_tab').removeClass('sale_tab_active');
$(this).addClass('sale_tab_active');
$('.current_package').hide();
speed=$(this).data('target');
if(speed == 'all'){
$('.current_package').show();
}else {
$('.' + speed).show();
}

});




$('.play_icon').click(function () {
$('.fix-bg').animate({height: '400px'}, 500, function () {
$('.play_icon').hide(800);
$('#iframe').show(1000);
$('#iframe').attr('src','http://tv.parsonline.com/embed.php?id=1281&autoplay=true');
});
});

setTimeout(function(){
$('.filter_container_duration').find('.filter_container_main').html('<input class="filter_input_checkbox" data-filter="duration" data-value="24" type="checkbox"> 24 ماهه<br><input class="filter_input_checkbox" data-filter="duration" data-value="12" type="checkbox"> 12ماهه<br><input class="filter_input_checkbox" data-filter="duration" data-value="6" type="checkbox"> 6ماهه<br>');
},1000);



$('.package_buttom_details').click(function () {
alert('<div class="alert_loader loader" ></div>');
var package_id = $(this).data('id');
$.post('http://www.parsonline.com/ajax_second/get_package_detail', { 'package_id': package_id }, function (result) {
alert(result , 'جزئیات بیشتر');
});
});
var landing_page_query = '/adsl/sale' ;
//-----------------------

$('.users_review').click(function () {
var this_review = $(this);
alert('<div class="alert_loader loader" ></div>');
$.ajax({
type: 'POST',
url: 'http://nt.parsonline.com/misc/review/get_review.php',
crossDomain: true,
cache : false,
data: { id: this_review.data('id'), cat: 'sale' , return_url:'http://www.parsonline.com/adsl/sale'},
xhrFields: {
withCredentials: true
},
success: function (result) {
alert('<div class="review" data-namespace="sale" data-prodname="'+this_review.data('prodname')+'" id="'+this_review.data('id')+'" >' + result + '</div>', 'نظرات کاربران');
}
});
});



});