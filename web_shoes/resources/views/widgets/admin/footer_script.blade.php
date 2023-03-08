<!-- javascripts -->
<script type="text/javascript" src="/admin_page/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="/admin_page/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="/admin_page/js/jquery.scrollTo.min.js"></script>
<script src="/admin_page/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="/admin_page/assets/jquery-knob//js/jquery.knob.js"></script>
<script src="/admin_page/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/admin_page/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/admin_page/js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="/admin_page/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/admin_page/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="/admin_page/js/calendar-custom.js"></script>
<script src="/admin_page/admin_page/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="/admin_page/js/jquery.customSelect.min.js" ></script>
<script src="/admin_page/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="/admin_page/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="/admin_page/js/sparkline-chart.js"></script>
<script src="/admin_page/js/easy-pie-chart.js"></script>
<script src="/admin_page/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="/admin_page/js/xcharts.min.js"></script>
<script src="/admin_page/js/jquery.autosize.min.js"></script>
<script src="/admin_page/js/jquery.placeholder.min.js"></script>
<script src="/admin_page/js/gdp-data.js"></script>	
<script src="/admin_page/js/morris.min.js"></script>
<script src="/admin_page/js/sparklines.js"></script>	
<script src="/admin_page/js/charts.js"></script>
<script src="/admin_page/js/jquery.slimscroll.min.js"></script>
<!-- ck editor -->
<script type="text/javascript" src="/admin_page/assets/ckeditor/ckeditor.js"></script>
<script>

  //knob
//   $(function() {
//     $(".knob").knob({
//       'draw' : function () { 
//         $(this.i).val(this.cv + '%')
//       }
//     })
//   });

//   //carousel
//   $(document).ready(function() {
//       $("#owl-slider").owlCarousel({
//           navigation : true,
//           slideSpeed : 300,
//           paginationSpeed : 400,
//           singleItem : true

//       });
//   });

//   //custom select box

//   $(function(){
//       $('select.styled').customSelect();
//   });
  
//   /* ---------- Map ---------- */
// $(function(){
//   $('#map').vectorMap({
//     map: 'world_mill_en',
//     series: {
//       regions: [{
//         values: gdpData,
//         scale: ['#000', '#000'],
//         normalizeFunction: 'polynomial'
//       }]
//     },
//     backgroundColor: '#eef3f7',
//     onLabelShow: function(e, el, code){
//       el.html(el.html()+' (GDP - '+gdpData[code]+')');
//     }
//   });
// });


function confirm_delete(){
  var kq = confirm('Bạn có chắc muốn xoá không?');
  
  return kq;
}


</script>

</body>
</html>