var randomId = Math.floor(Math.random() * 100000);
var targetElemId = 'bcom_rwidget_' + randomId;
document.write('<div id="' + targetElemId + '"></div>');
var script   = document.createElement('script');
script.type  = 'text/javascript';
script.async = true;
script.src   = 'http://www.booking.com/review_widget/ru/quot-piano-quot.ru.html?tmpl=review_widget/review_widget&wid=' + targetElemId + '&wtype=box_big_feat&hotel_id=1487365&widget_language=ru';
var node     = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(script, node);
