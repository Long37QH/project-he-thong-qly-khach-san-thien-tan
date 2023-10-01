<!-- footter -->
<div class="footer-wrap pd-20 mb-20 card-box">
				Đồ án chuyên ngành - Hệ thống quản lý khách san Thiên Tân.
			</div>
		</div>
	</div>
    <!-- Kết thúc main làm việc -->
	
	<!-- js -->
	<script src="pub/vendors/scripts/core.js"></script>
	<script src="pub/vendors/scripts/script.min.js"></script>
	<script src="pub/vendors/scripts/process.js"></script>
	<script src="pub/vendors/scripts/layout-settings.js"></script>
	<script src="pub/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="pub/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="pub/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="pub/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="pub/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="pub/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="pub/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="pub/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="pub/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="pub/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="pub/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="pub/vendors/scripts/datatable-setting.js"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery('.product-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				infinite: true,
				speed: 1000,
				fade: true,
				asNavFor: '.product-slider-nav'
			});
			jQuery('.product-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.product-slider',
				dots: false,
				infinite: true,
				arrows: false,
				speed: 1000,
				centerMode: true,
				focusOnSelect: true
			});
			$("input[name='demo3_22']").TouchSpin({
				initval: 1
			});
		});
	</script></body>
</body>
</html>