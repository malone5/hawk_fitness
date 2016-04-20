				<div class="footer">
					<div class="container-fluid foot">
						<div class="row text-center">
							<hr>
							<div class="col-lg-4" style="font-size: 85%; color:#FFFFFF">
								<p><i>Background by</i>
								</br>
								<i>Robert Faulkner Studios</i></a>
							</p>
							</div>
							<div class="col-lg-4">
								<div class="links">
	                  				<a href="http://www.monmouth.edu/" title="Monmouth University"><strong>Monmouth University</strong></a>
									 /
	                  				<a href="http://www.monmouthhawks.com/ViewArticle.dbml?ATCLID=714830" title="Monmouth University Fitness Center"><strong>Fitness Center</strong></a>
									 /
									<a href="http://www.monmouthhawks.com/ViewArticle.dbml?ATCLID=722884" title="Monmouth University Intramurals"><strong>Intramurals</strong></a>
									</br>
									<div class="row text-center copy-right">
										<p class="copy">&copy 2016 Monmouth University Fitness</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<!--Admin / Manage Button-->
								<input type="button" class="btn btn-primary" value="<?php echo $admin_btn;?>" onclick="location.href='<?php echo base_url();?>login'"></input>
								<!--Logout Button-->
								<?php if(isset($logout_btn)) echo $logout_btn;?>
							</div>
						</div>
					</div>
				</div>
	</body>
</html>
