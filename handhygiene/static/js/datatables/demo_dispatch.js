+function ($) { "use strict";

  $(function(){

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
        "sAjaxSource": "?c=dispatch&a=dispatch_info",
        "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
        "sPaginationType": "full_numbers",
        "aoColumns": [
       {"mData": "sn", "title": "设备序列号", "defaultContent": ""},      
       {"mData": "position", "title": "描述", "defaultContent": ""},  
       {"mData": "battery", "title": "电量", "defaultContent": ""},  
       {"mData": "status", "title": "状态", "defaultContent": ""},   
       {"mData": "wash_number", "title": "累计出液次数", "defaultContent": ""}   
       ],
       "aoColumnDefs":[
          {"aTargets":[2],"mRender":function(data,type,row){
            if (data >= 60) {
              return "<span class=\"electric_quantity_g pandect_department\">高电量</span>";
            }else if (data < 60 && data >=30){
              return "<span class=\"electric_quantity_z pandect_department\">中电量</span>";
            }else if (data < 30 && data >=0) {
              return "<span class=\"electric_quantity_d pandect_department\">低电量</span>";
            }
          }},
          {"aTargets":[3],"mRender":function(data,type,row){
            if (data == "异常") {
              return "<span class=\"abnormity\">"+data+"</span>";
            }else {
              return "<span>"+data+"</span>";
            }
            
          }
          }
        ],
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