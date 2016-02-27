		<div class="footer">
			<div class="container-fluid">
				<div class="row text-center">
					<hr>
					<!--Bootstrap was 'col-md-4' before adding logout button-->
					<div class="col-md-3"></div>
					<div class="col-md-3">
                        <a href="http://www.monmouth.edu/" title="Monmouth University"><strong>Monmouth University</strong></a>
						 /
                        <a href="http://www.monmouthhawks.com/ViewArticle.dbml?ATCLID=714830" title="Monmouth University Fitness Center"><strong>Fitness Center</strong></a>
						 /
						<a href="http://www.monmouthhawks.com/ViewArticle.dbml?ATCLID=722884" title="Monmouth University Intramurals"><strong>Intramurals</strong></a>
					</div>
					<div class="col-md-3">
						<!--Admin_btn-->
						<input type="button" class="btn btn-primary" value="<?php echo $admin_btn;?>" onclick="location.href='<?php echo base_url();?>login'"></input>
					</div>
					<div class="col-md-3">
						<!--Logout button-->
						<input type="button" class="btn btn-primary" value="<?php echo $logout_btn;?>" onclick="location.href='<?php echo site_url('manage/logout');?>'"></input>
				</div>
				<div class="row text-center">
					<em>HawkFitness&copy; 2015</em>
				</div>
			</div>
		</div>

	</body>
</html>
