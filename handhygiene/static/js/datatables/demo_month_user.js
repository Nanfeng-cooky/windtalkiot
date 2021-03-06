+function ($) { "use strict";

  $(function(){

  var card_number = $('#card_number').val();

  // datatable
  $('[data-ride="datatables"]').each(function() {
    var oTable = $(this).dataTable( {
        "bProcessing": true,
    "bPaginate": true, //翻页功能
    "bLengthChange": true, //改变每页显示数据数量
    "bFilter": true, //过滤功能
    "bSort": false, //排序功能
    "bInfo": true,//页脚信息
    "serverSide": true,//开启服务器获取数据
        "sAjaxSource": "?c=user&a=user_month_wash_count&card_number="+card_number,
        "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
        "sPaginationType": "full_numbers",
        "aoColumns": [
       {"mData": "id", "title": "序号", "defaultContent": ""},
       {"mData": "date", "title": "洗手时间", "defaultContent": ""},
       {"mData": "count", "title": "洗手次数", "defaultContent": ""}      ],
        "oLanguage": { 
            'sSearch': '数据筛选:', 
            "sLengthMenu": "每页显示 _MENU_ 项记录", 
            "sZeroRecords": "没有符合项件的数据...", 
            "sInfo": "当前数据为从第 _START_ 到第 _END_ 项数据；总共有 _TOTAL_ 项记录", 
            "sInfoEmpty": "显示 0 至 0 共 0 项", 
            "sInfoFiltered": "(_MAX_)" 
        }
    });
  });
  });
}(window.jQuery);